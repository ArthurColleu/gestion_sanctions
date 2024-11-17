<?php

namespace App\Controler;

class BaseControler extends AbstractControler
{

    // Méthode permettant de gérer la page d'accueil
    public function render(string $template, array $data = []) : void {
        extract($data);
        ob_start();
        require __DIR__ . '/../templates/' . $template . '.php';
        $content = ob_get_clean();

        require __DIR__ . '/../templates/base.php';
    }
}