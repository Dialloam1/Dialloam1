<!--La seconde page envoi.php-->
<?/**php 
//Pour définir chaque input du formulaire, ajout signe de dollar devant

$msg = "nom:\t$nom\n";
$msg .= "email:\t$email\n";
$msg .= "message:\t$message\n\n";
//Pourrait continuer ainsi jusqu'à la fin du formulaire

$recipient = "tonCourriel@mail.com";
$subject = "Formulaire";

$mailheaders = "From: Mon test de formulaire<> \n";
$mailheaders .= "Reply-To: $email\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";

?>
*/

