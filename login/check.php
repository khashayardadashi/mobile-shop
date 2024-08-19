<?php session_start();?>
<?php
$cnn = new PDO("mysql:host=localhost;dbname=alireza_db", "root", "");
if(isset($_POST)){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $query="select * from users where username= '$username' and password='$password'";
    $r=$cnn->query($query);
    $result=$r->fetchAll(PDO::FETCH_ASSOC);
    if($result){
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION['logged_in'] = true;
        header('Location:http://localhost/alireza/panel');
    }
    else{
        header('Location:http://localhost/alireza/login');
    }
}
else{
    header('Location:http://localhost/alireza/login');
}
