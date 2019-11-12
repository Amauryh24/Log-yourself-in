<?php

// connect
try {
    $bdd =  new PDO("mysql:host=37.59.55.185;dbname=YD6CQChWhy;charset=utf8;port=3306", "YD6CQChWhy", "lmbvbf43jB");
} catch (Exception $e) {
    echo $e->getMessage();
}


$errors = [];

// Sanitization
$usernamelogin =  filter_var($_POST['usernamelogin'], FILTER_SANITIZE_STRING);
$passwordlogin = filter_var($_POST['passwordlogin'], FILTER_SANITIZE_STRING);

// validate login
if (!empty($passwordlogin) && !empty($usernamelogin)) {
} else {
    $errors['login'] = "please, all field must be complete " ;
}

// execute

if (isset($_POST['login'])) {
    if (count($errors)> 0) {
        echo "There are mistakes!";
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
    } else {
        echo 'Bienvenue sur votre comtpe';
    }
}