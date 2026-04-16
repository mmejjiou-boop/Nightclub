<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GlobalController extends AbstractController
{
    #[Route('/accueil', name: 'accueil')]
    public function accueil(): Response
    {
        return $this->render ('global/accueil.html.twig',);
    }


    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render ('global/contact.html.twig',);
    }


        #[Route('/A_propos', name: 'A_propos')]
    public function propos(): Response
    {
        return $this->render ('global/propos.html.twig',);
    }
}

