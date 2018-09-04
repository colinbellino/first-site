<?
include "../conf/config.inc.php";
include "menu.php";
$sqlinsert = "INSERT into lemnews (poster, date, type, titre, description, message) VALUES ('$poster', '$date', '$style', '$titre', '$description', '$contenu')";
@mysql_query ($sqlinsert); 
echo "<p ALIGN=\"CENTER\">news insérée avec succès...</P>";

?>