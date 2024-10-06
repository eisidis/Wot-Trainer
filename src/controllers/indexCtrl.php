<?php

$curl = curl_init();

curl_setopt_array(
    $curl,
    array(
        // CURLOPT_URL => "https://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=77b55a76eb843a2b51927278550b8534&tank_id=14881",
        CURLOPT_URL => "https://api.worldoftanks.eu/wot/encyclopedia/vehicles/?application_id=77b55a76eb843a2b51927278550b8534&tier=10&nation=usa&type=heavyTank",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
        ),
    )
);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$response = json_decode($response, true);

$max = count($response['data']);
$min = 0;

$randomNumber = rand($min, $max - 1);
$randomTank = array_values($response['data'])[$randomNumber];
$tankHp = $randomTank['default_profile']['hp'];

if (!empty($_GET)) {
    for ($i = 0; $i <= $max - 1; $i++) {
    }
    if (!empty($_GET['userHp'])) {
        $userHp = $_GET['userHp'];
        if ($userHp == $tankHp) {
            var_dump('bien joué');
        } else {
            echo "raté c'était " . $tankHp;
        }
        // echo "bonjour " . $hp;
    }
}

var_dump($tankHp . ' ' . $randomTank['short_name']);

// echo $randomTank;




// var_dump($response['data']);
// echo $response['data']['14881']['short_name'];
// foreach ($response['data'] as $i) {
//     if ($i['is_premium'] == false) {
//         echo $i['short_name'] . "<br>";
//         $img = $i['images']['big_icon'];

//         var_dump($img);
//     }
// }
