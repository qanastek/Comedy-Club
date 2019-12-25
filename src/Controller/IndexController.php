<?php

namespace App\Controller;

use App\Repository\EventRepository;
use App\Repository\GalleryEntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index(EventRepository $eventRepository, GalleryEntityRepository $GalleryEntityRepository)
    {
        $events = $eventRepository->nextEvents();
        $gallery = $GalleryEntityRepository->firstGallery(16);

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'events' => $events,
            'gallery' => $gallery
        ]);
    }
}
