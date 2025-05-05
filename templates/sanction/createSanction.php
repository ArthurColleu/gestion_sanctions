<?php
$entityManager = require __DIR__. '/../../config/bootstrap.php';

$eleves= new \App\Controler\EleveControler($entityManager);
$eleves = $eleves->afficherEleve();
//var_dump($promotions);
$sanctions = new \App\Controler\SanctionControler($entityManager);
$sanctions = $sanctions->afficherSanction();
?>


<div class="container">
    <h1 class='text-center'>Créer une Sanction</h1>
    <?php if (isset($_SESSION["errorMessage"])) {
        echo "<div class='fw-bold text-center text-danger'>" . $_SESSION['errorMessage'] . " </div>";
    } ?>
    <form action='/sanction/createSanction' method='post' style='max-width: 500px; margin: 0 auto; margin-bottom: 100px'>
        <div style='margin-bottom: 15px;'>
            <label for='eleve' style='display: block;'>Élève sanctionné :</label>
            <select name='eleve' required style='width: 100%;'>
                <option value='' disabled selected>Choisir un élève</option>
                <?php foreach ($eleves as $eleve) { ?>
                    <option value='<?= $eleve->getIdEleve() ?>' >
                        <?= $eleve->getNomEleve() ?> <?= $eleve->getPrenomEleve() ?> (<?= $eleve->getIdPromotion()->getLibelle() ?>)
                    </option>
                <?php } ?>
            </select>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='demandeur' style='display: block;'>Nom du demandeur :</label>
            <input type='text' name='demandeur' required style='width: 100%;'>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='motif' style='display: block;'>Motif :</label>
            <select name='motif' style='width: 100%;'>
                <option value='' disabled selected>Choisir un motif</option>
                <?php foreach ($sanctions as $sanction) { ?>
                    <option>
                        <?= $sanction->getMotif() ?>
                    </option>
                <?php } ?>
            </select>
            <textarea name='motif' placeholder='motif personnalisé' style='width: 100%; margin-top: 10px;'></textarea>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='description' style='display: block;'>Description :</label>
            <textarea name='description' required style='width: 100%;'></textarea>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='date_incident' style='display: block;'>Date de l'incident :</label>
            <input type='date' name='date_incident' required style='width: 100%;'>
        </div>
        <button type='submit' style='width: 100%;'>Créer la sanction</button>
    </form>
</div>
