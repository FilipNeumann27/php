<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php</title>
    </head>
    <body>
        <?php
      
        $a=5;
        $b=7;
        $str = "čau";
        $ahoj = 'Dobrý den';
        $string = 'kobliha';
        
       echo var_dump ($a+$b);         
       echo var_dump ($a-$b);
       echo var_dump ($a/$b);
       echo var_dump ($a*$b);
       
       echo var_dump ($a==$b);
       echo var_dump ($a===$b);
       echo var_dump ($a>$b);
       echo var_dump ($a<$b);
       echo var_dump ('ahoj');
       echo var_dump ($str);
       
       var_dump (print $a+$b);         
       var_dump (print $a-$b);
       var_dump (print $a/$b);
       var_dump (print $a*$b);
       
       var_dump (print $a==$b); 
       var_dump (print $a===$b);
       var_dump (print $a>$b);
       var_dump (print $a<$b);
       var_dump (print 'ahoj');
       var_dump (print "$str");
       
       var_dump (<<<POZDRAV
       $ahoj, jak se máte?
       Dobře a vy?
       POZDRAV);
       
       //kombinování stringů
       var_dump ($ahoj.=' máte otevřeno?');
       var_dump ($str.=$string);
      
       //obrázek
       echo '<img src="obrazekphp.jpg" width="100px" length="100px" alt="obrazek" title="obraz">';
            
       
       
       $auta = array ("audi", "skoda", "volkswagen");
       echo var_dump ($auta);
        
        
        //vlastní funkce dph
        $cena_bez_dph=100;
        $dph=1.21;
        $mena='CZK';
        $cena_s_dph=$cena_bez_dph*$dph;
     
        function cena ($cena_bez_dph, $dph, $mena){
        $cena_s_dph = $ceba_bez_dph*$dph;
        $cena_s_dph = round ($cena_s_dph, 2);
        $cena_s_dph = number_format ($cena_s_dph, 2, '.', ',');
        return $cena_s_dph. " " . $mena;
        }
        
        echo var_dump ($cena_s_dph);
        
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>


