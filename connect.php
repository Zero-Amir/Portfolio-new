<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $telefoonnummer = $_POST["telefoonnummer"];
    $bedrijf = $_POST["bedrijf"];
    $bericht = $_POST["message"];

    $ontvanger_email = "hdamir2380@gmail.com"; // Vervang dit door je eigen e-mailadres

    $onderwerp = "Contactformulier van $naam";
    $bericht_inhoud = "Naam: $naam\n";
    $bericht_inhoud .= "E-mail: $email\n";
    $bericht_inhoud .= "Telefoonnummer: $telefoonnummer\n";
    $bericht_inhoud .= "Bedrijf: $bedrijf\n";
    $bericht_inhoud .= "Bericht:\n$bericht";

    // E-mailheaders
    $headers = "From: $email";

    // E-mail verzenden
    if (mail($ontvanger_email, $onderwerp, $bericht_inhoud, $headers)) {
        echo "Bedankt voor je bericht. We nemen zo snel mogelijk contact met je op.";
    } else {
        echo "Er is een probleem opgetreden bij het verzenden van het bericht. Probeer het later opnieuw.";
    }
}


?>
