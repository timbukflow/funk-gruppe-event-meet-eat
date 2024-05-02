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
        <!-- <div class="asheader"><h3>Anmeldeschluss ist der 12. April 2023.</h3> </div> -->
        <div class="event-title"><img src="./img/funk-meet-eat.svg" alt="funk-logo"></div>
        <button class="homebutton"> <a class="goto" href="#anmeldung">zur Anmeldung</a> </button>
    </header>
    <section>
      <article class="intro">
        <h1>Herzliche Einladung</h1>
        <p>
          <span>
            Liebe Geschäfts- und Netzwerkpartner
          </span>
          <span>
            Im Namen der Niederlassung Bern, lade ich Sie herzlich zum Funk meet&#38;eat vom Donnerstag, <strong>17. Oktober 2024 ab 17:00 Uhr im Berner Kursaal ein.</strong>
          </span>
        </p>
        <p class="quot">
          <span class="title">
            Mit Keynote von Bernhard Heusler.
          </span>
            Bekannt als ehemaliger Präsident des FC Basel, Leadership-Referent und Buchautor. Ungeachtet ob in Verwaltungsräten, Spitzensport-, Verkaufs- oder Produktions-Teams, sind es schlussendlich immer die Menschen bzw. ihre Aufgaben, Rollen und ihr Zusammenspiel, welches für das Erreichen der gemeinsamen Ziele entscheidend ist. Teamwork und Führung sind also zentrale Erfolgsfaktoren jeder Unternehmung. Unter dem Titel "EIN TEAM GEWINNT IMMER", ist das neue Buch von Bernhard Heusler im Oktober 2023 erschienen. Der Autor persönlich, wird uns sein Leadership-ABC aus erster Hand und auf humorvolle Art und Weise näherbringen. 
          </span>
        </p>
        <p>
          Lassen Sie sich inspirieren und geniessen Sie mit uns zusammen einen spannenden Abend mit persönlichen Gesprächen, Networking und kulinarischen Leckerbissen.<br><br>
          Herzliche Grüsse <br>
          <strong>Jonas Müller</strong> <br>
          Leiter Niederlassung Bern
        </p>
      </article>

      <article>
      <div class="acctitle">
          <h2>Referent</h2>
          <div class="pmcontainer">
            <div class="plus"></div>
            <div class="minus"></div>
          </div>
          <div class="acclist">
            <div class="grid02 center">
              <img src="./img/bernhard-heusler.png" alt="funk-bernhard-heusler">
              <p class="noline">
                <strong>Bernhard Heusler,</strong> <br> geboren 1963, ehemaliger Präsident des FC Basel, Co-Präsident der Schweizer Sporthilfe sowie Leadership-Referent und Buchautor. Seine Erlebnisse in Exekutiv- und Entscheidungsgremien sowie die Erkenntnisse, die er aus seinen Erfahrungen als Führungsperson und Berater gewonnen hat, gibt er an Vorträgen für Interessierte und an Seminaren für Führungskräfte weiter.
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
              <p><strong>Donnerstag, 17. Oktober 2024</strong></p>
              <p>17:00 Uhr</p>
              <p>Eintreffen der Gäste</p>
              <p>17:45 Uhr</p>
              <p>Begrüssung (Jonas Müller)</p>
              <p>18:00 Uhr</p>
              <p>Keynote "Teamwork/Leadership" (Bernhard Heusler)</p>
              <p class="noline">19:00 Uhr</p>
              <p class="noline">Fragerunde, Apéro Riche und Networking</p>
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
                <strong>Kursaal Bern AG (Raum Aare)</strong> <br>
                Kornhausstrasse 3, Bern 22
              </p>
              <p>
                <strong>Anreise mit dem ÖV:</strong> <br>
                Tramlinie Nr. 9 bringt Sie vom Bahnhof Bern (Kante B) direkt zur Tramhaltestelle "Kursaal" (Nähe Viktoriaplatz).
              </p>
              <p class="noline">
                <strong>Anreise mit dem PW:</strong> <br> 
                Navigationssystem / Google Maps mit Ziel "Kursaal Parking" eingeben. Von der hauseigenen Tiefgarage mit 240 Parkplätzen führt Sie der Lift direkt in den Kursaal Bern und ins Swissôtel Kursaal Bern.</p>
            </div>
          </div>
        </div>
      </article>
      <div id="anmeldung" class="containerform">
            <h2>Anmeldung</h2>
            <p>Die Teilnehmerzahl ist beschränkt. Die Anmeldungen werden nach Eingang berücksichtigt. <strong>Anmeldeschluss ist der 20. September 2024.</strong></p>
            <?php include('form.php'); ?>

            <form id="contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
              
              <fieldset class="checkbox">
                <div>
                  <input class="radio" type="radio" id="checkbox1" name="teilnahme" value="Ja, ich nehme gerne teil" tabindex="1" 
                  <?= (isset($teilnahme) && $teilnahme == "Ja, ich nehme gerne teil") ? "checked" : "" ?>>
                  <label for="checkbox1">Ja, ich nehme gerne teil</label>
                </div>
                <div>
                  <input class="radio" type="radio" id="checkbox2" name="teilnahme" value="Leider bin ich verhindert" tabindex="2"
                  <?= (isset($teilnahme) && $teilnahme == "Leider bin ich verhindert") ? "checked" : "" ?>>
                  <label for="checkbox2">Leider bin ich verhindert</label>
                </div>
                <span class="error"><?= isset($errors["teilnahme"]) ? $errors["teilnahme"] : $teilnahme_error ?></span>
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

              <!-- Zusätzliche Felder für die weitere Person -->
              <fieldset id="additionalPersonFields" style="display:none;">                  
                  <fieldset>
                      <input placeholder="Vorname&#42;" type="text" name="vorname2" value="<?= htmlspecialchars($vorname2) ?>" tabindex="13">
                      <span class="error"><?= isset($errors["vorname2"]) ? htmlspecialchars($errors["vorname2"]) : "" ?></span>
                  </fieldset>

                  <fieldset>
                      <input placeholder="Name&#42;" type="text" name="name2" value="<?= htmlspecialchars($name2) ?>" tabindex="14">
                      <span class="error"><?= isset($errors["name2"]) ? htmlspecialchars($errors["name2"]) : "" ?></span>
                  </fieldset>

                  <fieldset>
                      <input placeholder="Firma&#42;" type="text" name="firma2" value="<?= htmlspecialchars($firma2) ?>" tabindex="15">
                      <span class="error"><?= isset($errors["firma2"]) ? htmlspecialchars($errors["firma2"]) : "" ?></span>
                  </fieldset>

                  <fieldset>
                      <input placeholder="Email&#42;" type="text" name="email2" value="<?= htmlspecialchars($email2) ?>" tabindex="16">
                      <span class="error"><?= isset($errors["email2"]) ? htmlspecialchars($errors["email2"]) : "" ?></span>
                  </fieldset>
              </fieldset>

              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Anfrage senden</button>
              </fieldset>
              <div class="success"><?= htmlspecialchars($success); ?></div>
            </form>

            <div id="popup" class="popup">
              <h1>Vielen Dank für Ihr Interesse!</h1> 
              <p>Ihre An- oder Abmeldung haben wir erhalten. Gerne werden wir Ihnen kurz vor dem Anlass nochmals die wichtigsten Infos per Mail zustellen.<br><br>
              Herzliche Grüsse <br> 
              Jonas Müller <br>
              Leiter Niederlassung Bern</p>
              <button id="closePopup">Alles klar!</button>
            </div>
      </div> 
    </section>

    <script>
      function showPopup() {
          document.getElementById('popup').style.display = 'block';
      }
      document.getElementById('closePopup').addEventListener('click', function() {
          document.getElementById('popup').style.display = 'none';
      });

      <?php if (isset($success)) { ?>
          showPopup();
      <?php } ?>
    </script>

    <?php require_once 'footer.php'; ?>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.6.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>