<?
include "../conf/config.inc.php";

function FORM1 ()
{
echo "<HR>";
echo "<P><FONT SIZE=\"+2\">Insertion d'un nouveau type</FONT></P>";
echo "<FORM><p>URL de l'image type:</p><p><i>Ex : \"toto.gif\", \"tata.jpg\",....</i></p>";
echo "<p><em>Attention aux majuscules et assurez vus de bien avoir uploadé l'image sur le FTP !!!!!!</em></p><p>";
echo "<input name=\"urlstyle\" type=\"text\" size=\"50\">";
echo"</p><p><input type=\"submit\" name=\"INSERER\" value=\"Envoyer\"></p></FORM>";
}
function FORM2()
{
$sqlstyl = mysql_query("SELECT * FROM STYLENEW");
echo "<P><FONT SIZE=\"+2\">Supprimer un style de news...</FONT></P>";
echo "<HR><TABLE BORDER=\"1\">";
while ($st = mysql_fetch_object($sqlstyl))
       {
       echo "<TR><TD>$st->id_ico</TD><TD>$st->url</TD><TD><img src=\"../img/$st->url\"></TD></TR>";
       }
echo "</TABLE>";
echo "<p>Veuillez rentrer le numéro de style à supprimer</p>";
echo "<FORM><INPUT TYPE=\"TEXT\" SIZE=\"5\" NAME=\"urlsup\">";
echo "<br><input type=\"submit\" name=\"SUPPRIMER\" value=\"Supprimer\"></FORM>";
       }

if (isset($INSERER))
        {
        @mysql_query ("INSERT INTO STYLENEW (url) VALUES ('$urlstyle')");
        include "menu.php";
        FORM1();
        FORM2();
        exit();
        }
if (isset ($SUPPRIMER))
    {
    @mysql_query ("DELETE FROM STYLENEW WHERE id_ico=$urlsup");
    include "menu.php";
    FORM1();
    FORM2();
    exit();
    }
    else
    {
    include "menu.php";        
    FORM1();
    FORM2();
    }
    ?>
