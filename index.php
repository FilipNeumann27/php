<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php</title>
    </head>
    <body>
        <?php
      
        $a = 5;
        $b = 7;
                
        var_dump ($a-$b);
        var_dump ($a/$b);
        var_dump ($a*$b);
        
        var_dump ($a==$b);
        var_dump ($a>$b);
        var_dump ($a<$b);
        
        
        
        $auta = array ("audi", "skoda", "volkswagen");
        var_dump ($auta);
        
        
        
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
        
        var_dump ($cena_s_dph);
        
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>

