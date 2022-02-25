<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SaisonController extends AbstractController
{
    #[Route('/saison', name: 'saisons')]
    public function index(): Response
    {
        return $this->render('saison/index.html.twig');
    }
    #[Route('/saison/{saison}', name: 'saison')]
    public function saison($saison): Response
    {
        
        return $this->render('saison/index.html.twig', [
            "saison" => $saison,
            "printemps" => "c'est le printemps",
            "ete"       => "c'est l'été",
            "automne"   => "c'est l'automne",
            "hiver"     => "c'est l'hiver"
        ]);
    }
}