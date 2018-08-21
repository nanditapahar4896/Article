<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class ArticleController extends AbstractController
{
    /**
     * @Route("/",name="app_homepage")
     */


    public function homepage()
    {
       return $this->render('article/homepage.html.twig');
    }

    /**
    *@Route("/news/{slug}",name="article_show")
    */
    public function show($slug)
    {
      $comments=[
         'Cup cakes are much better than muffins',
         'Try the icecream cake of Baskin Robbins',
         'Donuts are love'

      ];



        return $this->render('article/show.html.twig',[
             'title'=>ucwords(str_replace('-', ' ', $slug)),
             'slug' =>$slug,
             'comments'=>$comments,
        ]);
    }
    /**
    * @Route("/news/{slug}/heart",name="article_toggle_heart",methods={"POST"})
    */

    public function toggleArticleHeart($slug)
    {
         return new JsonResponse(['hearts' => rand(5,100)]);
    }

}
