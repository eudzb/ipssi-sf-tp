<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur 1
 * Date: 16/04/2019
 * Time: 15:03
 */

namespace App\Controller;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class homeController extends AbstractController
{
    public function home() {
        $repository = $this->getDoctrine()->getRepository(Article::class);
        return $this->render('home.html.twig', ['articles' => $repository->findAll()]);
        //return $this->render("home.html.twig"); //page d'accueil
    }
/*
    public function articleBDD(){

        $repository = $this->getDoctrine()->getRepository(Player::class);
        return $this->render('home.html.twig', ['players' => $repository->findAll()]);


        /*$articles = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:articles')
            ->findAll();

        return $this->render("AscavideoBundle:views:home.html.twig", array(
            'articles' => $articles,
        ));
    }*/
}