<?php

namespace App\Controller;

use App\Entity\Artist;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistAjaxController extends Controller
{
    /**
     * @Route("/ajax/artists", name="artist_ajax")
     */
    public function artists()
    {
        $repository = $this->getDoctrine()->getRepository(Artist::class);

        $artists = $repository->findAll();

        $res = array();

        foreach ($artists as $artist) {
            $res[] = array(
                'id' => $artist->getId(),
                'image' => $artist->getImage(),
                'name' => $artist->getName(),
                'description' => $artist->getDescription(),
                'facebook_url' => $artist->getFacebookUrl(),
                'instagram_url' => $artist->getInstagramUrl(),
                'twitter_url' => $artist->getTwitterUrl()
            );
        }

        return new JsonResponse($res);
    }
}
