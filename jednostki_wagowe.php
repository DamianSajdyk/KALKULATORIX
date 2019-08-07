<!doctype html>

<html lang="pl">
    
<head>
  <meta charset="utf-8">
  <title>Kalkulatorix</title>
  <meta name="description" content="przeliczanie jednostek wagi">
  <meta name="Saldzer" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
    
<body>
    <h1>KALKULATORIX</h1>
    <h2>jednostki wagi</h2>
    
    <?php
        if (!empty($_GET['waga'])) 
        {
            echo "zmienna ma wartość: " . $_GET['waga'];
        }
        else
        {
            echo "Zmienna nie jest ustawiona. Wprowadzą jej wartość w polu objetosc";
        }
    ?>
    
    <form action="jednostki_wagowe.php" method="get">
        waga: <br />
        <input class="ble" type="text" name="waga"  placeholder="kilogramy" /><br />
        <input class="ble" type="submit" name="submit" value="przelicz" />
    </form>
    
    <table>
        <tr><th>gran</th><td>watosc</td></tr>
        <tr><th>dram</th><td>watosc</td></tr>
        <tr><th>uncja</th><td>watosc</td></tr>
    </table>
    
    <a href="index.php" class="przycisk">Strona główna</a>
    
</body>
</html>