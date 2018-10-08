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
        return new Response($slug);
    }
}
