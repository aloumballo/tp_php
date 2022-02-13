<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Exercice13</h1>
    </header>
    <form action="" method="post">

        <div>
        <label for="">TEXT</label><br>
        <textarea name="a" id="" cols="90" rows="40"></textarea><br><br>
        <input type="submit" value="valider">
        </div>

        <div>
        <label for="">text corriger</label><br>
        <textarea name="" id="" cols="90" rows="40"><?php
           if (isset($_POST)) {
               $t=$_POST['a'];
               
               
               $searchString =" ";
               $replaceString = "";
               $originalString = "$t";              
               $outputString = str_replace($searchString, $replaceString, $originalString); 
               

            }
            echo("$outputString");
             
              /*  echo(" $originalString \n");   */
               /* echo $t; j'avais mis ca ppour afficher avant de faire appel a la fonction
               pour supprimer les espaces*/
   /*  echo "\n\nText after remove: \n" . $result; */



      function remove_sp_chr($str)
{
    $result = str_replace(array("#", "'", ";"), '', $str);
     echo "\n\nText after remove: \n" . $result;  
     /* echo  (" $result"); */
 }
     $replacestr = remove_sp_chr($t);  
     
     



/*    echo $replacestr ;  */
/*  */
                      
            ?>
             
        </textarea>
        </div>
    </form>
</body>
</html>