<?php

namespace App\Controller;

use App\Entity\Artist;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistesController extends Controller
{
    /**
     * @Route("/artistes", name="artistes")
     */
    public function index()
    {
        return $this->render('artistes/index.html.twig', [
            'controller_name' => 'ArtistesController',
        ]);
    }

    /**
     * @Route("/artist/delete", name="delete_artist")
     */
    public function deleteArtist()
    {
        $id = $_GET["id"];

        if (isset($id)) {

            $entityManager = $this->getDoctrine()->getManager();

            $artist = $entityManager->getRepository(Artist::class)->find($id);

            if ($artist) {
                $entityManager->remove($artist);
                $entityManager->flush();
                
                $this->addFlash(
                    'success',
                    'Artist deleted !'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Artist not found !'
                );
            }
            
        } else {
            $this->addFlash(
                'danger',
                'Artist not found !'
            );
        }
                
        return $this->redirectToRoute('list_artists');
    }
}
