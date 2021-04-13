<?php

function makeJsonString($data){
  $out = "";
  $out = $out.'username='.$data['username'].'&password='.$data['password'].'&amount='.$data['amount'];
  return $out;
}

session_start();
$uname = $_SESSION['uname'];
$password = $_SESSION['passwd'];

$amt = $_POST['amount'];
// echo $amt;

$data = array("username" => $uname, "password" => $password, "amount" => $amt);
$jsonstring = makeJsonString($data);

function addFunds($arg)
{
    // $url = "https://cloudbackend.mybluemix.net/";
    // $url = "http://localhost:5000/";

    $url = "https://simple-toolchain-20210413170215384.mybluemix.net/";
    
    // $data = array_push($data, $amount)
    $endpoint = $url.'addFunds';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $arg);

    curl_setopt($curl, CURLOPT_URL, $endpoint);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);
    curl_close($curl);

    return $result;
}

$balance = addFunds($jsonstring);
$balance = json_decode($balance, true);

$_SESSION['balance'] = $balance['balance'];

header('location: ./landing.php');
?>