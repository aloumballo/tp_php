<?php
session_start();
/* include_once("fonctions.php"); */
$_SESSION["post"]=$_POST;


if(isset($_SESSION["post"])){
?>
    <link rel="stylesheet" href="style.css">

<h1>Exercice12</h1>
 <table border="2" cellpadding="5" cellspacing="10"width="100%">
          <tr>
              <td>january </td>
              <td>April</td>
              <td>July</td>
              <td>October</td>
          </tr>
          <tr>
              <td>February</td>
              <td>May</td>
              <td>August</td>
              <td>November</td>
          </tr>
          <tr>
          <td>March</td>
          <td>June</td>
          <td>Semptember</td>
          <td>December</td>
          </tr>
      </table>
      <form action="index.php" method="post">
        <input type="submit" name="a" value="changer">

      </form>

<?php }?>
