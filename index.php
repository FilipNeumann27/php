<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php</title>
    </head>
    <body>
        <?php
      
        require 'tracy/tracy.phar';
        use Tracy\Debugger;
        
        
        
        $a=5;
        $b=7;
        $str = "čau";
        $ahoj = 'Dobrý den';
        $string = 'kobliha';
        $FilipNeumann1 = 1;
        $FilipNeumann2 = 3;
        $i=0;
        $radekFilipNeumann=4;
        $sloupecFilipNeumann=17;
        
        
        
        if ($FilipNeumann1===1){
           echo"Neumann Filip";
       }
       
       echo '<p/>';
        
       if ($FilipNeumann2===1) {
           echo "Filip";
        } else {
            echo "Neumann";
        }  
        
        echo '<p/>';
        
       if ($FilipNeumann1===1) {

       if ($FilipNeumann2===3) {
            echo "Filip";
        }
        } else {
            echo "Neumann";
        }
        
        echo '<p/>';
        
        switch ($FilipNeumann1) {
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
        echo "není pravda";    
        }
            
        echo'<p/>';  
        
        $znackyaut = array ("audi","škoda","volkswagen","mercedes","volvo","bentley","renault","honda","ferrari","buggati"); 
        
        var_dump ($znackyaut);
        
        echo $znackyaut["3"];
       
        echo'<p/>';
        
        for ($i=0; $i<10; $i++) {
           echo "ahoj<br>";
        }
        
        echo'<p/>';
        
        
        
        for ($sloupecFilipNeumann=0; $sloupecFilipNeumann<4; $sloupecFilipNeumann++) {    
           
        for ($radekFilipNeumann=0; $radekFilipNeumann<17; $radekFilipNeumann++){
                
         
            
            }
        }
        
        echo'<p/>';
        
        //matematické funkce
        echo round (45.7);
        echo'<p/>';
        echo pi();
        
        echo'<p/>';
        
        //řetězcové funkce
        echo md5 ($string);
        echo'<p/>';
        echo ucfirst ($string);
        
        echo'<p/>';
        
        //funkce polí
        echo pos ($znackyaut);
        echo'<p/>';
        echo rsort ($znackyaut);
        
        echo'<p/>';
        
        //foreach
        foreach ($znackyaut as $value) {
        echo 1,$value,"<br>" ;
}
        
        echo'<p/>';
        
        //vlastní funkce
        $cena_bez_dph=65;
        $dph=1.21;
        $mena='CZK';
        $cena_s_dph=$cena_bez_dph*$dph;
     
        function cena ($cena_bez_dph, $dph, $mena){
        $cena_s_dph = $ceba_bez_dph*$dph;
        $cena_s_dph = round ($cena_s_dph, 2);
        $cena_s_dph = number_format ($cena_s_dph, 2, '.', ',');
        return $cena_s_dph. " " . $mena;
        }
        
        echo dump ($cena_s_dph);
        
        die;
       
        echo dump ($a+$b);         
       echo dump ($a-$b);
       echo dump ($a/$b);
       echo dump ($a*$b);
       
       echo dump ($a==$b);
       echo dump ($a===$b);
       echo dump ($a>$b);
       echo dump ($a<$b);
       echo dump ('ahoj');
       echo dump ($str);
       
       dump (print $a+$b);         
       dump (print $a-$b);
       dump (print $a/$b);
       dump (print $a*$b);
       
       dump (print $a==$b); 
       dump (print $a===$b);
       dump (print $a>$b);
       dump (print $a<$b);
       dump (print 'ahoj');
       dump (print "$str");
       
       echo "\\";
       
       dump(<<<POZDRAV
       $ahoj, jak se máte?
       Dobře a vy?
       POZDRAV);
       
       //kombinování stringů
       dump ($ahoj.=' máte otevřeno?');
       dump ($str.=$string);
       
       echo '<p/>';
      
       //obrázek
       echo '<img src="obrazekphp.jpg" width="100px" length="100px" alt="obrazek" title="obraz">';
      
       echo '<p/>';
        
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
    </body
    </html>
