<?
include "../conf/config.inc.php";
include "menu.php";
if ($supp=='')
{

$sectall  = "SELECT * FROM lemnews";
$sectall2 = mysql_query ($sectall);
$f = 0;
$nbn = mysql_query("SELECT COUNT(*) AS nbe FROM lemnews");
$nbnew = mysql_result($nbn, 0, "nbe");
echo "<TABLE BORDER =\"1\">";
echo "<TR><TD></td><TD>Date</TD><TD>Titre de la new</TD><TD>New</TD><TD>Supprimer ?</TD></TR>";
while ($f != $nbnew)
        {
        $balaie = mysql_fetch_object($sectall2);
        $f++;
        $id = $balaie->id_new;
        echo "<TR><TD>$f</td><TD>$balaie->date</TD><TD>$balaie->titre</TD><TD>$balaie->message</TD><TD>";
        echo "<BR><a href=\"supnew.php?supp=$id\">Supp</a></TD></TR>";
        }
}

else
{
@mysql_query ("DELETE FROM lemnews WHERE id_new=$supp");
echo "<p align=\"CENTER\">News N° $supp supprimée avec succés !</p>";

$sectall  = "SELECT * FROM lemnews";
$sectall2 = mysql_query ($sectall);
$f = 0;
$nbnew = mysql_num_rows($sectall2);
echo "<TABLE BORDER =\"1\">";
echo "<TR><TD></td><TD>Date</TD><TD>Titre de la new</TD><TD>New</TD><TD>Supprimer ?</TD></TR>";
while ($f != $nbnew)
        {
        $balaie = mysql_fetch_object($sectall2);
        $f++;
        $id = $balaie->id_new;
        echo "<TR><TD>$f</td><TD>$balaie->date</TD><TD>$balaie->titre</TD><TD>$balaie->message</TD><TD>";
        echo "<BR><a href=\"supnew.php?supp=$id\">Supp</a></TD></TR>";
        }
}
?>