<?php
include 'top.php';
include '../controller/logincontrol.php';
?>


<?php
echo 'login';
?>
<div class="login">
    <form action="" method="POST">

        <div><input type="text" class="usernamelogin" name="usernamelogin" placeholder="username"
                value="<?php if (isset($username) ? print_r($username) : ""); ?>"></div>
        <div><input type="password" class="passwordlogin" name="passwordlogin" placeholder="password"
                value="<?php if (isset($passwordOne) ? print_r($passwordOne) : ""); ?>"></div>


        <button type="submit" value="login" name="login">login</button>
    </form>
    </body>

    </html>