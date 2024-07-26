<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $arrival = htmlspecialchars($_POST['arrival']);
    $departure = htmlspecialchars($_POST['departure']);
    $guests = htmlspecialchars($_POST['guests']);
    $comments = htmlspecialchars($_POST['comments']);

    $to = "julien.castro@protonmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouvelle réservation de " . $name;
    $message = "
    Nom complet: $name\n
    Email: $email\n
    Téléphone: $phone\n
    Date d'arrivée: $arrival\n
    Date de départ: $departure\n
    Nombre de personnes: $guests\n
    Demandes spéciales ou commentaires: $comments
    ";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Votre réservation a été envoyée avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre réservation. Veuillez réessayer.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>