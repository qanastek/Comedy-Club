<?php

namespace App\Controller;

use App\Entity\GalleryEntity;
use App\Form\GalleryEntityType;
use App\Repository\GalleryEntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dashboard/gallery-entity")
 */
class GalleryEntityController extends Controller
{
    /**
     * @Route("/", name="gallery_entity_index", methods={"GET"})
     */
    public function index(GalleryEntityRepository $galleryEntityRepository): Response
    {
        return $this->render('gallery_entity/index.html.twig', [
            'gallery_entities' => $galleryEntityRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="gallery_entity_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $galleryEntity = new GalleryEntity();
        $form = $this->createForm(GalleryEntityType::class, $galleryEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($galleryEntity);
            $entityManager->flush();

            return $this->redirectToRoute('gallery_entity_index');
        }

        return $this->render('gallery_entity/new.html.twig', [
            'gallery_entity' => $galleryEntity,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="gallery_entity_show", methods={"GET"})
     */
    public function show(GalleryEntity $galleryEntity): Response
    {
        return $this->render('gallery_entity/show.html.twig', [
            'gallery_entity' => $galleryEntity,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="gallery_entity_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, GalleryEntity $galleryEntity): Response
    {
        $form = $this->createForm(GalleryEntityType::class, $galleryEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gallery_entity_index');
        }

        return $this->render('gallery_entity/edit.html.twig', [
            'gallery_entity' => $galleryEntity,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="gallery_entity_delete", methods={"DELETE"})
     */
    public function delete(Request $request, GalleryEntity $galleryEntity): Response
    {
        if ($this->isCsrfTokenValid('delete'.$galleryEntity->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($galleryEntity);
            $entityManager->flush();
        }

        return $this->redirectToRoute('gallery_entity_index');
    }
}
