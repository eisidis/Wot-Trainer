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
// var_dump($response['data']);
// echo $response['data']['14881']['short_name'];
// foreach ($response['data'] as $i) {
//     if ($i['is_premium'] == false) {
//         echo $i['short_name'] . "<br>";
//         $img = $i['images']['big_icon'];

//         var_dump($img);
//     }
// }

// echo 'Online: '. $response['data'];

// var_dump($response);
// var_dump($response);
// var_dump(gettype($curl));