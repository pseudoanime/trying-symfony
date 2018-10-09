<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticleController
 *
 * @package App\Controller
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/",name="app_homepage")
     */
    public function homepage()
    {

        return $this->render('article/homepage.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * show
     * @Route("/news/{slug}",name="article_show")
     */
    public function show($slug)
    {
        $comments = ['1', '2', '3'];

        return $this->render('article/show.html.twig', [
            'slug'     => $slug,
            'comments' => $comments
        ]);
    }

    /**
     * toggle_heart
     * @Route("/news/{slug}/heart", name="article_toggle_heart")
     *
     * @param $slug
     */
    public function toggle_heart($slug)
    {
        return new JsonResponse(['hearts' => rand(5, 100)]);
    }
}
