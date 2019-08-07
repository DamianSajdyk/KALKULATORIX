<!doctype html>

<html lang="pl">
    
<head>
  <meta charset="utf-8">
  <title>Kalkulatorix</title>
  <meta name="description" content="przeliczanie jednostek powierzchni">
  <meta name="Saldzer" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
    
<body>
    <h1>KALKULATORIX</h1>
    <h2>jednostki powierzchni</h2>
    
    <?php
        if (!empty($_GET['powierzchnia'])) 
        {
            echo "zmienna ma wartość: " . $_GET['powierzchnia'];
        }
        else
        {
            echo "Zmienna nie jest ustawiona. Wprowadzą jej wartość w polu objetosc";
        }
    ?>
    
    <form action="jednostki_powierzchni.php" method="get">
        powierzchnia: <br />
        <input class="ble" type="text" name="powierzchnia" placeholder="metr²" /><br />
        <input class="ble" type="submit" name="submit" value="przelicz" />
    </form>
    
    <table>
        <tr><th>perch</th><td>watosc</td></tr>
        <tr><th>rood</th><td>watosc</td></tr>
        <tr><th>akr</th><td>watosc</td></tr>
    </table>
    
    <a href="index.php" class="przycisk">Strona główna</a>
    
</body>
</html>