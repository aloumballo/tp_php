<?php
     function liste($n){
         $i=0;
        /*  for($i=1;$i<=$n;$i++); */
        while($i<$n){

         echo("<ul> <li> ".($i+1)."</li></ul>");
            $i=$i+1;
     }
     }
     function controlle($n){
         if(isset($_POST["a"])){
             if(empty($_POST["b"])){
                 header("location:index.php");
             }
             else{
                 if(is_numeric($_POST["b"])){
                     liste($n);
                 }
                 else{
                 header("location:index.php");

                 }
             }
         }
     }
?>