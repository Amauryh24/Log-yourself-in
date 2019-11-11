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
    echo filter_var($email, FILTER_VALIDATE_EMAIL) ? "email valid." : $errors['email'] = "This address is invalid." ;
}

if ($username == "") {
    echo "please enter your username";
} elseif (!empty($username)) {
    $usernameLenght = strlen($username);
    echo ($usernameLenght >255) ? $errors['username'] = "your username exceed 255 letters"  : 'valide' ;
}

// execute

if (count($errors)> 0) {
    echo "There are mistakes!";
    print_r($errors);
    exit;
}



// check errors
// if (isset($_POST['inscription'])) {
//     if (!empty($username) && !empty($passwordOne) && !empty($passwordOne) && !empty($email)) {
//         $usernameLenght = strlen($username);
//         if ($usernameLenght <= 255) {
//             if ($passwordOne === $passwordTwo) {
//                 $insertmbr = $pdo->prepare("INSERT INTO student(username,email,password) VALUE(?.?.?)");
//                 $insertmbr->execute(array($username,$passwordOne,$email));
//                 echo "compte bien crée";
//             } else {
//                 echo "les mots de passe ne sont pas similaire";
//             }
//         } else {
//             $error = "votre pseudo ne doit pas dépasser 255 caractères ";
//         }
//     } else {
//         $error = "Certains champs doit être complété";
//     }
// }