<?php

namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/a-laffiche")
 */
class ALafficheController extends AbstractController
{
    /**
     * @Route("/", name="a_laffiche")
     */
    public function index(EventRepository $eventRepository)
    {
        $events = $eventRepository->nextEvents();
        
        return $this->render('a_laffiche/index.html.twig', [
            'controller_name' => 'ALafficheController',
            'events' => $events
        ]);
    }

    /**
     * @Route("/event/{id}", name="event_infos", methods={"GET"})
     */
    public function infos($id, EventRepository $eventRepository): Response
    {
        return $this->render('a_laffiche/event.html.twig', [
            'event' => $eventRepository->find($id),
        ]);
    }
}
