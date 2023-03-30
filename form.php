<?php

$checkbox_error = $checkboxfood_error = $vorname_error = $name_error = $firma = $email_error = $mitteilung_error = "";
$checkbox = $checkboxfood = $vorname = $name = $firma_error = $email = $mitteilung = $success = "";

function validateForm() {
    $errors = [];

    if (empty($_POST["checkbox"])) {
        $errors["checkbox"] = "Bitte wählen Sie mindestens eine Option aus";
    } else {
        $checkbox = $_POST["checkbox"];
    }

    if (empty($_POST["checkboxfood"])) {
        $errors["checkboxfood"] = "Bitte wählen Sie mindestens eine Option aus";
    } else {
        $checkboxfood = $_POST["checkboxfood"];
    }

    if (empty($_POST["vorname"])) {
        $errors["vorname"] = "Vorname ist erforderlich";
    } else {
        $vorname = filter_var($_POST["vorname"], FILTER_SANITIZE_STRING);
        if (empty($vorname)) {
            $errors["vorname"] = "Es sind nur Buchstaben erlaubt";
        }
    }

    if (empty($_POST["name"])) {
        $errors["name"] = "Name ist erforderlich";
    } else {
        $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        if (empty($name)) {
            $errors["name"] = "Es sind nur Buchstaben erlaubt";
        }
    }

    if (empty($_POST["firma"])) {
        $errors["firma"] = "Firma ist erforderlich";
    } else {
        $firma = filter_var($_POST["firma"], FILTER_SANITIZE_STRING);
        if (empty($firma)) {
            $errors["firma"] = "Es sind nur Buchstaben erlaubt";
        }
    }

    if (empty($_POST["email"])) {
        $errors["email"] = "Email ist erforderlich";
    } else {
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        if (!$email) {
            $errors["email"] = "Diese Email Adresse ist nicht korrekt";
        }
    }

    if (!empty($_POST["mitteilung"])) {
        $mitteilung = filter_var($_POST["mitteilung"], FILTER_SANITIZE_STRING);
    }

    return $errors;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = validateForm();
    if (empty($errors)) {
        // Speichern der Daten in der Datenbank
        $message_body = "";
        unset($_POST["submit"]);
        foreach($_POST as $key => $value){
            if (is_array($value)) {
                $value = implode(", ", $value); // konvertieren des Array-Werts in einen String
            }
            $message_body .= "$key: $value\n";
        }
        $headers = "From:anmeldung@funk-gruppe-event.ch";
        $to = "ivoschwizer@gmail.com";
        $subject = "Anmeldung-Funk-Meet-Eat";
        if (mail($to, $subject, $message_body, $headers)){
            $success = "Ihre Anfrage wurde erfolgreich gesendet.";
            $checkbox = $checkboxfood = $vorname = $name = $firma = $email = $mitteilung = "";
        }
    } else {
        // Bei Fehlern die bereits eingegebenen Daten beibehalten
        $checkbox = isset($_POST["checkbox"]) ? $_POST["checkbox"] : "";
        $checkboxfood = isset($_POST["checkboxfood"]) ? $_POST["checkboxfood"] : "";
        $vorname = $_POST["vorname"];
        $name = $_POST["name"];
        $firma = $_POST["firma"];
        $email = $_POST["email"];
        $mitteilung = $_POST["mitteilung"];
        
    }
}

?>
