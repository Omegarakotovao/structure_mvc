<?php

namespace App\Controller;

use App\Service\HomeService;

class HomeController
{
      /**
     * Méthode pour rendre une vue avec un template
     * @param string $template Le nom du template à inclure
     * @param string|null $title Le titre de la page
     * @param array $data Les données à passer au template
     * @return void
     */
    private function render(string $template, ?string $title, array $data = [])
    {
        include __DIR__ . "/../../template/template_" . $template . ".php";
    }

    public function test()
    {
        return $this->render("home", "Accueil");
    }

    public function form()
    {
        $homeService = new HomeService();
        $data = [];
        //tester si le formulaire est soumis
        if (isset($_POST["submit"])) {
            $data["msg"] = $homeService->traitement($_POST);
        }
        
        //Afficher la page HTML
        return $this->render("form", "Formulaire", $data);
    }

    public function exemple() 
    {
        echo "Exemple ok";
    }
}
