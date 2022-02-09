<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post">
       <label for="">Saisir une valeur N</label>
       <input type="text" name="v">
       <input type="submit">
   </form>
   <?php
     include_once("controller.php");
     saisie($n);
   ?>
</body>
</html>