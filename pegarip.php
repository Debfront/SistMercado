<?php
$ipaddress = $_SERVER["SERVER_ADDR"];

function infus($ip) {
    $json = file_get_contents('http://ipinfo.io/');
    $info = json_decode($json);
    return $info;
}

$details = infus($ipaddress);
//echo "Seu ip:   ".$details->ip."<br>"; 
//echo "Sua cidade: ".$details->city."<br>";
//echo "Sua região é: ".$details->region."<br>";
//atributos
$ip= $details->ip;
//echo $ip;

if($ip == "186.225.28.128"){
    echo" Redirecionando para o site";
    header('Location: index.php');
}
if($ip =="25.25.25"){
    echo" Redirecionando";
    header('Location: teste.php');
}
?>