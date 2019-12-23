<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Form\AddArtistType;
use App\Repository\ArtistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddArtistController extends Controller
{
    /**
     * @Route("/admin/add-artist", name="add_artist")
     */
    public function index(Request $request)
    {
        $artist = new Artist();

        $form = $this->createForm(AddArtistType::class, $artist, [
            'action' => $this->generateUrl('add_artist'),
            'method' => 'POST'
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $artist->getImage();
            $newFileName = md5(uniqid()) . "." . $file->guessExtension();
            $file->move($this->getParameter("upload_directory") . "/artists/",$newFileName);
            $artist->setImage($newFileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($artist);
            $em->flush();

            $this->addFlash(
                'success',
                'Artist added !'
            );

        } else if ($form->isSubmitted() && !$form->isValid()) {

            $this->addFlash(
                'danger',
                "Form isn't valid !"
            );

        }

        return $this->render('add_artist/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
