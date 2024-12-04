<div class="container">
    <h1 class='text-center'>Créer une promotion</h1>
    <form action='/promo/create' method='post' style='max-width: 300px; margin-left: auto; margin-right: auto; margin-bottom: 100px'>
        <div style='margin-bottom: 15px;'>
            <label for='libelle' style='display: block;'>Libelle :</label>
            <input type='text'
                   name='libelle'
                   value="<?= (!empty($_SESSION["errorMessage"])) ? $_POST['libelle'] : ''  ?>"
                   style='width: 100%;'>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='anne' style='display: block;'>Anne :</label>
            <input type='date'
                   name='annee'
                   value="<?= (!empty($_SESSION["errorMessage"])) ? $_POST['anne'] : ''  ?>"
                   style='width: 100%;'>
        </div>
        <button type='submit' style='width: 100%;'>Créer son compte</button>
    </form>
</div>
