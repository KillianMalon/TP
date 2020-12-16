<?php

echo "<h1>DataBase</h1>";

?>
<?php

$dsn = 'mysql:host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "<li>Connexion ok</li>";
} catch (PDOException $e) {
    echo '<li>Connexion échouée</li> : ' . $e->getMessage();
}
if (isset($dbh)){
    $dbh->exec('DROP DATABASE IF EXISTS epsi;');
    echo '<li>Suppression de la base</li>';
}
if (isset($dbh)){
    $dbh->exec('CREATE DATABASE epsi;');
    echo '<li> Base de données crées</li>';
}
if (isset($dbh)) {
    $dbh->exec('CREATE TABLE `epsi`.`contact` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `firstname` VARCHAR(45) NOT NULL,
          `lastname` VARCHAR(45) NOT NULL,
          `email` VARCHAR(45) NOT NULL,
          `message` TEXT NOT NULL,
          `birthdate` DATE NOT NULL,
          `newsletter` TINYINT NULL,
          PRIMARY KEY (`id`));
        ');
    echo '<li>Table contact créée 🗃</li>';
}


?>
