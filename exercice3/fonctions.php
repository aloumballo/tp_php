<?php 

     function calcul($m,$n):void{
         $som=$m+$n;
         $exp=pow($m,$n);
         $dif=$m-$n;
         $pro=$m*$n;
         $mod=$m%$n;
         $div=$m/$n;
         $carre=$m*$m;
         $carre1=$n*$n;
         echo("la somme est:").$som."<br>";
         echo("l'exponentiel est:").$exp."<br>";
         echo("la difference est:").$dif."<br>";
         echo("le produit est:").$pro."<br>";
         echo("le module est:").$mod."<br>";
         echo("la division est:").$div."<br>";
         echo("le carre de m est:").$carre."<br>";
         echo("le carre de n est:").$carre1."<br>";
     
         
     }

?>