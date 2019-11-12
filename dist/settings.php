<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit profile</title>
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
        <p class="titre">Modify Password</p>
        <div class="formfield">
            <input type="password" placeholder="OldPassword" name="OldPassword" required>
        </div>
        <div class="formfield">
            <input type="password" placeholder="Password" name="Password" required>
        </div>
        <div class="formfield">
            <input type="password" placeholder="Confim Password" name="pwdc" required>
        </div>
        <button id="btnchpwd" type="submit">Change password</button>
    </form>

    <form action="#" method="post">
        <p class="titre">Modify Profile</p>
        <div class="formfield">
            <input type="text" placeholder="Usernanme" required>
        </div>
        <div class="formfield">
            <input type="email"  placeholder="Email"  required>
        </div>
        <div class="formfield">
            <input type="text" placeholder="first name">
        </div>
        <div class="formfield">
            <input type="text" placeholder="last name">
        </div>
        <div class="formfield">
            <input type="url" placeholder="url">
        </div>
        <div class="formfield">
            <input type="url" placeholder="url">
        </div>
        <button id="btnedit" type="submit">Modify</button>
    </form>
    <form action="#" method="post">
        <p class="titre">Delete Your Account</p>
        <button id="btndel" type="submit">Delete account</button>
    </form>
</div>
</body>
</html>