<?php

function validateForm() {
    global $teilnahme, $essenspraferenz, $vorname, $name, $firma, $email, $mitteilung, $vorname2, $name2, $firma2, $email2, $essenspraferenz02;

    $errors = [];

    if (empty($_POST["teilnahme"])) {
        $errors["teilnahme"] = "Bitte wählen Sie mindestens eine Option aus";
    } else {
        $teilnahme = $_POST["teilnahme"];
    }

    if (isset($_POST["essenspraferenz"])) {
        $essenspraferenz = $_POST["essenspraferenz"];
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

    // Zusätzliche Person 
    $additionalPerson = isset($_POST["additionalPerson"]) && $_POST["additionalPerson"] == 'on';

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

        if (isset($_POST["essenspraferenz02"])) {
            $essenspraferenz02 = $_POST["essenspraferenz02"];
        }
    }

    return $errors;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = validateForm();
    if (empty($errors)) {

        $message_body = "";
        unset($_POST["submit"]);
        foreach($_POST as $key => $value){
            if (is_array($value)) {
                $value = implode(", ", $value);
            }
            $message_body = "Anmeldung zur Veranstaltung\n\n";
            $message_body .= "Teilnahme: " . ($teilnahme == "Ja, ich nehme gerne teil" ? "Ja" : "Nein") . "\n";
            if (isset($_POST['essenspraferenz'])) {
                $message_body .= "Essenspräferenz: " . ($essenspraferenz == "vegetarisch" ? "vegetarisch" : "Fleisch") . "\n";
            }
            $message_body .= "Vorname: " . $vorname . "\n";
            $message_body .= "Name: " . $name . "\n";
            $message_body .= "Firma: " . $firma . "\n";
            $message_body .= "Email: " . $email . "\n";
            $message_body .= "Mitteilung: " . $mitteilung . "\n";

            if (isset($_POST["additionalPerson"]) && $_POST["additionalPerson"] == 'on') {
                $message_body .= "\nWeitere Person:\n";
                if (isset($_POST['essenspraferenz02'])) {
                    $message_body .= "Essenspräferenz: " . ($essenspraferenz02 == "vegetarisch" ? "vegetarisch" : "Fleisch") . "\n";
                }
                $message_body .= "Vorname: " . $vorname2 . "\n";
                $message_body .= "Name: " . $name2 . "\n";
                $message_body .= "Firma: " . $firma2 . "\n";
                $message_body .= "Email: " . $email2 . "\n";
            }            
        }
         
        $headers = "From:anmeldung@funk-gruppe-event.ch";
        $to = "jonas.mueller@funk-gruppe.ch";
        $subject = "Anmeldung-Funk-Meet-Eat";
        if (mail($to, $subject, $message_body, $headers)){
            $success = "Ihre Anfrage wurde erfolgreich gesendet.";
            $teilnahme = $essenspraferenz = $vorname = $name = $firma = $email = $mitteilung = "";
        }
    } else {
        $teilnahme = isset($_POST["teilnahme"]) ? $_POST["teilnahme"] : "";
        $essenspraferenz = isset($_POST["essenspraferenz"]) ? $_POST["essenspraferenz"] : "";
        $vorname = $_POST["vorname"];
        $name = $_POST["name"];
        $firma = $_POST["firma"];
        $email = $_POST["email"];
        $mitteilung = $_POST["mitteilung"]; 
    }
}

?>
