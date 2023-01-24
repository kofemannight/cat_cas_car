<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('Это наша первая страница с роутом');
    }

    /**
     * @Route("/articles/{slug}")
     */
    public function show($slug): Response
    {
        $comments = [
            'This first comment',
            'This two comment',
            'This three comment',
        ];

        return $this->render('articles/show.html.twig', [
            'article' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}