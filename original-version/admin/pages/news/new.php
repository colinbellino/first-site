<div align="center"><a href="LemnewsV1.0.zip">T&eacute;lecharger LemNews V1.0</a></div>
<SCRIPT type=text/javascript>
 <!--
 function OpenLayer(id){
   if(document.getElementById(id).style.visibility == "visible") {
    document.getElementById(id).style.visibility = "hidden" ;
    document.getElementById(id).style.position = "absolute" ;
    document.getElementById(id).style.top = "-10000" ;
    document.getElementById(id).style.left = "-10000" ;
   } else {
    document.getElementById(id).style.visibility = "visible" ;
    document.getElementById(id).style.position = "relative" ;
    document.getElementById(id).style.top = "0" ;
    document.getElementById(id).style.left = "0" ;
   }
 }
--></SCRIPT>
<?
include "conf/config.inc.php";
include "aspect.php";
$i = 0;
$affnew  = "SELECT * FROM lemnews INNER JOIN stylenew on lemnews.type=stylenew.id_ico ORDER by id_new DESC LIMIT $nbnewpage";
$affnew2 = mysql_query($affnew);
echo "<TABLE BORDER=\"0\" WIDTH=\"$WIDTHNEW\" ALIGN=\"CENTER\" BGCOLOR=\"$FONTGROSTABLEAU\"><TR><TD><p><font color=\"$couleurtitre\" size=\"$tailletitre\">$titredesnews</font></p><table border=\"$tabborder\" ALIGN=\"CENTER\">";

while ($new=mysql_fetch_object($affnew2))
        {
       if($i<$nbnewprinc)
        {
  echo "<tr BGCOLOR=\"$colorcase1\"><td width=\"15%\"><FONT SIZE=\"$fontdate\">$new->date</font></td><td><FONT SIZE=\"$fontdate\">Posté par : $new->poster</FONT></td></tr>";
  echo "<tr><td colspan=\"2\" BGCOLOR=\"$fondcasetitre\"><img src=\"news/img/$new->url\"></img><FONT SIZE=\"$fondtitre\" COLOR=\"$colortitre\"><b>$new->titre</b></FONT></td></tr>";
  echo "<tr><td colspan=\"2\" BGCOLOR=\"$fondnew\" onmouseover=\"javascript:this.style.background='$survol'\" onmouseout=\"javascript:this.style.background='$fondnew'\">$new->description <br>";
  echo "<A HREF=\"javascript:OpenLayer('$new->id_new');\"><FONT COLOR=\"$colorlien\">--> Lire la suite...</FONT></A>";
  echo "<br><hr></td></tr>";
  echo "<TR><TD colSpan=\"2\" WIDTH=\"$WIDTHNEW\">";
  echo "<DIV id=$new->id_new style=\" VISIBILITY: hidden; POSITION: absolute; TOP: -10000px; HEIGHT: 0px\">";
  echo "<br> $new->message</DIV></TD></TR>";
  $i++;
        }
else
       { if ($i<$nbnewpage)
        {
        echo "<tr BGCOLOR=\"$colorcase1\"><td width=\"5%\"><FONT SIZE=\"$fontdate\">$new->date</font></td><td><FONT SIZE=\"$fondtitre\"><A HREF=\"#\" onClick=\"window.open('shownew.php?idnew=$new->id_new','_blank','toolbar=$toolbar, location=$location, directories=$directories, status=$status, scrollbars=$scrollbars, resizable=$resizable, copyhistory=$copyhistory, menuBar=$menuBar, width=$width, height=$height');return(false)\">";
        echo "<FONT COLOR=\"$colorlien\"><b>$new->titre</FONT></b></a></FONT></td></tr>";
        $i++;}
        }
        }

echo "</table></TD></TR></TABLE>";
include "bas.php";
?>