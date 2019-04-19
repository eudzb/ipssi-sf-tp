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
/*
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Player;
use App\Form\InscriptionType;
use App\Repository\PlayerRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class inscriptionController extends AbstractController
{
    public function inscription(Request $request): Response {
        $form = $this->createForm(InscriptionType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $player = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($player);
            $entityManager->flush();
            return $this->redirectToRoute('inscription', [
                'id' => $player->getId(),
            ]);
        }
        return $this->render("inscription.html.twig", [
            'InscriptionType' => $form->createView()
        ]);
    }
}*/