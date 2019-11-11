<?php
include 'top.php';
?>
 

 <?php
echo 'login';
?>
<div class="login">
        <form action="account.php" method="POST">

            <div><input type="text" class="username" name="username" placeholder="username"
                    value="<?php if (isset($username) ? print_r($username) : ""); ?>"></div>
            <div><input type="text" class="passwordOne" name="passwordOne" placeholder="password"
                    value="<?php if (isset($passwordOne) ? print_r($passwordOne) : ""); ?>"></div>
      
           
            <button type="submit" value="login" name="login">login</button>
        </form>
</body>
</html>