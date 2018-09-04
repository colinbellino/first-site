<html>

<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link type="text/css" href="../../../css/defaut.css" rel="stylesheet">
</head>
 
<body bgcolor="#FFFFFF">
<table border="0" align="center" cellpadding="0" cellspacing="0">
 	<tr>	
   		<td colspan="3" rowspan="2">
			<img src="../../../images/site/design/banniere.png" width="500" height="100">
		</td>
		<td width="90" bgcolor="#FFFFFF">
		</td>
	</tr>
 	<tr>
 	  	<td width="90" align="left" valign="bottom" bgcolor="#FFFFFF" class="Menu_Titre">
	 	<span style="margin-left:2">Navigation</span> <span class="Noir">::</span>
		</td>
  	</tr>
 	<tr>
    	<td width="10" rowspan="2" background="../../../images/site/design/cote_gauche.png">
		</td>
    	<td width="480" height="20" bgcolor="#FFFFFF" align="center" valign="top" class="Titre">ACCUEIL</td>
    	<td width="10" rowspan="2" background="../../../images/site/design/cote_droite.png">
		</td>
   	  	<td width="90" rowspan="3" align="left" valign="top" background="../../../images/site/design/droite.png" class="Menu_Contenu">
	  		<p style="margin-left:2">
				<br>
				<a href="../../pages/accueil.php?page=1" class="Lien">Accueil</a>
				<br>
				<br>
				<a href="../../pages/guilde.php?page=1" class="Lien">Guilde</a></p>
	  	</td>
	</tr>
 	<tr>
 	  <td width="480" height="400" align="center" valign="top" bgcolor="#FFFFFF">
	  
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
?>
	  
	  </td>
  	</tr>
	<tr>
		<td colspan="3">
			<img src="../../../images/site/design/bas.png" width="500" height="15">
		</td>
  	</tr>
</table>

</body>

</html>
