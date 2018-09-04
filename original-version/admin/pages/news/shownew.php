<?php include "aspect.php"; 
echo "<HEAD><TITLE>Lemnews V $versionlemnews</TITLE></HEAD>";
echo "<body bgcolor=\"$fondpopup\">";
include "conf/config.inc.php";
$sqlcontenu = "SELECT * FROM lemnews WHERE id_new='$idnew'";
$sqlcontenu2= mysql_query ($sqlcontenu);
echo "<TABLE BORDER=\"$tabborder\" WIDTH=\"$WIDTHSHOWNEW\" ALIGN=\"CENTER\">";
while ($cont = mysql_fetch_object ($sqlcontenu2))

{ echo "<tr><TD COLSPAN=\"2\" ALIGN=\"CENTER\"><FONT SIZE=\"+4\"><b>D�tail complet de la new</b></FONT></TD></tr>";
  echo "<tr><td><FONT SIZE=\"$fondtitre\"><b>$cont->titre</b></FONT></td><td width=\"35%\"><FONT SIZE=\"$fontdate\">Le : $cont->date</FONT></td></tr>";
  echo "<tr><td colspan=\"2\" BGCOLOR=\"$fontmesspop\">$cont->message</td></tr>";
}
echo "</TABLE>";
?>
</body>