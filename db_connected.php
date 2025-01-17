<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=crud", "root", "");
} catch (Exception $e) {
    echo $e->getMessage();
}

?>