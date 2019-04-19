<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class gameController extends AbstractController
{
    public function game()
    {
        $test = "5";
        //echo $test;
        return $this->render("game.html.twig");
    }

    /*public function game
    {

    }*/
}