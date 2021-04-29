<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiController extends AbstractController
{
    /**
     * @Route("/si", name="si")
     */
    public function index(): Response
    {
        return $this->render('si/index.html.twig', [
            'controller_name' => 'SiController',
        ]);
    }
}
