<?php
require 'includes/connect.php';
$user = $con->prepare('DELETE FROM user WHERE id_user=:num limit 1');
$user->bindValue(':num',$_GET['id'],PDO::PARAM_INT);
$user ->execute();

header("location:tables_admin.php");
?>