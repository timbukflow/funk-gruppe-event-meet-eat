<?php

$checkbox_error = $checkboxfood_error = $vorname_error = $name_error = $firma_error = $email_error = $mitteilung_error = "";
$checkbox = $checkboxfood = $vorname = $name = $firma = $email = $mitteilung = $success = "";
$vorname2 = $name2 = $firma2 = $email2 = "";

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

    // zusätzliche Person 
    // Prüfen, ob die Checkbox für die zusätzliche Person aktiviert ist
    $additionalPerson = isset($_POST["additionalPerson"]) && $_POST["additionalPerson"] == 'on';

    // Validieren der zusätzlichen Felder, wenn die Checkbox aktiviert ist
    $checkboxfood2 = "";
    if ($additionalPerson) {

        if (empty($_POST["vorname2"])) {
            $errors["vorname2"] = "Vorname ist erforderlich";
        } else {
            $vorname2 = filter_var($_POST["vorname2"], FILTER_SANITIZE_STRING);
            if (empty($vorname2)) {
                $errors["vorname2"] = "Es sind nur Buchstaben erlaubt";
            }
        }

        if (empty($_POST["name2"])) {
            $errors["name2"] = "Name ist erforderlich";
        } else {
            $name2 = filter_var($_POST["name2"], FILTER_SANITIZE_STRING);
            if (empty($name2)) {
                $errors["name2"] = "Es sind nur Buchstaben erlaubt";
            }
        }

        if (empty($_POST["firma2"])) {
            $errors["firma2"] = "Firma ist erforderlich";
        } else {
            $firma2 = filter_var($_POST["firma2"], FILTER_SANITIZE_STRING);
            if (empty($firma2)) {
                $errors["firma2"] = "Es sind nur Buchstaben erlaubt";
            }
        }

        if (empty($_POST["email2"])) {
            $errors["email2"] = "Email ist erforderlich";
        } else {
            $email2 = filter_var($_POST["email2"], FILTER_VALIDATE_EMAIL);
            if (!$email2) {
                $errors["email2"] = "Diese Email Adresse ist nicht korrekt";
            }
        }

        if (empty($_POST["checkboxfood2"])) {
            $errors["checkboxfood2"] = "Bitte wählen Sie mindestens eine Option aus";
        } else {
            $checkboxfood2 = $_POST["checkboxfood2"];
        }
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

        // Hinzufügen der Daten der zusätzlichen Person, wenn die Checkbox aktiviert ist
        if (isset($_POST["additionalPerson"]) && $_POST["additionalPerson"] == 'on') {
            $message_body .= "Weitere Person:\n";
            $message_body .= "Essenspräferenz: " . $_POST["checkboxfood2"] . "\n";
            $message_body .= "Vorname: " . $_POST["vorname2"] . "\n";
            $message_body .= "Name: " . $_POST["name2"] . "\n";
            $message_body .= "Firma: " . $_POST["firma2"] . "\n";
            $message_body .= "Email: " . $_POST["email2"] . "\n";
        } else {
            // Entfernen der Informationen zur zusätzlichen Person, wenn die Option nicht ausgewählt ist
            $vorname2 = $name2 = $firma2 = $email2 = "";
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
