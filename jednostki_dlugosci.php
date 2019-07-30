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
    
    
    <form action="jednostki_dlugosci.php" method="get">
        
    Metry: <br />
        
    <input class="ble" type="text" name="metry" /><br />
    <input class="ble" type="submit" name="submit" value="przelicz" />
        
    </form>

    <?php
echo $_GET['metry'];
?>

    
    
    
    
    <a href="index.php" class="przycisk">Strona główna</a>
    
</body>
</html>