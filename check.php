<?php 

session_start();


if(isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == 1111){
        $_SESSION['login'] = 'seccess';

        header('location: news.php');

    }else{

        $_SESSION['login'] = 'error';

        header('location: login.php');
    }
}
