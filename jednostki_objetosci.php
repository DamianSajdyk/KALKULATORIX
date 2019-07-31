<!doctype html>

<html lang="pl">
    
<head>
  <meta charset="utf-8">
  <title>Kalkulatorix</title>
  <meta name="description" content="przeliczanie litrów na galony">
  <meta name="Saldzer" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
    
<body>
    <h1>KALKULATORIX</h1>
    <h2>jednostki objetosci</h2>
    
        <?php
        if (!empty($_GET['objetosc'])) 
        {
            echo "zmienna jest ustawiona i ma wartość: " . $_GET['objetosc'];
        }
        else
        {
            echo "Zmienna nie jest ustawiona. Wprowadzą jej wartość w polu objetosc";
        }
    ?>
    
    <form action="jednostki_objetosci.php" method="get">
        objetosc: <br />
        <input class="ble" type="text" name="objetosc" /><br />
        <input class="ble" type="submit" name="submit" value="przelicz" />
    </form>
    
    <a href="index.php" class="przycisk">Strona główna</a>
    
</body>
</html>