<?php
 
function conectarDB():mysqli{
    $db = new mysqli('localhost', 'root', '02102910', 'bienes_raices');
    if (!$db) {
        echo "Error: No se pudo conectar a MySQL.";
        exit;
    }
    return $db;
   
}