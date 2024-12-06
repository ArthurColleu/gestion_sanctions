<?php

namespace App\Controler;

class ErrorControler extends AbstractControler
{
    public function error404(): void
    {
        $this->renderError(404);
    }
    public function error500($message): void
    {
        $this->renderError(500, $message);
    }
}