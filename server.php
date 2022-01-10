<?php 

//importo il database(l'array) 

require_once __DIR__ . '/db/database.php';


header('Content-type: application/json');

echo json_encode($albums);