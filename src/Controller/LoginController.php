<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            return $this->redirectToRoute('dashboard');
        } else {
            return $this->render('login/index.html.twig', [
                'controller_name' => 'LoginController',
            ]);
        }
    }
}
