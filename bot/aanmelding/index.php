<?php
// scp index.php kresna.net@ssh.strato.de:/sinaranyar/bot/reserveren
// ww is masterpassword
// example: 
// site=Zaanse+Athleten+Club+%E2%80%9CDe+Halter%E2%80%9D
// name=Var+Haren
// lidnummer=1234
// aanwezig=Met+introduc%C3%A9
// message=Franse+kaas%2C+olie+en+vuur
define ('url',"https://api.telegram.org/bot591606796:AAH66XnYqIQXPVT4VF62EkCbVRrZ4_9Vtbc/");
$name = ucwords($_GET['name']);
$telefoon = ucwords($_GET['Telefoon']);
$message = $_GET['message'];
$email = $_GET['email'];
$event = $_GET['event'];
$sport = $_GET['sport'];
$datum = $_GET['datum'];
//$email= strtolower($_GET['email']);
//$phone= strtolower($_GET['phone']);
//$tijdslot= strtolower($_GET['tijdslot']);
//$aantal = $_GET['aantal'];
//$betalen = $_GET['betalen'];
//$actiecode = strtoupper($_GET['actiecode']);
$chat_id = '111615805';
$site = $_GET['site'];
$message = rawurlencode("*Aanmelding*\n📆 ".$event."\n👤 ".$name."\n📞 ".$telefoon."\n🕸 ".$site."\n📧 ".$email."\n🗓️ ".$datum."\n🤼‍♀️ ".$sport."\n\n📢 ".$message);
// $actief = 1 om formulier te activeren, anders $actief=0
$actief = 1;

if ($actief == 1) {

//echo "<td>".$arr["chats"]["list"][0]["messages"][$x]["text"][13] . "</td>";
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=Markdown&disable_web_page_preview=true");

// Subject of confirmation email.
//$conf_subject = 'Uw Aanmelding concert Gamelan en Dans';
// Who should the confirmation email be from?
//$conf_sender = 'Dans ensemble Sinar Anyar <sinaranyar@kresna.net>';
if ($name == "") {
  exit;
}
//$msg = "Beste ".$name . ",\n\nBedankt voor uw Aanmelding.\n\nU heeft ".$aantal." kaart(en) gereserveerd. U kunt het bedrag (aantal kaarten maal EUR 13 of EUR 7 als het een kind t/m 12 jaar betreft) zelf overmaken op IBAN  NL98 INGB 0007 2554 08 t.n.v. st. Wiludyeng te Zaandam of wachten op het betaalverzoek.\n\nI.v.m. de doorstroom, vragen we u ruim op tijd aanwezig te zijn. Het adres van het evenement is\n\nHet Gamelanhuis\nVeemkade 578\n1019 BL Amsterdam\n\nGoed bereikbaar met het openbaar vervoer (tram 26, halte Kattenburgerstraat) en voldoende parkeergelegenheid op zondag als u erg vroeg komt.\n\nIndien u nog vragen hebt, neemt u dan contact met ons op. U kunt bellen (06 2759 6205) of een antwoord op dit bericht sturen.\n\nTenslotte nog dit: het evenement organiseren met de op dat moment geldende beperkingen.\n\nHartelijk groet,\nGamelan ensemble Wiludyeng en\nDans ensemble Sinar Anyar";
//mail( $email, $conf_subject, $msg, 'From: ' . $conf_sender );

header('Location: ../../aanmelding');
exit;


} else {
         header('refresh:0;url='.$site);
       }

?>


