<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />

    <?php require_once 'head.php'; ?>
    <meta name="description" content="Funk-Grill-Plausch Versichereranlass mit Fussball-Special">
    <title>Funk Gruppe Event Meet &#38; Eat</title>
</head>

<body>
    <header>
        <div class="asheader"><h3>Anmeldeschluss ist der 12. April 2023.</h3> </div>
        <div class="event-title"><img src="./img/funk-meet-eat.svg" alt="funk-logo"></div>
        <button class="homebutton"> <a class="goto" href="#anmeldung">zur Anmeldung</a> </button>
    </header>
    <section>
      <article class="intro">
        <h1>Liebe Geschäfts- und Netzwerkpartner</h1>
        <p>
          <span>
            Im Namen der Niederlassung Bern, laden wir Sie herzlich zum <strong>Funk meet &#38; eat 2023</strong>  ein. Wir freuen uns, zusammen mit Ihnen einen stimmungsvollen Abend im schönen Ambiente des neu umgebauten Berner-Kursaals zu verbringen.
          </span>
          <span>
            Lassen Sie sich durch die beiden Kurzreferate zu den Themen "Leadership" und "Change" inspirieren. Wie begegnen wir als Unternehmen diesen Themen und wie schaffen wir es, zusammen mit motivierten Mitarbeitenden und begeisterten Führungskräften eine gemeinsame Vision zu verfolgen.
          </span>
          <span>
            Die beiden Referenten werden ihre Erfahrungen dazu aus verschiedenen Blickwinkeln erläutern. Vision, Motivation, Leadership und Organisationsformen wie Holokratie und Ambidextrie sind sowohl in zeitgemässen Unternehmensführungen wie auch im top modernen Leadership Campus der Schweizer Armee entscheidende Themen.
          </span>
          <span>
            Im Zentrum des Abends stehen der persönliche Austausch und das gesellige Beisammensein, begleitet von kulinarischen Leckerbissen. <strong>Wir freuen uns auf den gemeinsamen Abend mit Ihnen.</strong> 
          </span>
        </p>
      </article>

      <article>
      <div class="acctitle">
          <h2>Zu den Referenten</h2>
          <div class="pmcontainer">
            <div class="plus"></div>
            <div class="minus"></div>
          </div>
          <div class="acclist">
            <div class="grid02 center">
              <img src="./img/hans-peter.jpg" alt="funk-hans-peter">
              <p>
                <strong>KKdt Hans-Peter Walser</strong> <br> führt als Korpskommandant das Kommando Ausbildung. Er ist verantwortlich für die Grundbereitschaft und die Ausbildung der Armee. Zudem ist er der stellvertretende Chef der Armee. Zum Kommando Ausbildung gehören unter anderem das Ausbildungszentrum der Armee, die Lehrverbände, die höhere Kaderausbildung der Armee sowie das Personelle der Armee.
              </p>
              <img src="./img/marc-rothenbuehler.jpg" alt="funk-hans-peter">
              <p class="noline">
                <strong>Marc Rothenbühler</strong> <br> ist als Geschäftsleitungsmitglied der Funk Gruppe für die Schweizer Niederlassungen verantwortlich. Vor dem Wechsel zur Funk Gruppe im 2013, führte er als Mitglied der erweiterten Geschäftsleitung die Deutschschweizer Organisation eines renommierten Privatversicherers. Als gelernter Betriebswirtschafter bildet er sich in den Themen Change- & Performance-Management laufend weiter. 
              </p>
            </div>
          </div>
        </div>
        <div class="acctitle">
          <h2>Programm</h2>
          <div class="pmcontainer">
            <div class="plus"></div>
            <div class="minus"></div>
          </div>
          <div class="acclist">
            <div class="grid02">
              <p><strong>Datum</strong> </p>
              <p><strong>Dienstag, 9. Mai 2023</strong></p>
              <p>18:00 Uhr</p>
              <p>Eintreffen der Gäste / Apéro</p>
              <p>18:30 Uhr</p>
              <p>Begrüssung durch Jonas Müller</p>
              <p>18:40 Uhr</p>
              <p>Kurzreferat Marc Rothenbühler</p>
              <p>19:10 Uhr</p>
              <p>Kurzreferat KKdt Hans-Peter Walser</p>
              <p class="noline">19:30 Uhr</p>
              <p class="noline">Essen, persönlicher Austausch</p>
            </div>
          </div>
        </div>
        <div class="acctitle">
          <h2>Anreise</h2>
          <div class="pmcontainer">
            <div class="plus"></div>
            <div class="minus"></div>
          </div>
          <div class="acclist">
            <div class="grid01">
              <p>
                Mit dem <strong>öffentlichen Verkehr</strong> können Sie die Tramlinie 9 nehmen: Sie fährt vom Bahnhof Bern (Kante B) bis zur "Kursaal" Tramhaltestelle (Nähe Viktoriaplatz).
              </p>
              <p class="noline">
                <strong>Per Auto</strong> ist der Kursaal über alle gängigen Wege erreichbar. Sie können der, vom Navigationssystem / Google Maps vorgegebenen Route folgen. Wählen Sie dazu "Kursaal Parking" als Ziel. In der Hauseigenen Tiefgarage stehen 240 gebührenpflichtige Parkplätze zur Verfügung. Bitte beachten Sie die beschränkte Anzahl Parkplätze im Quartier.</p>
            </div>
          </div>
        </div>
      </article>
      <div id="anmeldung" class="containerform">
            <h2>Anmeldung</h2>
            <p>Anmeldeschluss ist der 12. April 2023. <br> Die Teilnehmerzahl ist beschränkt. Die Anmeldungen werden nach Eingang berücksichtigt.</p>
            <?php include('form.php'); ?>

            <form id="contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
              <fieldset class="checkbox">
                <div>
                    <input class="radio" type="radio" id="checkbox1" name="checkbox[]" value="Ja, ich nehme gerne teil" tabindex="1" <?= (is_array($checkbox) && in_array("Ja, ich nehme gerne teil", $checkbox)) ? "checked" : "" ?>>
                    <label for="checkbox1">Ja, ich nehme gerne teil</label>
                </div>
                <div>
                  <input class="radio" type="radio" id="checkbox2" name="checkbox[]" value="Leider bin ich verhindert" tabindex="2"<?= (is_array($checkbox) && in_array("Leider bin ich verhindert", $checkbox)) ? "checked" : "" ?>>
                  <label for="checkbox2">Leider bin ich verhindert</label>
                </div>
                <span class="error"><?= isset($errors["checkbox"]) ? $errors["checkbox"] : $checkbox_error ?></span>
              </fieldset>

              <fieldset class="checkbox">
                <div>
                    <input class="radio" type="radio" id="checkboxvegi" name="checkboxfood[]" value="Ich bin Vegi" tabindex="3" 
                      <?= (is_array($checkboxfood) && in_array("Ich bin Vegi", $checkboxfood)) ? "checked" : "" ?>>
                    <label for="checkboxvegi">Ich bin Vegi</label>
                </div>
                <div>
                  <input class="radio" type="radio" id="checkboxfleisch" name="checkboxfood[]" value="Ich esse Fleisch" tabindex="4"
                    <?= (is_array($checkboxfood) && in_array("Ich esse Fleisch", $checkboxfood)) ? "checked" : "" ?>>
                  <label for="checkboxfleisch">Ich esse Fleisch</label>
                </div>
                <span class="error"><?= isset($errors["checkboxfood"]) ? $errors["checkboxfood"] : $checkboxfood_error ?></span>
              </fieldset>

              <fieldset>
                <input placeholder="Vorname&#42;" type="text" name="vorname" value="<?= htmlspecialchars($vorname) ?>" tabindex="5" autofocus>
                <span class="error"><?= isset($errors["vorname"]) ? htmlspecialchars($errors["vorname"]) : htmlspecialchars($vorname_error) ?></span>
              </fieldset>

              <fieldset>
                <input placeholder="Name&#42;" type="text" name="name" value="<?= htmlspecialchars($name) ?>" tabindex="6">
                <span class="error"><?= isset($errors["name"]) ? htmlspecialchars($errors["name"]) : htmlspecialchars($name_error) ?></span>
              </fieldset>

              <fieldset>
                <input placeholder="Firma&#42;" type="text" name="firma" value="<?= htmlspecialchars($firma) ?>" tabindex="7">
                <span class="error"><?= isset($errors["firma"]) ? htmlspecialchars($errors["firma"]) : htmlspecialchars($firma_error) ?></span>
              </fieldset>

              <fieldset>
                <input placeholder="Email&#42;" type="text" name="email" value="<?= htmlspecialchars($email) ?>" tabindex="8">
                <span class="error"><?= isset($errors["email"]) ? htmlspecialchars($errors["email"]) : htmlspecialchars($email_error) ?></span>
              </fieldset>

              <fieldset>
                <textarea placeholder="Mitteilung" name="mitteilung" tabindex="9" rows="5"><?= htmlspecialchars($mitteilung) ?></textarea>
                <span class="error"><?= isset($errors["mitteilung"]) ? htmlspecialchars($errors["mitteilung"]) : htmlspecialchars($mitteilung_error) ?></span>
              </fieldset>

              <!-- Weitere Personen anmelden -->

              <fieldset class="checkbox">
                  <div>
                      <input class="radio" type="checkbox" id="additionalPerson" name="additionalPerson" tabindex="10">
                      <label for="additionalPerson">Weitere Person anmelden</label>
                  </div>
              </fieldset>

              <!-- Zusätzliche Felder für die weitere Person (standardmäßig ausgeblendet) -->
              <fieldset id="additionalPersonFields" style="display:none;">
                  <!-- Fleisch oder Vegi für die zusätzliche Person -->
                  <fieldset class="checkbox">
                      <div>
                          <input class="radio" type="radio" id="checkboxvegi2" name="checkboxfood2[]" value="Ich bin Vegi" tabindex="11" <?= (is_array($checkboxfood2) && in_array("Ich bin Vegi", $checkboxfood2)) ? "checked" : "" ?>>
                          <label for="checkboxvegi2">Ich bin Vegi</label>
                      </div>
                      <div>
                          <input class="radio" type="radio" id="checkboxfleisch2" name="checkboxfood2[]" value="Ich esse Fleisch" tabindex="12" <?= (is_array($checkboxfood2) && in_array("Ich esse Fleisch", $checkboxfood2)) ? "checked" : "" ?>>
                          <label for="checkboxfleisch2">Ich esse Fleisch</label>
                      </div>
                  </fieldset>
                  <span class="error"><?= isset($errors["checkboxfood2"]) ? htmlspecialchars($errors["checkboxfood2"]) : "" ?></span>

                  <fieldset>
                      <input placeholder="Vorname2&#42;" type="text" name="vorname2" value="<?= htmlspecialchars($vorname2) ?>" tabindex="13">
                      <span class="error"><?= isset($errors["vorname2"]) ? htmlspecialchars($errors["vorname2"]) : "" ?></span>
                  </fieldset>

                  <fieldset>
                      <input placeholder="Name2&#42;" type="text" name="name2" value="<?= htmlspecialchars($name2) ?>" tabindex="14">
                      <span class="error"><?= isset($errors["name2"]) ? htmlspecialchars($errors["name2"]) : "" ?></span>
                  </fieldset>

                  <fieldset>
                      <input placeholder="Firma2&#42;" type="text" name="firma2" value="<?= htmlspecialchars($firma2) ?>" tabindex="15">
                      <span class="error"><?= isset($errors["firma2"]) ? htmlspecialchars($errors["firma2"]) : "" ?></span>
                  </fieldset>

                  <fieldset>
                      <input placeholder="Email2&#42;" type="text" name="email2" value="<?= htmlspecialchars($email2) ?>" tabindex="16">
                      <span class="error"><?= isset($errors["email2"]) ? htmlspecialchars($errors["email2"]) : "" ?></span>
                  </fieldset>
              </fieldset>

              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Anfrage senden</button>
              </fieldset>
              <div class="success"><?= htmlspecialchars($success); ?></div>
            </form>
      </div> 
    </section>

    <?php require_once 'footer.php'; ?>
    <?php require_once 'script.php'; ?>
</body>
</html>