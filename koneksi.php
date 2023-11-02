<?php

$host="localhost";
$user= "root";
$pass="";
$database="latihan";

$koneksi=mysqli_connect($host, $user, $pass);
if ($koneksi) {
    $buka=mysqli_select_db($koneksi, $database);
    echo "";
    if (!$buka) {
        echo "";
    }
}else{
    echo "";
}

?>