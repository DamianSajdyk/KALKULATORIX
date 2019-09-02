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
    
    define("UNCJA",0.028);
    
    define("KWARTA",1.13);
    
    define("GALON",4.54);
     if (!empty($_GET['litry'])) 
        {
            echo "zmienna ma wartość: " . $_GET['litry'];
            $czy_zmienna_ustawiona = true;
        }
        else
        {
            echo "Zmienna nie jest ustawiona. Wprowadzą jej wartość w polu Litry";
            $czy_zmienna_ustawiona = false;
        }
    
    ?>
    
    <form action="jednostki_objetosci.php" method="get">
        objetosc: <br />
        <input class="ble" type="text" name="litry" placeholder="litr" /><br />
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
                        $litry = (float) $_GET['litry']; /*zamiana liczby otrzymywanej z zmiennej GET, która ma postac string (zwykłego tekstu), na zmienną typu float, która jest wykorzystywana do obliczeń*/
                        $wynik = $litry / UNCJA;
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
                kwarta
            </th>
            <td>
                <?php
                    if ($czy_zmienna_ustawiona == true)
                    {
                       $litry = (float) $_GET['litry'];
                         $wynik = $litry * KWARTA ;
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
                galon
            </th>
            <td>
                <?php 
                    if ($czy_zmienna_ustawiona == true)
                    {
                        $litry = (float) $_GET['litry'];
                        $wynik = $litry * GALON ;
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