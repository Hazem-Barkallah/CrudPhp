<?php
require_once "./db_connected.php";


//  $req=$pdo->query("select * from todos where id=1");
//  $res=$req->fetchAll();

$req = $pdo->prepare("select * from todos ");
$req->execute();
$res = $req->fetchAll();

// for ($i = 0; $i < count($res); $i++) {
//     foreach ($res[$i] as $key => $val) {
//         echo $key . "=>" . $val;
//     }
//     echo "<br>";
// }


?>