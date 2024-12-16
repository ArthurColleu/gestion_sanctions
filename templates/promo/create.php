<div class="container">
    <h1 class='text-center'>Créer une promotion</h1>
    <?php if (isset($_SESSION["errorMessage"])){
        echo "<div class='fw-bold text-center text-danger'>". $_SESSION['errorMessage']." </div>";
    } ?>
    <form action='/promo/create' method='post' style='max-width: 300px; margin-left: auto; margin-right: auto; margin-bottom: 100px'>
        <div style='margin-bottom: 15px;'>
            <label for='libelle' style='display: block;'>Libelle :</label>
            <input type='text'
                   name='libelle'
                   value="<?= (isset($_SESSION["errorMessage"])) ? $_POST['libelle'] : ''  ?>"
                   style='width: 100%;'>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='annee' style='display: block;'>Année :</label>
            <input type="number"
                   min="0"
                   minlength="4"
                   maxlength="4"
                   name='annee'
                   value="<?= (isset($_SESSION["errorMessage"])) ? $_POST['annee'] : ''  ?>"
                   style='width: 100%;'>
        </div>
        <button type='submit' style='width: 100%;'>Créer son compte </button>
    </form>
</div>
