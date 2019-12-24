<?php

namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ALafficheController extends Controller
{
    /**
     * @Route("/a-laffiche", name="a_laffiche")
     */
    public function index(EventRepository $eventRepository)
    {
        $events = $eventRepository->nextEvents();
        
        return $this->render('a_laffiche/index.html.twig', [
            'controller_name' => 'ALafficheController',
            'events' => $events
        ]);
    }
}
