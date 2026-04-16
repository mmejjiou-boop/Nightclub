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
            $title = 'Ma jolie page';
            $title =  strtoupper($title);

            return $this->render('global/accueil.html.twig', [
                   'title' => $title,
            ]);
        }

    #[Route('/contact', name: 'contact')]
        public function contact(): Response
        {
            return $this->render('global/contact.html.twig');
        }

    #[Route('/A_propos', name: 'A_propos')]
        public function propos(): Response
            {

            {
            $historique = [
                [
                    'annee' => 1970,
                    'evenement' => 'fuovfonvfonvfonvf'
                ],
                [
                    'annee' => 1980,
                    'evenement' => 'sfjlsjsf jfs  fsj sf'
                ],
                [
                    'annee' => 1990,
                    'evenement' => 'slslslslfb jjsjj'
                ],
                [
                    'annee' => 2010,
                    'evenement' => 'sfb fs fsf'
                ]
            ];
            dump($historique);
            return $this->render('global/propos.html.twig', [
            'historique' => $historique
        ]);
        }    
        }   
    
    #[Route('/article/{slug}')]
    public function article(string $slug): Response
    {
        return new Response("Article $slug");
    }

    #[Route('/article/nouveau/')]
        public function nouveau()
    {
        return new Response("Article nouveau");
    }

    #[Route('/contacter', methods: ['GET'])]
        public function contacter(): Response
        {
            return new Response("Nous contacter en GET");
        }


    #[Route('/contact_traitement', methods: ['POST'])]
        public function contact_traitement(): Response
        {
            return new Response("Nous contacter en POST");
        }


#[Route("/json/etapes")]
public function monJson()
{
    $test = [
            "id" => 1,
            "annee" => 2024,
            "texte" => "bababa",
            ];
            dd($test);
    return $this->json([ $test]);

}


}

