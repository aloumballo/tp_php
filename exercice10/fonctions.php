<?php
   if (isset($_POST)) {
       $n=$_POST['v'];
       if (!empty($n)) {
        function saisie($n){
            for ($i=1; $i <=$n; $i++) { 
                echo' <label for="">Saisir une valeur N</label> <br>';
                echo'<input type="text" name="v"><br>';
                
            }
        }
           
       }
   }
     
   ?>