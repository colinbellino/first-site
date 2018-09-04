<html>

<!-- DEBUT HEAD -------------------------------------------------------------------------------------------------->
<head>
<!-- DEBUT TITLE ------------------------------------->
<title>:: MINI SITE BAHAMUT :: Test ::</title>
<!-- FIN TITLE --------------------------------------->
<link type="text/css" href="/BAHAMUT/css/defaut.css" rel="stylesheet">
</head>
<!-- FIN HEAD ---------------------------------------------------------------------------------------------------->

<!-- DEBUT BODY -------------------------------------------------------------------------------------------------->
<body background="/BAHAMUT/images/site/design/fond.png">
<br>

<!-- DEBUT TABLE --------------------------------------->
<table border="0" align="center" cellpadding="0" cellspacing="0">
 	<tr>	
   		<td colspan="3">
			<!-- BANNIERE --------------->
			<img src="/BAHAMUT/images/site/design/banniere.png" width="500" height="100">
			<!-- BANNIERE --------------->
		</td>
	</tr>
 	<tr>
    	<td width="10" rowspan="2" background="/BAHAMUT/images/site/design/cote_gauche.png">
			<!-- NE RIEN METTRE --------->
		</td>
    	<td width="480" height="30" bgcolor="#FFFFFF" align="center" valign="middle" class="Titre">
			<!-- TITRE -------------->
				<span class="Vert">::</span>&nbsp;BAHAMUT <span class="Vert">::</span>&nbsp;LIVRE 
            D'OR <span class="Vert">::</span>
			<!-- TITRE -------------->
		</td>
    	<td width="10" rowspan="2" background="/BAHAMUT/images/site/design/cote_droite.png">
			<!-- NE RIEN METTRE --------->
		</td>
	</tr>
	<tr>
 	  	<td width="480" height="350" valign="top" bgcolor="#FFFFFF" class="Corp" align="center">
	  		<!-- CONTENU ------------------>
	  			
				<?php 	mysql_connect("http://sql.free.fr/","user","pass");
					mysql_select_db("db");
					$reponse = mysql_query("SELECT * FROM news");
								
				?>
				
	  		<!-- CONTENU ------------------>
	  	 </td>
  	</tr>
	<tr>
		<td colspan="3">
			<!-- BAS ---------------------->
				<img src="/BAHAMUT/images/site/design/bas.png" width="500" height="15">
			<!-- BAS ---------------------->
		</td>
  	</tr>
</table>
<!-- FIN TABLE --------------------------------------->
	<br>
	<?	include("/BAHAMUT/pages/site/bas.php");
	?>
</body>
<!-- FIN BODY -------------------------------------------------------------------------------------------------->

</html>