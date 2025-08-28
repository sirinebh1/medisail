<?php include 'includes/connect.php'; 
 
$user = $con->prepare('INSERT INTO `stagiaire`(`nom`, `prenom`,`email`,`ville`,`pays`,`code`) VALUES (:nom, :prenom, :email, :ville, :pays, :code) ');
$user->bindValue(':nom', $_POST['nom'], PDO::PARAM_INT);
$user->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_INT);
$user->bindValue(':email', $_POST['email'], PDO::PARAM_INT);
$user->bindValue(':ville', $_POST['ville'], PDO::PARAM_INT);
$user->bindValue(':pays', $_POST['pays'], PDO::PARAM_INT);
$user->bindValue(':code', $_POST['code'], PDO::PARAM_INT);
$user->execute();
header("location:gestion_staigaire.php");
?>