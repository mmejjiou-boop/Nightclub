<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/admin')]

            #[Route('/', name: 'admin')]
            public function AdminControlleur(): Response
            {
            return $this->render ('global/index.html.twig',);

            
    }
}
