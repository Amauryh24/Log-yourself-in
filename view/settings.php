<?php
include 'top.php';
?>

<div>
    <h1>update password</h1>
    <form action="account.php" method="POST">

        <div><input type="text" class="passwordOne" name="passwordOld" placeholder="old password"
                value="<?php if (isset($passwordOne) ? print_r($passwordOne) : ""); ?>"></div>
        <div><input type="text" class="passwordOne" name="passwordNew" placeholder=" new password"
                value="<?php if (isset($passwordOne) ? print_r($passwordOne) : ""); ?>"></div>
        <div><input type="text" class="passwordOne" name="passwordConfirm" placeholder="confirm password"
                value="<?php if (isset($passwordOne) ? print_r($passwordOne) : ""); ?>"></div>


        <button type="submit" value="newpassword" name="newpassword">update</button>
    </form>

</div>

<div>
    <h1>update my profile</h1>
    <form action="" method="POST">
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

        <button type="submit" value="updateprofile" name="updateprofile">update</button>
    </form>
</div>

<div>
    <h1>delete my account</h1>
    <button>delete</button>
</div>

</body>

</html>