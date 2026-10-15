<?php

namespace App\Controller;

use App\Service\HomeService;

class HomeController
{

    protected function render(string $template, ?string $title, array $data = []): mixed
    {
        return include __DIR__ . "/../../template/template_" . $template . ".php";
    }

    public function test(): mixed
    {
        return $this->render("home", "Accueil");
    }

    public function form(): mixed
    {
        //instance de HomeService
        $homeService = new HomeService();
        //tester si le formulaire est soumis
        if (isset($_POST["submit"])) {
            $data["msg"] = $homeService->traitement($_POST);
        }

        //Afficher la page HTML
        return $this->render("form", "Formulaire", $data??[]);
    }

    public function exemple()
    {
        echo "Exemple ok";
    }
}
