
<?php

ini_set('display_errors', 'On');
try {
    $dbh = new PDO('mysql:host=database;dbname=mydb', "root", "root");
echo "ça fonctionne";
} catch (PDOException $e) {
    print "Error!: " . $e . "<br/>";
    die();
}
?>
