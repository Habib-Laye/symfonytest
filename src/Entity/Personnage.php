<?php

namespace App\Entity;


class Personnage{

    public $pseudo;
    public $age;
    public $sexe;
    public $carac = []; 

    // Déclarer une propriété static qui sera un tableau et qui permettra de lister nos personnages
    // Le mot static permet d'appeller la fonction de n'importe où et son accessibilité
    public static $personnages=[];

    public function __construct($pseudo,$age,$sexe,$carac){

        $this->pseudo = $pseudo;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;
        self::$personnages[] = $this;   // Le mot self:: fait appelle à personnage

    }

    public static function creerPersonnages(){

        $p1 = new Personnage("Personne1", 25, true, [
            "force" => 3,
            "agi" => 2,
            "intel" => 3
        ]);

        $p2 = new Personnage("Personne2", 30, true, [
            "force" => 5,
            "agi" => 1,
            "intel" => 2
        ]);

        $p3 = new Personnage("Personne3", 22, false, [
            "force" => 1,
            "agi" => 2,
            "intel" => 5
        ]);

    }

    public static function getPersonnageParPseudo($pseudo){

        foreach (self:: $personnages as $perso) {
            if (strtolower($perso->pseudo) === $pseudo){
                return $perso;
            }
        }

    } 

}