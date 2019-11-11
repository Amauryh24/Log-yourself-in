<?php
// connect
try {
    $pdo =  new PDO("mysql:host=database;dbname=becode", "root", "root");
} catch (PDOException $e) {
    print "navré, la base de données n'est pas disponible, veuillez réessayer plus tard";
    die();
}

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