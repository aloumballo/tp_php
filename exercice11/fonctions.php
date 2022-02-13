<?php
    function testSaisie($n){
        if(isset($_POST["alou"])){
            if (empty($_POST["b"])){
                header("location:index.php");

            }
            else{
                if(is_numeric($_POST["b"])){
                    if($n<10000){
                     header("location:index.php");
                        
                    }
                    else{
                        $a=affichage($n);
                         echo affichageN($a);                    
                       echo "<h1>la moyenne est:".moyenne($a)."</h1><br>";
                       echo "<h1>les nombres premiers inferieurs a la moyenne:</h1>".affichageN(inferieur($a))."<br>";
                       echo "<h1>les nombres premiers superieurs a la moyenne:</h1>".affichageN(superieur($a));
                       

                    }
                }
                else{
                header("location:index.php");
                    
                }
            }
        }
    }
    function premier($n):bool{
        $mba=2;
        for($i=2;$i<$n/2;$i++){
            if($n%$i==0){
                $mba++;
                break;
            }
        }
        return $mba==2 && $n!=1;

    }
    function affichage($n):array{
        $tab=array();
        for($i=1;$i<=$n;$i++){
            if(premier($i)){
                $tab[]=$i;
            }

        }
        return $tab;

    }
    function moyenne(array $tab):float{
        $taille=count($tab);
        $som=0;
        foreach ($tab as $valeur) {
            $som+=$valeur;
        }
        $moy=$som/$taille;
    return $moy;

    }
    function inferieur(array $tab):array{
        $tabb=array();
        $moye=moyenne($tab);
        foreach ($tab as $valeur) {
            if($valeur<=$moye){
                $tabb[]=$valeur;
            }
        }
        return $tabb;
    }
    /* pour la condition ou s'est superieur */

    function superieur(array $tab):array{
        $tabb=array();
        $moye=moyenne($tab);
        foreach ($tab as $valeur) {
            if($valeur>$moye){
                $tabb[]=$valeur;
            }
        }
        return $tabb;
    }



    /* moiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii */
    function affichageN(array $tab):string{
        $toto=count($tab);
        $affichage='<table>';
        for($i=1;$i<=$toto;$i++){
            if($i%30==1){
                $affichage.="<tr>";
            }
            $affichage.="<td>".$tab[$i-1]."</td>";
            if($i%30==0){
                $affichage.="</tr>";
            }
        }
        $affichage.="</table>";
        return $affichage;

    }
    
?>