<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Map\Bridge\Leaflet\LeafletOptions;
use Symfony\UX\Map\Bridge\Leaflet\Option\TileLayer;
use Symfony\UX\Map\InfoWindow;
use Symfony\UX\Map\Map;
use Symfony\UX\Map\Marker;
use Symfony\UX\Map\Point;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ContactType;

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
        public function contact(Request $request): Response
        {
    
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            dd($data);
        }

        $map = (new Map('default'))
            ->center(new Point(45.7534031, 4.8295061))
            ->zoom(6)

            ->addMarker(new Marker(
                position: new Point(45.7534031, 4.8295061),
                title: 'Lyon',
                infoWindow: new InfoWindow(
                    content: '<p>Thank you <a href="https://github.com/Kocal">@Kocal</a> for this component!</p>',
                )
            ))

            ->options((new LeafletOptions())
                ->tileLayer(new TileLayer(
                    url: 'https://tile.openstreetmap.org/{z}/{x}/{y}.png',
                    attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
                    options: ['maxZoom' => 19]
                ))
            );
            return $this->render('global/contact.html.twig', [
                'map' => $map,
                'form' => $form,
            ]);
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
