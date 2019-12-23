<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Form\AddArtistType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ModifyArtistController extends Controller
{
    /**
     * @Route("/admin/modify-artist", name="modify_artist")
     */
    public function index(Request $request)
    {

        $id = $_GET['id'];

        if (!isset($id)) {

            $this->addFlash(
                'danger',
                "Artist doesn't exist !"
            );
        
            return $this->render('list_artists/index.html.twig', []);
        }

        $em = $this->getDoctrine()->getManager();

        $artist = $em->getRepository(Artist::class)->findOneBy([
            "id" => $id
        ]);
        
        if (!isset($artist)) {

            $this->addFlash(
                'danger',
                "Artist doesn't exist !"
            );
        
            return $this->render('list_artists/index.html.twig', []);
        }

        $form = $this->createForm(AddArtistType::class, $artist, [
            'action' => $this->generateUrl('add_artist'),
            'method' => 'POST'
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->flush();

            $this->addFlash(
                'success',
                'Artist modified !'
            );

        } else if ($form->isSubmitted() && !$form->isValid()) {

            $this->addFlash(
                'danger',
                "Form isn't valid !"
            );

        }
        
        return $this->render('list_artists/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
