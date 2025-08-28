<?php
// Démarre une session
session_start();

// Vérifie si l'utilisateur est déjà connecté
if (isset($_SESSION['user_type'])) {
    // L'utilisateur est déjà connecté, redirige-le vers sa page d'accueil
    switch ($_SESSION['user_type']) {
        case 'admin':
            header('Location:dashboard_admin.php');
            break;
        case 'employee':
            header('Location:dashboard_employee.php');
            break;
        case 'hr':
            header('Location: dashboard_hr.php');
            break;
        case 'directeur':
            header('Location: dashboard_directeur.php');
            break;
    }
    exit();
}

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupère les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifie si les identifiants sont valides pour l'admin
    if ($username === 'admin' && $password === 'admin123') {
        // Enregistre la session de l'administrateur
        $_SESSION['user_type'] = 'admin';

        // Redirige l'utilisateur vers le tableau de bord de l'administrateur
        header('Location: dashboard_admin.php');
        exit();
    }
    // Vérifie si les identifiants sont valides pour l'employé
    else if ($username === 'employee' && $password === 'employee123') {
        // Enregistre la session de l'employé
        $_SESSION['user_type'] = 'employee';

        // Redirige l'utilisateur vers le tableau de bord de l'employé
        header('Location: dashboard_employee.php');
        exit();
    }
    // Vérifie si les identifiants sont valides pour le responsable des ressources humaines
    else if ($username === 'hr' && $password === 'hr123') {
        // Enregistre la session du responsable des ressources humaines
        $_SESSION['user_type'] = 'hr';

        // Redirige l'utilisateur vers le tableau de bord du responsable des ressources humaines
        header('Location: dashboard_hr.php');
        exit();
    }
    // Vérifie si les identifiants sont valides pour le directeur
    else if ($username === 'directeur' && $password === 'directeur123') {
        // Enregistre la session du directeur
        $_SESSION['user_type'] = 'director';

        // Redirige l'utilisateur vers le tableau de bord du directeur
        header('Location: dashboard_directeur.php');
        exit();
    } else {
        // Les identifiants sont incorrects, affiche un message d'erreur
        $error = 'Identifiants incorrects';
    }
}
if (isset($erreur)) {
    echo $erreur;
}
?>

