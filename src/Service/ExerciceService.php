<?php

namespace App\Service;

class ExerciceService
{
    public function traitement(): string
    {
        //test si les champs sont remplis
        if (
            empty($_POST["nom"]) ||
            empty($_POST["prenom"]) ||
            empty($_POST["email"]) ||
            empty($_POST["mot_de_passe"]) ||
            empty($_POST["confirm_mot_de_passe"])
        ) {
            return "Veuillez remplir les champs du formulaire";
        }

        //test si le nom et le prénom ont au moins 2 caractères
        if (strlen($_POST["nom"]) < 2 || strlen($_POST["prenom"]) < 2) {
            return "le nom et ou le prénom sont trop cours";
        }

        //Test si le mail est valide
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            return "L'email n'est pas valide";
        }

        //test si le mot de passe posséde au moins 8 caractères
        if (strlen($_POST["mot_de_passe"]) < 8) {
            return "Le mot de passe est trop cours";
        }

        //test si les 2 mot de passe sont identiques
        if ($_POST["mot_de_passe"] != $_POST["confirm_mot_de_passe"]) {
            return "Les mots de passe sont différents";
        }
        
        return "Vous étes enregistré";
    }
}
