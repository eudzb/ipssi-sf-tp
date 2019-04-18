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

class articleController extends AbstractController
{
    public function article() {
        $repository = $this->getDoctrine()->getRepository(Article::class);
        return $this->render('article.html.twig', ['articles' => $repository->findAll()]);
        //return $this->render("article.html.twig");
    }
}