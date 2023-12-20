<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des champs du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Adresse e-mail de réception
    $destinataire = "contact@lucasspitzer.fr";

    // Sujet de l'e-mail
    $sujet = "Nouveau message depuis le formulaire de contact";

    // Construction du corps du message
    $contenu = "Nom: $nom\n";
    $contenu .= "Email: $email\n\n";
    $contenu .= "Message:\n$message";

    // En-têtes de l'e-mail
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    // Envoi de l'e-mail
    if (mail($destinataire, $sujet, $contenu, $headers)) {
        echo "Votre message a été envoyé avec succès.";
        header('Location: /index.php');
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>