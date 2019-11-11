<?php

// connect

// try {
//     // $bdd =  new PDO("mysql:host=database;dbname=becode", "root", "root");
//     $bdd =  new PDO("mysql:host=remotemysql.com;dbname=YD6CQChWhy", "YD6CQChWhy", "lmbvbf43jB");
// } catch (PDOException $e) {
//     print "navré, la base de données n'est pas disponible, veuillez réessayer plus tard";
//     die();
// }


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

if (!empty($linkedin)) {
    filter_var($linkedin, FILTER_VALIDATE_URL) ? 'url valid' :  $errors['linkedin'] = "please, validate your Linkedin URL " ;
}

if (!empty($github)) {
    filter_var($github, FILTER_VALIDATE_URL) ? 'url valid' :  $errors['github'] = "please, validate your Github URL " ;
}

// execute

if (count($errors)> 0) {
    echo "There are mistakes!";
    echo "<pre>";
    print_r($errors);
    echo "</pre>";
} else {
    var_dump($_POST);
   

    $bdd =  new PDO("mysql:host=remotemysql.com;dbname=YD6CQChWhy", "YD6CQChWhy", "lmbvbf43jB");

    $request = $bdd->prepare('INSERT INTO student(username, email, pwd) VALUES(?, ?, ?)');
    $request->execute(array($username,$email,$passwordOne));
    echo($request);
    var_dump($bdd);
    // $insertmbr = $bdd->prepare("INSERT INTO student(username,email,pwd) VALUE(?, ?, ?)");
    // $insertmbr->execute([$username,$email,$passwordOne]);
    echo 'validez';
    
    // $insertmbr = $bdd->prepare("INSERT INTO student (`username`,`email`,`motdepasse`,`first_name`,`last_name`,`linkedin`) VALUE(?.?.?.?.?.?) ");
    // $insertmbr -> execute([$username,$email,$passwordOne,$firstname,$lastname,$linkedin]);
}