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
    // $cal = 2.54; //jeden cal w centymetrach
    
    define("CAL",2.54);
    
    // sprawdzanie czy zmienna $_GET ma ustawioną wartość
        if (!empty($_GET['metry'])) 
        {
            echo "zmienna ma wartość: " . $_GET['metry'];
            $czy_zmienna_ustawiona = true;
        }
        else
        {
            echo "Zmienna nie jest ustawiona. Wprowadzą jej wartość w polu Metry";
            $czy_zmienna_ustawiona = false;
        }
    ?>
    
    <form action="jednostki_dlugosci.php" method="get">
        <input class="ble" type="text" name="metry" placeholder="metry" /><br />
        <input class="ble" type="submit" name="submit" value="przelicz" />
    </form>
    
    
    <table>
        <tr>
            <th>
                cal
            </th>
            <td>
                <?php 
                    if ($czy_zmienna_ustawiona==true)
                    {
                        $metr = (float) $_GET['metry'];
                        $centymetry = $metr * 100;
                        $wynik = $centymetry / CAL;
                        echo $wynik;
                    
                    }
                    else if ($czy_zmienna_ustawiona==false)
                    {
                        echo "-";
                    }
                ?>
            </td>
        </tr>
        
        <tr><th>stopy</th><td>watosc</td></tr>
        
        <tr><th>jard</th><td>watosc</td></tr>
    </table>

    <a href="index.php" class="przycisk">Strona główna</a>
    
</body>
</html>