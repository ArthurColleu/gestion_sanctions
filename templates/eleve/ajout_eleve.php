<div class="container">
    <h1 class='text-center'>Ajouter des élèves</h1>
    <?php if (isset($_SESSION["errorMessage"])){
        echo "<div class='fw-bold text-center text-danger'>". $_SESSION['errorMessage']." </div>";
    } ?>
    <form action='/eleve/create' method='post' style='max-width: 300px; margin-left: auto; margin-right: auto; margin-bottom: 100px'>
        <div style='margin-bottom: 15px;'>
            <label for='libelle' style='display: block;'>Promotion :</label>
            <input type='text'
                   name='libelle'
                   value="<?= (isset($_SESSION["errorMessage"])) ? $_POST['libelle'] : ''  ?>"
                   style='width: 100%;'>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='annee' style='display: block;'>Élève(s) :</label>
            <input type="file"
                   accept=".csv"
                   name='eleves'
                   value="<?= (isset($_SESSION["errorMessage"])) ? $_POST['annee'] : ''  ?>"
                   style='width: 100%;'>
        </div>
        <button type='submit' style='width: 100%;'>Ajouter des élève</button>
    </form>
</div>
