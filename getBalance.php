<?php

function makeJsonString($data){
  $out = "";
  $out = $out.'username='.$data['username'].'&password='.$data['password'];
  return $out;
}

session_start();
$uname = $_SESSION['uname'];
$password = $_SESSION['passwd'];

$data = array("username" => $uname, "password" => $password);
$jsonstring = makeJsonString($data);

function getBalance($arg)
{
    // $url = "https://cloudbackend.mybluemix.net/";
    $url = "http://localhost:5000/";
    
    // $data = array_push($data, $amount)
    $endpoint = $url.'getBalance';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $arg);

    curl_setopt($curl, CURLOPT_URL, $endpoint);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);
    curl_close($curl);

    return $result;
}

$balance = getBalance($jsonstring);
$balance = json_decode($balance, true);

$_SESSION['balance'] = $balance['balance'];

header('location: ./landing.php');


?>