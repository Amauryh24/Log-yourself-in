<?php
include 'includes/connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>

<body>
    <div class="login">
        <form action="" method="post">

            <div><input type="text" class="username" name="username" placeholder="username"
                    value="<?php if (isset($username) ? print_r($username) : ""); ?>"></div>
            <div><input type="text" class="passwordOne" name="passwordOne" placeholder="password"
                    value="<?php if (isset($passwordOne) ? print_r($passwordOne) : ""); ?>"></div>
            <div><input type="text" class="passwordTwo" name="passwordTwo" placeholder="confimartion password"
                    value="<?php if (isset($passwordTwo) ? print_r($passwordTwo) : ""); ?>"></div>
            <div><input type="text" class="email" name="email" placeholder="email"
                    value="<?php if (isset($email) ? print_r($email) : ""); ?>"></div>
            <div><input type="text" class="firstname" name="firstname" placeholder="firstname"
                    value="<?php if (isset($firstname) ? print_r($firstname) : ""); ?>"></div>
            <div><input type="text" class="lastname" name="lastname" placeholder="lastname"
                    value="<?php if (isset($lastname) ? print_r($lastname) : ""); ?>"></div>
            <div><input type="text" class="linkedin" name="linkedin" placeholder="linkedin"
                    value="<?php if (isset($linkedin) ? print_r($linkedin) : ""); ?>"></div>
            <div> <input type="text" class="github" name="github" placeholder="github"
                    value="<?php if (isset($github) ? print_r($github) : ""); ?>"></div>

            <button type="submit" value="inscription" name="inscription">inscription</button>
        </form>
    </div>
    <div class="bug">
        <?php

?>
    </div>

</body>

</html>