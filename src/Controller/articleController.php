<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur 1
 * Date: 16/04/2019
 * Time: 15:03
 */

namespace App\Controller;
use App\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class articleController extends AbstractController
{
    public function article() {
        $repository = $this->getDoctrine()->getRepository(Commentaire::class);
        return $this->render('article.html.twig', ['commentaires' => $repository->findAll()]);
        //return $this->render("article.html.twig");
    }
}