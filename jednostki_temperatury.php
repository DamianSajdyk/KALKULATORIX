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
    
    define("FAHRENHAIT",32);
        
    define("RANKINE",273.15);
    
        if (!empty($_GET['temperatura'])) 
        {
            echo "zmienna ma wartość: " . $_GET['temperatura'];
              $czy_zmienna_ustawiona = true;
        }
        else
        {
            echo "Zmienna nie jest ustawiona. Wprowadzą jej wartość w polu objetosc";
              $czy_zmienna_ustawiona = false;
        }
    ?>
    
    <form action="jednostki_temperatury.php" method="get">
        temperatura: <br />
        <input class="ble" type="text" name="temperatura"  placeholder="°C" /><br />
        <input class="ble" type="submit" name="submit" value="przelicz" />
    </form>
    
<table>
        <tr>
            <th>
                fahrenheita
            </th>
            <td>
                <?php 
                    if ($czy_zmienna_ustawiona == true)
                    {
                        $temperatura = (float) $_GET['temperatura']; /*zamiana liczby otrzymywanej z zmiennej GET, która ma postac string (zwykłego tekstu), na zmienną typu float, która jest wykorzystywana do obliczeń*/
                        $wynik = $temperatura * 1.8 + FAHRENHAIT;
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
                rankine'a
            </th>
            <td>
                <?php
                    if ($czy_zmienna_ustawiona == true)
                    {
                       $temperatura = (float) $_GET['temperatura'];
                         $wynik = ($temperatura + RANKINE) * 1.8;
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