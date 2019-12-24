<?php

namespace App\Controller;

use App\Repository\ArtistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ArtistsController extends Controller
{
    /**
     * @Route("/artists", name="artists")
     */
    public function index(ArtistRepository $artistRepository)
    {
        $artists = $artistRepository->allArtists();

        return $this->render('artists/index.html.twig', [
            'controller_name' => 'ArtistsController',
            'artists' => $artists
        ]);
    }
}
