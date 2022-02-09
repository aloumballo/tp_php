<?php
    function tableM($n){
               
        if ($n>0 && is_numeric($n)) {
            for ($i=1; $i <=12; $i++) { 
              $m=$n*$i;
              echo($n."x".$i."=".$m.'<br>');
            }
        }else {
            echo("veiller saisir un entier positif");
        }

    }
?>