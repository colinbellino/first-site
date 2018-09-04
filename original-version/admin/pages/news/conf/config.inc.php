<?
$nomsite = "BAHAMUT"; 			//nom de votre site
$host="http://sql.free.fr/";    //Hebergeur
$base="db";      			//Nom de la base de donn�es
$user="user";	      		//Nom d'utilisateur
$passwd="pass";	      		//mot de passe

$link = mysql_connect( $host, $user, $passwd);
if ( ! $link )
    die( "La connexion a merd�" );
mysql_select_db( "$base", $link ) or die ( mysql_error() );

?>