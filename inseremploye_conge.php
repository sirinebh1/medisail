<?php include 'includes/connect.php'; 


 $user = $con->prepare('INSERT INTO `conge`(`nom`, `prenom`, `raison`, `id_role`) VALUES (:nom, :prenom, :raison, :role) ');
 $user->bindValue(':nom', $_POST['nom'], PDO::PARAM_INT);
 $user->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_INT);
 $user->bindValue(':raison', $_POST['raison'], PDO::PARAM_INT);
 $user->bindValue(':role', $_POST['role'], PDO::PARAM_INT);
 $user->execute();
 header("location:conge.php");
?>