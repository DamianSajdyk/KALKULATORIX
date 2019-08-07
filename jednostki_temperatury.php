<!doctype html>

<html lang="pl">
    
<head>
  <meta charset="utf-8">
  <title>Kalkulatorix</title>
  <meta name="description" content="przeliczanie jednostek temperatury">
  <meta name="Saldzer" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
    
<body>
    <h1>KALKULATORIX</h1>
    <h2>jednostki temperatury</h2>
    
    <?php
        if (!empty($_GET['temperatura'])) 
        {
            echo "zmienna ma wartość: " . $_GET['temperatura'];
        }
        else
        {
            echo "Zmienna nie jest ustawiona. Wprowadzą jej wartość w polu objetosc";
        }
    ?>
    
    <form action="jednostki_temperatury.php" method="get">
        temperatura: <br />
        <input class="ble" type="text" name="temperatura"  placeholder="°C" /><br />
        <input class="ble" type="submit" name="submit" value="przelicz" />
    </form>
    
    <table>
        <tr><th>stopień Fahrenheita</th><td>watosc</td></tr>
        <tr><th>stopień Rankine’a</th><td>watosc</td></tr> 
    </table>
    
     <a href="index.php" class="przycisk">Strona główna</a>
    
</body>
</html>