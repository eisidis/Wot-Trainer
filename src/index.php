<?php
require_once 'controllers/indexCtrl.php'
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>WoT Trainer</title>
</head>

<body>
    <h1>WoT Trainer</h1>
    <?php
    if (!empty($_GET)) { ?>
        <div id="tankName">
            <p><?= $randomTank['short_name'] ?></p>
            <img src="<?= $randomTank['images']['big_icon'] ?>">
        </div>
        
        <label>Points de structure</label>
        <input type="text" id="userHp">
        <div id="resultHp"></div>

        <label>dégâts par tir</label>
        <input type="text" id="userDamge">
        <div id="result"></div>

        <button id="validate">Valider</button>

    <?php } else { ?>
        <form method="GET">
            <input type="submit" name="start" value="Start">
        </form>
    <?php
    }
    ?>








    <?php
    // foreach ($response['data'] as $i) {
    // if ($i['is_premium'] == false) {
    //     echo $i['short_name'] . "<br>";
    //     $img = $i['images']['big_icon'];
    ?>
    <!-- <img src="=// $img " class="tankImage"> -->
    <?php
    // var_dump($img);
    //     }
    // }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>