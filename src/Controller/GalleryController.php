<?php

namespace App\Controller;

use App\Repository\GalleryEntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function index(GalleryEntityRepository $GalleryEntityRepository)
    {
        $gallery = $GalleryEntityRepository->getAll();

        return $this->render('gallery/index.html.twig', [
            'controller_name' => 'GalleryController',
            'gallery' => $gallery
        ]);
    }
}
