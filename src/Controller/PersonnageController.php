<?php

namespace App\Controller;

use App\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/personnage", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }

    /**
     * @Route("/persos", name="personnages")
     */
    public function persos(): Response
    {
        /*Déclaration de trois personnages première méthode sans POO
        $j1 = [
            'pseudo' => 'personne1',
            'age' => 25,
            'sexe' => true,
            'carac' =>[
                'force' => 3,
                'agi' => 2,
                'intel' => 3,
            ]
            ];

        $j2 = [
            'pseudo' => 'personne2',
            'age' => 30,
            'sexe' => true,
            'carac' =>[
                'force' => 5,
                'agi' => 1,
                'intel' => 2,
        ]
            ];

        $j3 = [
            'pseudo' => 'personne3',
            'age' => 22,
            'sexe' => false,
            'carac' =>[
                'force' => 1,
                'agi' => 2,
                'intel' => 5,
        ]
            ];

        // Création d'un autre tableau associatif

        $players = [
            'j1' => $j1,
            'j2' => $j2,
            'j3' => $j3,
        ];
        */

        //Déclaration de trois personnages deuxième méthode avec POO

        Personnage::creerPersonnages();
        return $this->render('personnage/persos.html.twig', [
            'players' => Personnage::$personnages // Tableau de players qui auront tous les mêmes informations
        ]);
    }

     /**
     * @Route("/persos/{pseudo}", name="afficher_personnage")
     */
    public function afficherPerso($pseudo)
    {
        Personnage::creerPersonnages();
        $perso = Personnage::getPersonnageParPseudo($pseudo);

        return $this->render('personnage/perso.html.twig', [
            'perso' => $perso // Tableau de players qui auront tous les mêmes informations
        ]);

    }



}
