<?php
 include 'includes/connect.php'; 
 session_start();
 if (isset($_GET['logout'])) {
    session_destroy();
    // L'utilisateur n'est pas connecté, redirige-le vers la page de connexion
    header('Location: connexion.php');
    exit();
}

?>