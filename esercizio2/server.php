<?php
include __DIR__ . '/db/database.php';

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


echo json_encode($db);
?>