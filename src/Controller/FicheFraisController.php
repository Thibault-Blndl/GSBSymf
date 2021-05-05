<?php

namespace App\Controller;

use App\Entity\FicheFrais;
use App\Entity\LigneFraisForfait;
use App\Entity\LigneFraisHorsForfait;
use App\Form\FicheFraisType;
use App\Repository\FicheFraisRepository;
use App\Repository\FraisForfaitRepository;
use App\Repository\LigneFraisForfaitRepository;
use App\Repository\LigneFraisHorsForfaitRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * @Route("/fichefrais")
 * @IsGranted("ROLE_USER")
 */
class FicheFraisController extends AbstractController
{
    /**
     * @Route("/", name="fiche_frais_index", methods={"GET"})
     */
    public function index(
        FicheFraisRepository $ficheFraisRepository,
        TokenStorageInterface $tokenStorage,
        EntityManagerInterface $em
    ): Response
    {
        $ficheFrais = $ficheFraisRepository->findBy(['user' => $tokenStorage->getToken()->getUser()], ['mois' => 'DESC']);
        //affichage des fiches de frais de l'utilisateur connecté trié par mois et décroissant
        foreach($ficheFrais as $fiche)
        {
            $lignesFraisForfait = $fiche->getLignesFraisForfait()->toArray();  //On récupère les lignes frais forfait
            $lignesFraisHorsForfait = $fiche->getLignesFraisHorsForfait()->toArray(); //et les hors forfait

            $montantTotalForfait = 0; //On set le montant à 0
            foreach ($lignesFraisForfait as $ligneFraisForfait)
            {
                $quantite = $ligneFraisForfait->getQuantite(); //On récup la qté des fraisForfait
                $montant = $ligneFraisForfait->getFraisForfait()->getMontant(); //et le montant

                $montantTotalForfait += $quantite * $montant; //On calcul sa somme
                //+= veut dire $montantTotalForfait +($quantité*$montant)
            }

            $montantTotalHorsForfait = 0; //Pareil qu'avant mais pour les HorsForfait
            foreach ($lignesFraisHorsForfait as $ligneFraisHorsForfait)
            {
                $montantTotalHorsForfait += $ligneFraisHorsForfait->getMontant();
            }

            $fiche->setMontantValide($montantTotalForfait + $montantTotalHorsForfait);
            $em->persist($fiche);
            $em->flush(); //on vient mettre à jour la fiche
        }

        return $this->render('fiche_frais/index.html.twig', [
            'fiche_frais' => $ficheFrais,
            'fiche_frais_admin' => $ficheFraisRepository->findAll(), //prévu pour afficher toutes les fiches à l'admin
        ]);
    }

    /**
     * @Route("/new", name="fiche_frais_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $ficheFrai = new FicheFrais();
        $form = $this->createForm(FicheFraisType::class, $ficheFrai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ficheFrai);
            $entityManager->flush();

            return $this->redirectToRoute('fiche_frais_index', ['id'=>$ficheFrai->getId()]);
        }

        return $this->render('fiche_frais/new.html.twig', [
            'fiche_frai' => $ficheFrai,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fiche_frais_show", methods={"GET"})
     */
    public function show(FicheFrais $ficheFrai): Response
    {
        return $this->render('fiche_frais/show.html.twig', [
            'fiche_frai' => $ficheFrai,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="fiche_frais_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FicheFrais $ficheFrai): Response
    {
        $form = $this->createForm(FicheFraisType::class, $ficheFrai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fiche_frais_index');
        }

        return $this->render('fiche_frais/edit.html.twig', [
            'fiche_frai' => $ficheFrai,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fiche_frais_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FicheFrais $ficheFrai): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ficheFrai->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ficheFrai);
            $entityManager->flush();
        }

        return $this->redirectToRoute('fiche_frais_index');
    }
}
