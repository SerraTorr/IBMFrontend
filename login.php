<?php 

function makeJsonString($data){
  $out = "";
  $out = $out.'username='.$data['username'].'&password='.$data['password'];
  return $out;
}
$uname = isset($_POST['uname'])?$_POST['uname']:'test1';
$password = isset($_POST['pass'])?$_POST['pass']:'password';

$data = ([
    'username' => $uname,
    'password' => $password
]);

$jsonstring = makeJsonString($data);

function login($arg){
    // $url = "https://cloudbackend.mybluemix.net/";
    $url = "http://localhost:5000/";
    
    // $data = array_push($data, $amount)
    $endpoint = $url.'login';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $arg);

    curl_setopt($curl, CURLOPT_URL, $endpoint);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);
    curl_close($curl);

    return $result;
}

if(login($jsonstring)) {session_start();}
$_SESSION['uname'] = $uname;
$_SESSION['passwd'] = $password;

header('location: ./a.php');

?>