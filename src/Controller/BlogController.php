<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function blog(ArticleRepository $ArticleEntityRepository)
    {
        $articles = $ArticleEntityRepository->findAll();

        return $this->render('blog/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/article/{id}", name="blog_article", methods={"GET"})
     */
    public function article($id, ArticleRepository $articleRepository): Response
    {
        return $this->render('blog/article.html.twig', [
            'article' => $articleRepository->find($id),
        ]);
    }
}
