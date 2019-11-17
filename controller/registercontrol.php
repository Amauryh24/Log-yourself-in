<?php

// connect
try {
    $bdd =  new PDO("mysql:host=37.59.55.185;dbname=YD6CQChWhy;charset=utf8;port=3306", "YD6CQChWhy", "lmbvbf43jB");
} catch (Exception $e) {
    echo $e->getMessage();
}


$errors = [];

// Sanitization
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$passwordOne = filter_var($_POST['passwordOne'], FILTER_SANITIZE_STRING);
$passwordTwo = filter_var($_POST['passwordTwo'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
$linkedin = filter_var($_POST['linkedin'], FILTER_SANITIZE_URL);
$github = filter_var($_POST['github'], FILTER_SANITIZE_URL);


// validate register
if ($email == "") {
    $errors['email'] = "please enter your email" ;
} else {
    filter_var($email, FILTER_VALIDATE_EMAIL) ? " email valid " : $errors['email'] = "This address is invalid." ;
}

if ($username == "") {
    $errors['username'] = "please enter your username";
} elseif (!empty($username)) {
    $usernameLenght = strlen($username);
    ($usernameLenght <=255) ? ' username valide ' : $errors['username'] = "your username exceed 255 letters" ;
}

if ($passwordOne == "" || $passwordTwo == "") {
    $errors['password'] = "please add or confirm your password";
} elseif (!empty($passwordOne) && !empty($passwordTwo)) {
    $password_crypted_One = sha1($passwordOne);
    $password_crypted_Two = sha1($passwordTwo);
    ($passwordOne === $passwordTwo) ? 'password valide' :  $errors['password'] = "your password are not similar"  ;
}

if (!empty($linkedin)) {
    filter_var($linkedin, FILTER_VALIDATE_URL) ? 'url valid' :  $errors['linkedin'] = "please, validate your Linkedin URL " ;
}

if (!empty($github)) {
    filter_var($github, FILTER_VALIDATE_URL) ? 'url valid' :  $errors['github'] = "please, validate your Github URL " ;
}


// requetes
$reqmail = $bdd->prepare("SELECT * FROM Student WHERE username= ?");
$reqmail->execute(array($username));
$usernameexist = $reqmail->rowCount();
($usernameexist == 0) ? 'valide' : $errors['usernameexist'] = "username déjà utilisé" ;

$reqmail = $bdd->prepare("SELECT * FROM Student WHERE email= ?");
$reqmail->execute(array($email));
$emailexist = $reqmail->rowCount();
($emailexist == 0) ? 'valide' : $errors['emailexist'] = "Email déjà utilisé" ;

// execute
if (isset($_POST['inscription'])) {
    if (count($errors)> 0) {
        echo "There are mistakes!";
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
    } else {
        $request = $bdd->prepare('INSERT INTO Student (username, email, `password`, firstname, lastname, linkedin, github) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $request->execute(array($username,$email, $password_crypted_One,$firstname,$lastname,$linkedin,$github));

        echo 'Votre compte à bien été crée';
    }
}