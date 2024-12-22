<?php
use App\Entity\Promotion;

?>


<div class="container">
    <h1 class='text-center'>Ajouter des élèves</h1>
    <?php

    $entityManager = require_once __DIR__ . '/../../config/bootstrap.php';
    print_r($entityManager);
    $promotions= new \App\Controler\PromotionControler($entityManager);

    if (isset($_SESSION["errorMessage"])){
        echo "<div class='fw-bold text-center text-danger'>". $_SESSION['errorMessage']." </div>";
    } ?>
    <form action='/eleve/ajout_eleve' method='post' enctype="multipart/form-data" style='max-width: 300px; margin-left: auto; margin-right: auto; margin-bottom: 100px'>
        <div style='margin-bottom: 15px;'>
            <label for='promotion' style='display: block;'>Promotion :</label>
            <select class="form-select" id="promotion">
                <?php foreach ($promotions->afficherPromotion() as $promotion){ ?>
                    <option>
                        <?= $promotion->getLibelle().' - '.$promotion->getAnnee()  ?>
                    </option>
                <?php } ?>
            </select>
            <!--<input type='text'
                   name='promotion'
                   value="<?php //echo (isset($_SESSION["errorMessage"])) ? $_POST['promotion'] : '' ?>"
                   style='width: 100%;'> -->
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='ListeEleves' style='display: block;'>Élève(s) :</label>
            <input type="file"
                   accept=".csv"
                   name='ListeEleves'
                   value="<?= (isset($_SESSION["errorMessage"])) ? $_POST['eleves'] : ''  ?>"
                   style='width: 100%;'>
        </div>
        <button type='submit' style='width: 100%;'>Ajouter des élève</button>
    </form>
</div>
