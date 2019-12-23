<?php

namespace App\Controller;

use App\Entity\Website;
use App\Form\WebsiteType;
use App\Repository\WebsiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/website")
 */
class WebsiteController extends Controller
{
    /**
     * @Route("/", name="website_index", methods={"GET"})
     */
    public function index(WebsiteRepository $websiteRepository): Response
    {
        return $this->render('website/index.html.twig', [
            'websites' => $websiteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="website_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $website = new Website();
        $form = $this->createForm(WebsiteType::class, $website);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($website);
            $entityManager->flush();

            return $this->redirectToRoute('website_index');
        }

        return $this->render('website/new.html.twig', [
            'website' => $website,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="website_show", methods={"GET"})
     */
    public function show(Website $website): Response
    {
        return $this->render('website/show.html.twig', [
            'website' => $website,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="website_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Website $website): Response
    {
        $form = $this->createForm(WebsiteType::class, $website);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('website_index');
        }

        return $this->render('website/edit.html.twig', [
            'website' => $website,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="website_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Website $website): Response
    {
        if ($this->isCsrfTokenValid('delete'.$website->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($website);
            $entityManager->flush();
        }

        return $this->redirectToRoute('website_index');
    }
}
