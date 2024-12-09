<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['genre'] = $_POST['genre'];
    $_SESSION['sujet'] = $_POST['sujet'];
    $_SESSION['message'] = $_POST['message'];

    // Rediriger vers la page principale pour afficher les informations
    header("Location: index.php");
    exit();
}
?>
