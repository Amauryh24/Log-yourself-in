<?php
// connect
try {
    $pdo =  new PDO("mysql:host=database;dbname=becode", "root", "root");
} catch (PDOException $e) {
    print "navré, la base de données n'est pas disponible, veuillez réessayer plus tard";
    die();
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

// validate
if ($email == "") {
    echo "please enter your email";
} else {
    filter_var($email, FILTER_VALIDATE_EMAIL) ? " email valid " : $errors['email'] = "This address is invalid." ;
}

if ($username == "") {
    echo "please enter your username";
} elseif (!empty($username)) {
    $usernameLenght = strlen($username);
    ($usernameLenght <=255) ? ' username valide ' : $errors['username'] = "your username exceed 255 letters" ;
}

if ($passwordOne == "" || $passwordTwo == "") {
    echo "please add or confirm your password";
} elseif (!empty($passwordOne) && !empty($passwordTwo)) {
    $password_crypted_One = sha1($passwordOne);
    $password_crypted_Two = sha1($passwordTwo);
    ($passwordOne === $passwordTwo) ? 'password valide' :  $errors['password'] = "your password are not similar"  ;
}

// execute

if (count($errors)> 0) {
    echo "There are mistakes!";
    echo "<pre>";
    print_r($errors);
    echo "</pre>";
    exit;
}

// $insertmbr = $pdo->prepare("INSERT INTO student(username,email,password) VALUE(?.?.?)");
//                 $insertmbr->execute(array($username,$passwordOne,$email));
