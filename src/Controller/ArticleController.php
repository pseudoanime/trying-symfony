<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ArticleController
 *
 * @package App\Controller
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Testi');

        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * show
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = ['1', '2', '3'];

        return $this->render('article/show.html.twig', [
            'title'    => str_replace("-", " ", ucwords($slug)),
            'comments' => $comments
        ]);
    }
}
