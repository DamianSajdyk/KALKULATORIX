<!doctype html>

<html lang="pl">
    
<head>
  <meta charset="utf-8">
  <title>Kalkulatorix</title>
  <meta name="description" content="przeliczanie jednostek dlugosci">
  <meta name="Saldzer" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
    
<body>
    <h1>KALKULATORIX</h1>
    <h2>jednostki długości</h2>
    
    <?php
        if (!empty($_GET['metry'])) 
        {
            echo "zmienna ma wartość: " . $_GET['metry'];
        }
        else
        {
            echo "Zmienna nie jest ustawiona. Wprowadzą jej wartość w polu Metry";
        }
    ?>
    
    <form action="jednostki_dlugosci.php" method="get">
        <input class="ble" type="text" name="metry" placeholder="metry" /><br />
        <input class="ble" type="submit" name="submit" value="przelicz" />
    </form>
    
    
    <table>
        <tr><th>cal</th><td>watosc</td></tr>
        <tr><th>stopy</th><td>watosc</td></tr>
        <tr><th>jard</th><td>watosc</td></tr>
    
    
    </table>

    <a href="index.php" class="przycisk">Strona główna</a>
    
</body>
</html>