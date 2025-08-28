<?php
require 'includes/connect.php';
$user = $con->prepare('UPDATE `user` SET nom=:nom , prenom=:prenom, email=:email, ville=:ville , etat=:etat, code=:code  WHERE id_user=:num limit 1');
$user->bindValue(':num',$_GET['id'],PDO::PARAM_INT);
$user->bindValue(':nom', $_GET['nom'], PDO::PARAM_INT);
$user->bindValue(':prenom', $_GET['prenom'], PDO::PARAM_INT);
$user->bindValue(':email', $_GET['email'], PDO::PARAM_INT);
$user->bindValue(':ville', $_GET['ville'], PDO::PARAM_INT);
$user->bindValue(':etat', $_GET['etat'], PDO::PARAM_INT);
$user->bindValue(':ville', $_GET['ville'], PDO::PARAM_INT);
$user->bindValue(':code', $_GET['code'], PDO::PARAM_INT);
$user->execute();
header("location:tables_admin.php");
?>
