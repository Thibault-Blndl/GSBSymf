<?php

namespace App\Controller;

use App\Entity\FicheFrais;
use App\Entity\LigneFraisForfait;
use App\Form\LigneFraisForfaitType;
use App\Form\LigneFraisHorsForfaitType;
use App\Repository\LigneFraisForfaitRepository;
use App\Repository\LigneFraisHorsForfaitRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lignefrais")
 * @IsGranted("ROLE_USER")
 */
class LigneFraisController extends AbstractController
{
    /**
     * @Route("/new", name="ligne_frais_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $ligneFrais = new LigneFraisForfait();
        $form = $this->createForm(LigneFraisForfaitType::class, $ligneFrais);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ligneFrais);
            $entityManager->flush();

            return $this->redirectToRoute('ligne_frais_index');
        }

        return $this->render('ligne_frais/new.html.twig', [
            'ligne_frais' => $ligneFrais,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/edit/{id}", name="ligne_frais_edit", methods={"GET","POST"})
     */
    public function editAll(
        Request $request,
        LigneFraisForfaitRepository $ligneFraisForfaitRepository,
        LigneFraisHorsForfaitRepository $ligneFraisHorsForfaitRepository,
        FicheFrais $ficheFrais
    ):Response
    {
        $lignesFraisForfait = $ligneFraisForfaitRepository->findBy(['fiche' => $ficheFrais]);
        $lignesFraisHorsForfait = $ligneFraisHorsForfaitRepository->findBy(['fiche' => $ficheFrais]);

        foreach ($lignesFraisHorsForfait as $ligneFraisHorsForfait)
        {
            $ligneFraisHorsForfait->setDate($ligneFraisHorsForfait->getFiche()->getMois());
        }

        $formFraisForfait = $this->createForm(
            CollectionType::class,
            $lignesFraisForfait,
            [
                'entry_type' => LigneFraisForfaitType::class,
                'label' => false,
                'entry_options' => ['label' => false],
            ]
        );

        $formFraisHorsForfait = $this->createForm(
            CollectionType::class,
            $lignesFraisHorsForfait,
            [
                'entry_type' => LigneFraisHorsForfaitType::class,
                'label' => false,
                'entry_options' => ['label' => false],
            ]
        );

        $formFraisForfait->handleRequest($request);
        $formFraisHorsForfait->handleRequest($request);

        if ($formFraisForfait->isSubmitted() && $formFraisForfait->isValid() || $formFraisHorsForfait->isSubmitted() && $formFraisHorsForfait->isValid()) {
            $ficheFrais->setDateModif(new \DateTime());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fiche_frais_index');
        }

        return $this->render('ligne_frais/edit.html.twig', [
            'formFraisForfait' => $formFraisForfait->createView(),
            'formFraisHorsForfait' => $formFraisHorsForfait->createView(),
        ]);
    }
}
