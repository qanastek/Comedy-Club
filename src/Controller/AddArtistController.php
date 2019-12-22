<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Repository\ArtistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddArtistController extends Controller
{
    /**
     * @Route("/admin/add-artist", name="add_artist")
     */
    public function index()
    {

        if (isset($_POST['name']) &&
            isset($_POST['image'])
        ) {

            $entityManager = $this->getDoctrine()->getManager();

            $artist = new Artist();

            $artist->setName($_POST['name']);
            $artist->setImage($_POST['image']);

            if (isset($_POST['description'])) {
                $artist->setDescription($_POST['description']);
            }
            
            if (isset($_POST['facebook'])) {
                $artist->setFacebookUrl($_POST['facebook']);
            }

            if (isset($_POST['instagram'])) {
                $artist->setInstagramUrl($_POST['instagram']);
            }

            if (isset($_POST['twitter'])) {
                $artist->setTwitterUrl($_POST['twitter']);
            }

            $entityManager->persist($artist);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Artist added !'
            );

        }

        return $this->render('add_artist/index.html.twig', [
            'controller_name' => 'AddArtistController'
        ]);
    }
}
