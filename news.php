<?php

session_start();

require_once "./header.php";

if(isset($_SESSION['login']) && $_SESSION['login'] == 'seccess'){
    
?>

<h2 style="text-align: center; color: #fff;">
    Xush kelibsiz
</h2>

<p style="text-align: center;">
    <a href="logout.php" style="color: red;">Chiqish</a>
</p>

<?php

}else{
    header('location: login.php');
}

require_once "./footer.php";

?>