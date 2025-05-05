<?php

namespace App\Controler;

class HomeControler extends AbstractControler
{
    public function index(): void
    {
        $this->render('/home/index');
    }
    public function mentionsLegale(): void
    {
        $this->render('/home/mentionsLegale');
    }
    public function login(): void
    {
        $this->render('login');
    }
    public function create(): void
    {
        $this->render('create');
    }

    public function disconnect(): void
    {
        $this->render('disconnect');
    }
}