<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur 1
 * Date: 16/04/2019
 * Time: 15:30
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class profilController extends AbstractController
{
    public function profil() {
        return $this->render("profil.html.twig");
    }
}