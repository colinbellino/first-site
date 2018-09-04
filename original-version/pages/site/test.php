<html>

<!-- DEBUT HEAD -------------------------------------------------------------------------------------------------->
<head>
<!-- DEBUT TITLE ------------------------------------->
<title>:: MINI SITE BAHAMUT :: News</title>
<!-- FIN TITLE --------------------------------------->
<link type="text/css" href="../../css/defaut.css" rel="stylesheet">
</head>
<!-- FIN HEAD ---------------------------------------------------------------------------------------------------->

<!-- DEBUT BODY -------------------------------------------------------------------------------------------------->
<body  background="../../images/site/design/fond.png">

<!-- DEBUT TABLE --------------------------------------->
<table border="0" align="center" cellpadding="0" cellspacing="0">
 	<tr>	
   		<td colspan="3" rowspan="2">
		<!-- BANNIERE --------------->
			<img src="../../images/site/design/banniere.png" width="500" height="100">
		<!-- BANNIERE --------------->
		</td>
		<td width="90" bgcolor="#FFFFFF">
		<!-- NE RIEN METTRE --------->
		</td>
	</tr>
 	<tr>
 	  	<td width="90" align="left" valign="bottom" bgcolor="#FFFFFF" class="Titre">
		<!-- TITRE MENU ------------->
 		  	<span style="margin-left:2">Navigation</span><span class="Vert"> ::</span>
		<!-- TITRE MENU ------------->
		</td>
  	</tr>
 	<tr>
    	<td width="10" rowspan="2" background="../../images/site/design/cote_gauche.png">
		<!-- NE RIEN METTRE --------->
		</td>
    	<td width="480" height="30" bgcolor="#FFFFFF" align="center" valign="middle" class="Titre">
			<!-- TITRE -------------->		  <span class="Vert">::</span>&nbsp;BAHAMUT <span class="Vert">::</span>&nbsp;NEWS<span class="Vert"> ::</span>
		<!-- TITRE -------------->		</td>
    	<td width="10" rowspan="2" background="../../images/site/design/cote_droite.png">
		<!-- NE RIEN METTRE --------->
		</td>
   	  	<td width="90" rowspan="3" align="left" valign="top">
		<!-- MENU ------------------->
	  		<?php include ("menu.php"); ?>
		<!-- MENU ------------------->
		</td>
	</tr>
 	<tr>
  	  <td width="480" height="350" align="center" valign="top" bgcolor="#FFFFFF" class="Corp">
	  	<!-- CONTENU ------------------>
		<br>
		<!-- TITRE ------------------><table width="400" border="0" cellpadding="0" cellspacing="0" bgcolor="#E3FDE4"><tr><td><span class="Corp">Titre</span></td>
		<!-- DATE & HEURE ------------------><td width="100"><span class="Menu_Contenu">Date / Heure</span></td></tr>
		<!-- APERCU ------------------><tr><td colspan="2"><span class="Corp">Apercu</span></td></tr>
		<!-- LIEN ------------------><tr><td><span class="Menu_Contenu">Lien</span></td>
		<!-- AUTEUR ------------------><td><span class="Menu_Contenu">Auteur</span></td></tr></table>
		<br>
		<table width="400" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td>
			<table width="250" height="10" border="0" align="left" cellpadding="0" cellspacing="0"><tr><td><div align="left"><span class="Corp"><?php echo "$titre"; ?></span></div></td></tr></table>
            <table width="150" height="10" border="0" align="right" cellpadding="0" cellspacing="0"><tr><td><div align="right"><span class="Corp">Le <?php echo "$date"; ?> � <?php echo "$heure"; ?></span></div></td></tr></table>
            <table width="400" border="0" cellpadding="0" cellspacing="0"><tr><td><div align="left"><span class="Corp"><?php echo "$apercu"; ?></span></div></td></tr></table>
            <table width="275" height="10" border="0" align="left" cellpadding="0" cellspacing="0"><tr><td><div align="left"><span class="Corp">Pour voir la news en entier cliquez <?php echo "$lien"; ?></span></div></td></tr></table>           
            <table width="125" height="10" border="0" align="right" cellpadding="0" cellspacing="0"><tr><td><div align="right"><span class="Corp">Poster par: <?php echo "$auteur"; ?></span></div></td></tr></table>
			</td>
          </tr>
        </table>		<br>
		<br>
	  </td>
 	</tr>
	
	<tr>
		<td colspan="3">
		<!-- BAS ---------------------->
			<img src="../../images/site/design/bas.png" width="500" height="15">
		<!-- BAS ---------------------->
		</td>
  	</tr>
</table>
<!-- FIN TABLE --------------------------------------->
</body>
<!-- FIN BODY -------------------------------------------------------------------------------------------------->

</html>