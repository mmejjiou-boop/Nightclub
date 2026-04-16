<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GlobalControleur
{   
    #[Route("/")]
    public function accueil(): Response
    {
        return new Response('Salut');
    }

}