<?php

namespace App\Controler;

abstract class AbstractControler
{
    abstract function render(string $template, array $data = []): void;
}