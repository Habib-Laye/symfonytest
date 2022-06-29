<?php

namespace App\Entity;

class Arme {            // Création de l'objet Arme
    private $nom;
    private $description;
    private $degat;

    public static $armes=[];

    public function __construct($nom, $description, $degat){
        $this->nom = $nom;
        $this->description = $description;
        $this->degat = $degat;
        self::$armes[] = $this;  //Pour rajouter l'objet créé dans le tableau static
    }

    public function getNom(){return $this->nom;}
    public function getDescription(){return $this->description;}
    public function getDegat(){return $this->degat;}

    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }

    public function setDescription($Description){
        $this->Description = $Description;
        return $this;
    }

    public function setdegat($degat){
        $this->degat = $degat;
        return $this;
    }


    public static function creerArme(){  // Fonction qui crée chacune des armes et génère 
        //trois armes différentes

        new Arme("épée","Une superbe épée tranchante",10);
        new Arme("hache","Une arme ou un outil",15);
        new Arme("arc","Une arme à distance",7);

    }

    public static function getArmeParNom($nom){
        foreach(self::$armes as $arme){ // Parcourrir le tableau et mettre chacune de nos valeurs d'armes dedans
            if(strtolower(str_replace("é","e",$arme->nom)) === $nom){
                return $arme;
            }
        }       
        // str_replace: pour supprimer les accents et les remplacés par des non accents
        // strtolower: pour remplacer des majuscules par des minuscules
    }

}