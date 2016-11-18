<?php
    // If not in range default setting set.
    if($_POST["lat"] >= -90 && $_POST["lat"] <= 90 ){
       $lat = $_POST["lat"]; 
    }else{
        $lat = 35;
    }
    
    if($_POST["long"] >= -180 && $_POST["long"] <= 180 ){
       $long = $_POST["long"]; 
    }else{
        $long = 139;
    }
    
    $key = parse_ini_file($_SERVER['DOCUMENT_ROOT'].'/../api/weather.ini');
    $ch = curl_init('http://api.openweathermap.org/data/2.5/weather?lat='.$lat.'&lon='.$long.'&APPID='.$key['key'].'&units=imperial');
    $jsonString = curl_exec($ch);
    
    $response = json_decode($jsonString);
    echo $response->{'main'};
    
?>  