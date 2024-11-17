<?php

namespace App\Controler;
$entityManager = require_once __DIR__ . '/../../config/bootstrap.php';
use Doctrine\ORM\EntityManager;
abstract class AbstractControler
{
    private EntityManager $entityManager;
    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }
    abstract function render(string $template, array $data = []): void;
}