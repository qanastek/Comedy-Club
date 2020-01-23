<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AProposController extends AbstractController
{
    /**
     * @Route("/a-propos", name="a_propos")
     */
    public function index()
    {
        return $this->render('a_propos/index.html.twig', [
            'controller_name' => 'AProposController',
        ]);
    }
}
