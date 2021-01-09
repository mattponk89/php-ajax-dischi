<?php
include __DIR__ . '/db/database.php';


if(isset($_GET["genre"])){
    $genreSelected = $_GET['genre'];

    $dbFiltered = array_filter($db["response"], function ($value) use ($genreSelected) {
        return ($value["genre"] == $genreSelected);
    });
    $db["response"] = [];
    foreach($dbFiltered as $item){
        $db["response"][] = $item;
    }
    
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    
    echo json_encode($db);
} else{
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    echo json_encode($db);
}



?>