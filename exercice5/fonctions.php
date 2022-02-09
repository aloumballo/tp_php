<?php

     function distance($xa,$xb,$ya,$yb):void{
       /*  echo("les deux points sont:".$xa."et".$ya); */
         $dis=sqrt(pow($xb-$xa,2)+pow($yb-$ya,2));
         
         echo("la distance est:".$dis);

     }


?>