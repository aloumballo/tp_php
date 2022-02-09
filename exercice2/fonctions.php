<?php 
   function perimetre($long,$larg) {
       $peri=($long+$larg)*2;
       $surf=$long*$larg;
       $diag= sqrt(pow($long,2)+pow($larg,2));
       echo"le perimetre est :".$peri."<br>";
       echo"la surface est :".$surf."<br>";
       echo"la diagonal est :".$diag."<br>";
   }



?>