<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Repository\ArtistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ListArtistsController extends Controller
{
    /**
     * @Route("/admin/artists", name="list_artists")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Artist::class);

        $artists = $repository->findAll();

        return $this->render('list_artists/index.html.twig', [
            'controller_name' => 'ListArtistsController',
            'artists' => $artists
        ]);
    }
}
