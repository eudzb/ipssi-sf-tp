<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class adminController extends AbstractController
{
    public function admin()
    {
        //echo $test;
        return $this->render("admin.html.twig");
    }

    /*public function game
    {

    }*/
}