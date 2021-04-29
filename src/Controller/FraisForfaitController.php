<?php

namespace App\Controller;

use App\Entity\FicheFrais;
use App\Entity\FraisForfait;
use App\Form\FraisForfaitType;
use App\Form\LigneFraisForfaitType;
use App\Repository\FraisForfaitRepository;
use App\Repository\LigneFraisForfaitRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/frais/forfait")
 * @IsGranted("ROLE_USER")
 */
class FraisForfaitController extends AbstractController
{
    /**
     * @Route("/", name="frais_forfait_index", methods={"GET"})
     */
    public function index(FraisForfaitRepository $fraisForfaitRepository): Response
    {
        return $this->render('frais_forfait/index.html.twig', [
            'frais_forfaits' => $fraisForfaitRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="frais_forfait_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $fraisForfait = new FraisForfait();
        $form = $this->createForm(FraisForfaitType::class, $fraisForfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fraisForfait);
            $entityManager->flush();

            return $this->redirectToRoute('frais_forfait_index');
        }

        return $this->render('frais_forfait/new.html.twig', [
            'frais_forfait' => $fraisForfait,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="frais_forfait_show", methods={"GET"})
     */
    public function show(FraisForfait $fraisForfait): Response
    {
        return $this->render('frais_forfait/show.html.twig', [
            'frais_forfait' => $fraisForfait,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="frais_forfait_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FraisForfait $fraisForfait): Response
    {
        $form = $this->createForm(FraisForfaitType::class, $fraisForfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('frais_forfait_index');
        }

        return $this->render('frais_forfait/edit.html.twig', [
            'frais_forfait' => $fraisForfait,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/edit/{id}", name="ligne_frais_forfait_edit", methods={"GET","POST"})
     */
    public function editAll(Request $request, LigneFraisForfaitRepository $ligneFraisForfaitRepository, FicheFrais $ficheFrais):Response
    {
        $ligneFraisForfait = $ligneFraisForfaitRepository->findAll();
        $form = $this->createForm(
            CollectionType::class,
            $ligneFraisForfait,
            [
                'entry_type' => LigneFraisForfaitType::class,
                'label' => false,
                'entry_options' => ['label' => false]
            ]
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ligne_frais_forfait_index');
        }

        return $this->render('ligne_frais/edit.html.twig', [
            'ligne_frais' => $ligneFraisForfait,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="frais_forfait_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FraisForfait $fraisForfait): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fraisForfait->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fraisForfait);
            $entityManager->flush();
        }

        return $this->redirectToRoute('frais_forfait_index');
    }
}
