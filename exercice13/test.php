<?php
$mainstr = "This is a sim'ple text;";
echo "Text before remove: \n" . $mainstr, "\n"; 
//****************************************************** */
 $replacestr = remove_sp_chr($mainstr);
//************************************************ */
function remove_sp_chr($str)
{
    $result = str_replace(array("#", "'", ";"), '', $str);
    echo "\n\nText after remove: \n" . $result;
}
?>
