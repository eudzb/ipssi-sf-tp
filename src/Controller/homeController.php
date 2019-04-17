<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur 1
 * Date: 16/04/2019
 * Time: 15:03
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class homeController extends AbstractController
{
    public function home() {
        return $this->render("home.html.twig"); //page d'accueil
    }
}