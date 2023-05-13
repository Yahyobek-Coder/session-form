<?php
session_start();
require_once "./header.php";

?>

<div class="login">
    <h1>Login</h1>
    <form method="post" action="check.php">
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />

        <?php

            if(isset($_SESSION['login']) && $_SESSION['login'] == 'error'){
                echo "<span style='color:red;'>login yoki parol xato</span>";
                $_SESSION['login'] == '';
            }
        
        ?>

        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>

<?php

require_once "./footer.php";

?>