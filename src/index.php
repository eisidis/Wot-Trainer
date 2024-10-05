<?php
require_once 'controllers/indexCtrl.php'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Docker/PHP</title>
</head>
<body>
    <h1>hello world</h1>
    <?php
    foreach ($response['data'] as $i) {
    if ($i['is_premium'] == false) {
        echo $i['short_name'] . "<br>";
        $img = $i['images']['big_icon'];
        ?> 
        <img src="<?= $img ?>" class="tankImage">
        <?php
        // var_dump($img);
    }
}
?>
    <script src="./assets/js/script.js"></script>
</body>
</html>