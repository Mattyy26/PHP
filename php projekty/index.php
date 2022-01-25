<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo ("Hello World");
        
        echo "<br /><br />";
        
        $moznost=true;
        $nazev="Matěj Hauser";
        $cislo=12;
        $cena=15.18;
        $vysledek= $cislo . $cena . "czk";
        echo $vysledek;
        
        echo "<br /><br />";
        echo $moznost;
        
        echo "<br /><br />";
        echo $nazev;
        
        echo "<br /><br />";
        echo $cislo;
        
        echo "<br /><br />";
        echo $cena;
        
        echo "<br /><br />";
        echo "<strong>Náhodný text</strong>";
        
        echo "<br /><br />";
        
        echo '<img src="images/minecraft.jpg" alt="test" width="200" height="200">';
        
        print "<br /><br />";        
        print ("Hello World");
        
        print "<br /><br />";
        print $moznost;
        
        print "<br /><br />";
        print $nazev;
        
        print "<br /><br />";
        print $cislo;
        
        print "<br /><br />";
        print $cena;
        
        print "<br /><br />";
        print $vysledek;
        
        print "<br /><br />";
        
        $a = 6;
        $b = 2;
        
        var_dump($a+$b);
        var_dump($a-$b);
        var_dump($a/$b);
        var_dump($a*$b);
        var_dump($a++);
        var_dump($a--);
        var_dump($a+=$b);
        var_dump($a-=$b);
        var_dump($a/=$b);
        var_dump($a*=$b);
        var_dump($a==$b);
        var_dump($a!=$b);
        var_dump($a>$b);
        var_dump($a<$b);
        var_dump($a||$b);
        var_dump($a&&$b);
        var_dump(!$a);
        
        echo "<br /><br />";
        echo "<strong>\\</strong>";
        echo "<br /><br />";
        
        
        
        
        
        $matejhauser1 = 1;
        $matejhauser2 = 2;
        
        if ($matejhauser1 < $matejhauser2) {
            echo "Matěj Hauser";
        }
        
        echo "<br /><br />";
        
        if($matejhauser1 < $matejhauser2) {
            echo "Matěj";
        }
        else {
            echo "Hauser";
        }
        
        echo "<br /><br />";
        
        
        if ($matejhauser1 > 2) {
            echo "Matěj";
        }
           if ($matejhauser2 < 3) {
               echo "Hauser";
           }
           
        echo "<br /><br />";
        
        switch ($matejhauser2) {
            case 1:
                echo "1";
                break;
            case 2:
                echo "2";
                break;
            case 3:
                echo "3";
                break;
            case 4:
                echo "4";
                break;
            case 5:
                echo "5";
                break;
            case 6:
                echo "6";
                break;
            default:
                echo "neplatí";              
        }
           
        echo "<br /><br />";
        
        //------------------------------------------------------------
        
        $produkty = array (
        
        1 => "mandarinka",
        1 => "hruska",
        3 => "tresen",
        4 => "jablko",
        5 => "banan",
        6 => "rajce",
        7 => "okurka",
        8 => "lilek" ,
        9 => "citron",
        10 => "limetka",
                );
        
        
        
        $produkty2 = array (
            "jidlo" => array (
                "ovoce a zelenina" => array (
                    "zdrave" => array (
                        "mandarinka" => array (
                            11 => "oranzova",
                            12 => "chutna",
                            13 => "lecive ucinky",
                            14 => "ovoce",
                            15 => "redi krev",
                    ),
                        "hruska" => array (
                            16 => "zelena",
                            17 => "chutna",
                            18 => "mnoho vody",
                            19 => "cisti streva",
                            20 => "ovoce",
                    ),
                        "tresen" => array (
                            21 => "cervene",
                            22 => "chutna",
                            23 => "peckovice",
                            24 => "mekky",
                            25 => "ovoce",
                    ),
                        "jablko" => array (
                            26 => "cervene",
                            27 => "chutne",
                            28 => "antidiaroicke",
                            29 => "zklidnuje nervy",
                            30 => "ovoce",
                    ),
                        "banan" => array (
                            31 => "zluty",
                            32 => "chutny",
                            33 => "snizuji krevni tlak",
                            34 => "uleva od paleni zahy",
                            35 => "ovoce",
                    ),
                        "rajce" => array (
                            36 => "cervene",
                            37 => "chutne",
                            38 => "hodne vitaminu",
                            39 => "mineralni latky",
                            40 => "zelenina",
                    ),
                        "okurka" => array (
                            41 => "zelena",
                            42 => "chutna",
                            43 => "posiluje imunitu",
                            44 => "proti parazitum",
                            45 => "zelenina",
                    ),
                        "lilek" => array (
                            46 => "fialovy",
                            47 => "chutny",
                            48 => "zelenina",
                            49 => "hodne vitaminu",
                            50 => "hodne mineralu",
                    ),
                        "citron" => array (
                            51 => "zluty",
                            52 => "chutny",
                            53 => "kysely",
                            54 => "zelenina",
                            55 => "posiluje imunitni system",
                    ),
                        "limetka" => array (
                            56 => "zeleny",
                            57 => "chutna",
                            58 => "zelenina",
                            59 => "energizuje",
                            60 => "schopnost pozvedat",
                    ),
        
                        
                        
                        
                        ))));

        var_dump($produkty2);
        
        
        echo "mandarinka: ";  
        echo $produkty2 ["jidlo"]["ovoce a zelenina"]["zdrave"]["mandarinka"][12];
        echo "<br /><br />";
        
        echo "hruska: ";
        echo $produkty2 ["jidlo"]["ovoce a zelenina"]["zdrave"]["hruska"][20];
        echo "<br /><br />";
        
        echo "tresen: ";
        echo $produkty2 ["jidlo"]["ovoce a zelenina"]["zdrave"]["tresen"][24];
        echo "<br /><br />";
        
        echo "jablko: ";
        echo $produkty2 ["jidlo"]["ovoce a zelenina"]["zdrave"]["jablko"][29];
        echo "<br /><br />";
        
        echo "banan: ";
        echo $produkty2 ["jidlo"]["ovoce a zelenina"]["zdrave"]["banan"][33];
        echo "<br /><br />";
        
        echo "rajce: ";
        echo $produkty2 ["jidlo"]["ovoce a zelenina"]["zdrave"]["rajce"][36];
        echo "<br /><br />";
        
        echo "okurka: ";
        echo $produkty2 ["jidlo"]["ovoce a zelenina"]["zdrave"]["okurka"][42];
        echo "<br /><br />";
        
        echo "lilek: ";
        echo $produkty2 ["jidlo"]["ovoce a zelenina"]["zdrave"]["lilek"][50];
        echo "<br /><br />";
        
        echo "citron: ";
        echo $produkty2 ["jidlo"]["ovoce a zelenina"]["zdrave"]["citron"][53];
        echo "<br /><br />";
        
        echo "limetka: ";
        echo $produkty2 ["jidlo"]["ovoce a zelenina"]["zdrave"]["limetka"][60];
        
        echo "<br /><br />";
        echo "<br /><br />";
        echo "<br /><br />";
        
        //---------------------------------------------------------------------
        
        $radekMatejHauser = 2;
        $sloupecMatejHauser = 16;
        
        
        echo "<table border='1'>";
        
        for ($i = 1; $i <= $radekMatejHauser; $i++){ 
                echo "<tr>";
        
            for ($j = 1; $j <= $sloupecMatejHauser; $j++){
                    echo "<td>" . $i . " - ". $j ."</td>";
            } 
                echo "</tr>";
          }
        echo "</table>";
        
        echo '<br /><br />';
        echo '<br /><br />';
        
        
        $i = 1;
        $pocet = 20;
            while ($i <= $pocet)
            {
            echo($i . ' ');
                $i++;
            }    
            
        echo '<br /><br />';
        echo '<br /><br />';
        
        $pole = array('pokus1', 'pokus2');
        
            foreach ($pole as $key => $value){
        
                echo $key . ". " . $value. "<br>";
                }    
        
        echo '<br /><br />';
        echo '<br /><br />';
        
        
        echo (pow (10,2)); 
        echo '<br>';
        echo (sqrt (100)); 
        echo '<br>';
        
        $jmeno1 = "Zdravím pane";   
        print_r (explode(" ",$jmeno1));
        
        echo '<br>';
        echo '<br>';
        
        $jmeno2 = array ("Mates, Michal, ");
        $jmeno3 = array ("Martin, Fanda");
        echo (implode (" ",$jmeno2));
        echo (implode (" ",$jmeno3));
        
        echo '<br>';
        echo '<br>';
        
        $auta1 = array ("Ford, Mercedes");
        $auta2 = array ("Audi, Skoda, ");
        $auta3 = array ("Tatra");
        
        array_push ($auta3);
        print_r (array_merge($auta1,$auta2,$auta3));
        
        echo '<br>';
        echo '<br>';
        
        foreach ($produkty as $y=> $cena) {
            echo "$y - $cena <br><br>";
        }
        
        $money = 58.125786286;
        $currency = " EUR";
        
        function cena(float $money, string $currency) {
            return $money." ".$currency;
        }
        
        echo round($money,3);
        echo $currency;
        
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        
        getPriceMatejHauser( $price = 45745812.18548318);
        $mena2 = " CZK";       
        function getPriceMatejHauser(float $price, string $mena2 = "CZK") : string {
         
          
        echo number_format($price,2,"."," ");
        
        return $price." ".$mena2;
        }
        echo $mena2;    
        
        
        
        echo '<br>';
        echo '<br>';
        
        //--------------------------------------------------------------------
        
        function MatejHausergetPriceDPH(float $price2, float $DPH) : float{ 

            return ($price2 * round($DPH,2)) + $price2;
        }
        
        echo '<br>';
        echo MatejHausergetPriceDPH(879,0.1736);
        echo '<br>';
        echo MatejHausergetPriceDPH(879,0.1304);
        echo '<br>';
        echo MatejHausergetPriceDPH(879,0.0909);
        
        echo '<br>';
        echo '<br>';
        
        
        function MatejHausergetPriceDPH2(float $price3, float $DPH2) : float {
            
            return $price3* round($DPH2,2);
        }
        
        echo '<br>';
        echo MatejHausergetPriceDPH2(879,0.1736);
        echo '<br>';
        echo MatejHausergetPriceDPH2(879,0.1304);
        echo '<br>';
        echo MatejHausergetPriceDPH2(879,0.0909);
        
        echo '<br>';
        echo '<br>';
        
        //------------------------------------------------------------------
        
        $zpravaMatejHauser = "Kdo jinému jámu kopá, sám do ní padá.";
        
        $slovaMatejHauser = array ("jinému", "jámu", "padá");
        
        echo isValidMatejHauser($zpravaMatejHauser, $slovaMatejHauser);
        
        function isValidMatejHauser(string $zpravaMatejHauser, array $slovaMatejHauser): string {
            
            foreach ($slovaMatejHauser as $value1) {
              
                if (strpos($zpravaMatejHauser, $value1)){
                    return "Slovo " .$value1. " je zakázané!!";
                }
            }
            return "Nebylo nalezeno žádné zakázané slovo.";
        }
        
        //----------------------------------------------------------------
        
        $MatejHauserTest1 = "Nahodny text pro test.";
        $MatejHauserTest2 = array ("Nahodny", "text", "pro", "test");
        $MatejHauserTest3 = " super ";
        $MatejHauserTest4 = "test";
        $MatejHauserTest5 = "text";
        
        echo '<br>';
        echo '<br>';
        
        
        echo addslashes("Jakýkoliv 'slovo' je v lomítku.");
        echo '<br>';
        
        echo chr(123);
        echo '<br>';
        
        print_r (explode ("  ", $MatejHauserTest1));
        echo '<br>';
        
        echo implode($MatejHauserTest2, $MatejHauserTest3);
        echo '<br>';
        
        echo join($MatejHauserTest2, $MatejHauserTest3);
        echo '<br>';
        
        echo md5($MatejHauserTest1);
        echo '<br>';
        
        echo ord($MatejHauserTest3);
        echo '<br>';
                     
        echo strchr($MatejHauserTest1, $MatejHauserTest4);  
        echo '<br>';
        
        echo strlen($MatejHauserTest1);
        echo '<br>';
        
        echo strpos($MatejHauserTest1, $MatejHauserTest4);
        echo '<br>';
        
        echo strrchr($MatejHauserTest1, $MatejHauserTest4);
        echo '<br>';
        
        echo strrev($MatejHauserTest1);
        echo '<br>';
        
        echo strstr($MatejHauserTest1, $MatejHauserTest4);
        echo '<br>';
        
        echo strtolower ($MatejHauserTest3);
        echo '<br>';
        
        echo strtoupper ($MatejHauserTest3);
        echo '<br>';
        
        echo substr_replace($MatejHauserTest1, $MatejHauserTest3, $MatejHauserTest5);
        echo '<br>';
        
        echo substr($MatejHauserTest3,4);
        echo '<br>';
        
        echo ucfirst($MatejHauserTest5);
        echo '<br>';
        
        echo ucwords($MatejHauserTest1);
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        
        //-----------------------------------------------------------------
        
        $cislo2 = 454.142;
        $cislo3 = 2.5;
        $pole2 = array ("Nahodny", "text", "pro", "ukol");
        
        echo round ($cislo2,2);
        echo '<br>';
        
        echo ceil($cislo2);
        echo '<br>';
        
        echo floor($cislo2);
        echo '<br>';
        
        echo sqrt($cislo2);
        echo '<br>';
        
        echo pow($cislo2, $cislo3);
        echo '<br>';
        
        echo sin($cislo2);
        echo '<br>';
        
        echo cos($cislo2);
        echo '<br>';
        
        echo tan($cislo2);
        echo '<br>';
        
        echo asin($cislo2);
        echo '<br>';
        
        echo acos($cislo2);
        echo '<br>';
        
        echo atan($cislo2);
        echo '<br>';
        
        echo fmod($cislo2, $cislo3);
        echo '<br>';
        
        echo max($pole2);
        echo '<br>';
        
        echo min($pole2);
        echo '<br>';
        
        echo abs($cislo2);
        echo '<br>';
        
        echo ($cislo2-$cislo3);
        echo '<br>';
        
        echo ($cislo2+$cislo3);
        echo '<br>';
        
        echo ($cislo2/$cislo3);
        echo '<br>';
        
        echo ($cislo2*$cislo3);
        echo '<br>';
        
        echo number_format($cislo2);
        echo '<br>';
        
        
        
        
        
                ?>       
    </body>
</html>
