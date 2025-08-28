<?php
include 'includes/connect.php';

 $user = $con->prepare('INSERT INTO `formation`(`nom`, `prenom`) VALUES (:nom, :prenom) ');
 $user->bindValue(':nom', $_POST['nom'], PDO::PARAM_INT);
 $user->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_INT);


 $user->execute();
 header("location:formation.php");
?>