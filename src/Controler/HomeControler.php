<?php

namespace App\Controler;

class HomeControler extends AbstractControler
{
    public function index(): void
    {
        $this->render('home/index');
    }
    public function mentionsLegal(): void
    {
        $this->render('home/mentionsLegale');
    }
    public function login(): void
    {
        $this->render('home/login');
    }
    public function create(): void
    {
        $this->render('home/create');
    }
    public function disconnect(): void{
        $this->render('home/disconnect');
    }
}