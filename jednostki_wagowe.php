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
    
    define("UNCJA",0.028);
        
    define("FUNT",0.453);
        
    define("KAMIEN",6.35);
        
        if (!empty($_GET['waga'])) 
        {
            echo "zmienna ma wartość: " . $_GET['waga'];
            $czy_zmienna_ustawiona = true;
        }
        else
        {
            echo "Zmienna nie jest ustawiona. Wprowadzą jej wartość w polu objetosc";
            $czy_zmienna_ustawiona = false;
        }
    ?>
    
    <form action="jednostki_wagowe.php" method="get">
        waga: <br />
        <input class="ble" type="text" name="waga"  placeholder="kilogramy" /><br />
        <input class="ble" type="submit" name="submit" value="przelicz" />
    </form>
    
 <table>
        <tr>
            <th>
                uncja
            </th>
            <td>
                <?php 
                    if ($czy_zmienna_ustawiona == true)
                    {
                        $waga = (float) $_GET['waga']; /*zamiana liczby otrzymywanej z zmiennej GET, która ma postac string (zwykłego tekstu), na zmienną typu float, która jest wykorzystywana do obliczeń*/
                        $wynik = $waga / UNCJA;
                        echo round($wynik, 2);
                    
                    }
                    else if ($czy_zmienna_ustawiona==false)
                    {
                        echo "-";
                    }
                ?>
            </td>
        </tr>
        
        <tr>
                
            <th>
                funt
            </th>
            <td>
                <?php
                    if ($czy_zmienna_ustawiona == true)
                    {
                       $waga = (float) $_GET['waga'];
                         $wynik = $waga / FUNT;
                        echo round($wynik, 2);
                        
                    }
                    else if ($czy_zmienna_ustawiona==false)
                    {
                        echo "-";
                    }
                
                ?>
            </td>
        </tr>
        
        <tr>
            <th>
                kamień
            </th>
            <td>
                <?php 
                    if ($czy_zmienna_ustawiona == true)
                    {
                        $waga = (float) $_GET['waga'];
                        $wynik = $waga * KAMIEN;
                        echo round($wynik, 2);
                    
                    }
                    else if ($czy_zmienna_ustawiona==false)
                    {
                        echo "-";
                    }
                ?>
            </td>
        </tr>
    
    <a href="index.php" class="przycisk">Strona główna</a>
    
</body>
</html>