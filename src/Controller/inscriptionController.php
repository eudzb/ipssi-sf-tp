<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur 1
 * Date: 16/04/2019
 * Time: 15:03
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class inscriptionController extends AbstractController
{
    public function inscription() {
    return $this->render("inscription.html.twig");
}
}