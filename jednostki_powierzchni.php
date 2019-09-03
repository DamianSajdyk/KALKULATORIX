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
    
    define("ZERDZ",25.29);
        
    define("PRET",1011.71);
    
    define("AKR",4046,85);
    
        if (!empty($_GET['powierzchnia'])) 
        {
            echo "zmienna ma wartość: " . $_GET['powierzchnia'];
            $czy_zmienna_ustawiona = true;
        }
        else
        {
            echo "Zmienna nie jest ustawiona. Wprowadzą jej wartość w polu powierzchnia";
            $czy_zmienna_ustawiona = false;
        }
    ?>
    
    <form action="jednostki_powierzchni.php" method="get">
        powierzchnia: <br />
        <input class="ble" type="text" name="powierzchnia" placeholder="metr²" /><br />
        <input class="ble" type="submit" name="submit" value="przelicz" />
    </form>
    
       <table>
        <tr>
            <th>
                żerdź
            </th>
            <td>
                <?php 
                    if ($czy_zmienna_ustawiona == true)
                    {
                        $powierzchnia = (float) $_GET['powierzchnia']; /*zamiana liczby otrzymywanej z zmiennej GET, która ma postac string (zwykłego tekstu), na zmienną typu float, która jest wykorzystywana do obliczeń*/
                        $wynik = $powierzchnia * ZERDZ ;
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
                pręt
            </th>
            <td>
                <?php
                    if ($czy_zmienna_ustawiona == true)
                    {
                       $powierzchnia = (float) $_GET['powierzchnia'];
                         $wynik = $powierzchnia * PRET ;
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
                akr
            </th>
            <td>
                <?php 
                    if ($czy_zmienna_ustawiona == true)
                    {
                        $powierzchnia = (float) $_GET['powierzchnia'];
                        $wynik = $powierzchnia * AKR ;
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