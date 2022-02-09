<?php
  
     include_once("fonctions.php");
     $m=rand(1,100);
     $n=rand(1,100);
     echo "avant permutation <br/>";
     echo"n= " .$n.'<br>';
     echo"m= " .$m.'<br>';
     permutation($m,$n);

?>