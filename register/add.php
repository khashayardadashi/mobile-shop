<?php
$cnn = new PDO("mysql:host=localhost;dbname=alireza_db", "root", "");
if(isset($_POST)){
    $query='insert into users (username,password) values (:username ,:password)';
    $r=$cnn->prepare($query);
    $r->execute([
        "username"=>$_POST['username'],
        "password"=>$_POST['password']
    ]);
    if($r->rowCount()){
        header('Location:http://localhost/alireza/login');
    }
    else{
        header('Location:http://localhost/alireza/register');
    }
}
else{
    header('Location:http://localhost/alireza/register');
}