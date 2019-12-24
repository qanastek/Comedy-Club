<?php

namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index(EventRepository $eventRepository)
    {
        $events = $eventRepository->nextEvents();

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'events' => $events
        ]);
    }
}
