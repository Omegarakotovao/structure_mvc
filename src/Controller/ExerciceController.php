<?php

namespace App\Controller;
//Import du service
use App\Service\ExerciceService;

class ExerciceController
{
    public function hello(): mixed
    {
        //tester si le formulaire est soumis
        if (isset($_POST["submit"])) {
            //Test si le champ texte est rempli
            if (!empty($_POST["texte"])) {
                //On passe le message au tableau
                $data["msg"] = "Le formulaire à été soumis avec " . $_POST["texte"];
            } else {
                $data["msg"] = "Veuillez remplir le champ du formulaire";
            }
        }
        //rendu du template
        return $this->render('home', 'ex1', $data ?? []);
    }

    public function gestion(): mixed
    {
        //instance du service
        $exerciceService = new ExerciceService();

        //Test si le formulaire est soumis
        if (isset($_POST["submit"])) {
            //Récupération du traitement
            $data["msg"] = $exerciceService->traitement();
        }
        
        return $this->render('exercice3', 'Exercice 3', $data ?? []);
    }

    private function render(string $template, ?string $title, array $data = []): mixed
    {
        return include __DIR__ . "/../../template/template_" . $template . ".php";
    }
}
