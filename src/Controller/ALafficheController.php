<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ALafficheController extends Controller
{
    /**
     * @Route("/a-laffiche", name="a_laffiche")
     */
    public function index()
    {
        return $this->render('a_laffiche/index.html.twig', [
            'controller_name' => 'ALafficheController',
        ]);
    }
}
