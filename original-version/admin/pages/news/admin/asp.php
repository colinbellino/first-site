<?php include "menu.php"; ?>
<p align="center"><strong><font size="+2">Formulaire d'insertion de news</font></strong></p>
<form name="form1" method="post" action="insertnew.php">
  <p>Post�e par :
    <input type="text" name="poster">
  </p>
  <p>Le :
    <input type="text" name="date">
  </p>
  <p> Titre de la news : 
    <input type="text" name="titre">
  </p>
  <p>Type de news :</p>

<?
include "../conf/config.inc.php";
$sqlstyle   = "SELECT * FROM stylenew";
$sqlstyle2 = mysql_query($sqlstyle);
	while ($sty = mysql_fetch_object($sqlstyle2))
		{
		    echo "<input type=\"radio\" name=\"style\" value=\"$sty->id_ico\"><img src=\"../img/$sty->url\"></img>";
		}
?>
   <p></p>
  <p>Br�ve description :</p>
  <p> 
    <textarea name="description" cols="60" rows="4"></textarea>
  </p>
  <p>Article complet :</p>
  <p> 
    <textarea name="contenu" cols="100" rows="6"></textarea>
  </p>
  <p>
    <input type="submit" name="insertnew" value="Envoyer">
  </p>
</form>