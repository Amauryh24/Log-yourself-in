<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Register</a></li>
    <li><a href="settings.php">edit profile</a></li>
    <!--    si login a faire condition-->
    <!--    <li><a href="#news">Login</a></li>-->
    <!--    a faire une condition si logger-->
    <!--    <li><a href="#contact">Edit Profile</a></li>-->

</ul>

<div id="mybck"></div>
<div id="content" class="shadow">

    <form action="#" method="post">
        <p class="titre">Student registration</p>
        <div class="formfield">
            <input type="text" placeholder="Usernanme" name="username" required>
        </div>
        <div class="formfield">
            <input type="password" placeholder="Password" name="pwd" required>
        </div>
        <button id="btnlog" type="submit">Login</button>
    </form>
</div>
<script src="main.js"></script>
</body>
</html>