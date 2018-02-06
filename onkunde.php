
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="mad">
      <h1> Mad Libs</h1>
    </div>

        <header>
            <p>Er heerst paniek...<a href="onkunde.html"> Onkunde</a> </p>
            </header>
              <main>
                    <text>
                        <h1> Er heerst paniek...</h1>
                        Er heerst paniek in het koninkrijk  <?php echo $_POST['land']; ?>. Koning <?php echo $_POST['docent']; ?> is ten einde raad en als koning
                        <?php echo $_POST['docent']; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer  <?php echo $_POST['persoon']; ?>.
                        <br></br>
                        "<?php echo $_POST['persoon']; ?>! Het is een ramp! Het is een schande!"
                        <br></br>
                        "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand? "
                        <br></br>
                        "Mijn <?php echo $_POST['huisdier']; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo  $_POST['speelgoed']; ?> voor hem
                        gekocht"
                        <br></br>
                        "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['bezigheid']; ?> leren?"
                        <br></br>
                        "Maar Sire, daar kunt u toch uw <?php echo $_POST['geld']; ?> voor gebruiken."
                        <br></br>
                        "<?php echo $_POST['persoon']; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had"
                        <br></br>
                        "<?php echo $_POST['bezigheid']; ?>, Sire."
                    </text>
                  </main>
                  <footer>
                    <p> Deze webite is gemaamkt door <?php echo $_POST['docent']; ?>.</p>
                  </footer>
  </body>
</html>
