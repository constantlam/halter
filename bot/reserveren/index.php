<?php
// scp index.php kresna.net@ssh.strato.de:/sinaranyar/bot/reserveren

define ('url',"https://api.telegram.org/bot591606796:AAH66XnYqIQXPVT4VF62EkCbVRrZ4_9Vtbc/");
$name = ucwords($_GET['name']);
$betaalverzoek = ucwords($_GET['betaalverzoek']);
$message = $_GET['message'];
$email= strtolower($_GET['email']);
$phone= strtolower($_GET['phone']);
$tijdslot= strtolower($_GET['tijdslot']);
$aantal = $_GET['aantal'];
//$betalen = $_GET['betalen'];
//$actiecode = strtoupper($_GET['actiecode']);
$chat_id = '111615805';
$site = $_GET['site'];
$message = rawurlencode("*Reservering*\n👤 ".$name."\n🕸 ".$site."\n📧 ".$email."\n🎭 ".$aantal." \n⏲ ".$tijdslot." \n🏦 ".$betaalverzoek." \n📱 ".$phone." \n\n📢 ".$message);
// $actief = 1 om formulier te activeren, anders $actief=0
$actief = 1;

if ($name == "") {
  exit;
}

if ($actief == 1) {

//echo "<td>".$arr["chats"]["list"][0]["messages"][$x]["text"][13] . "</td>";
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=Markdown&disable_web_page_preview=true");

// Subject of confirmation email.
$conf_subject = 'Uw reservering concert Gamelan en Dans';
// Who should the confirmation email be from?
$conf_sender = 'Dans ensemble Sinar Anyar <sinaranyar@tuta.io>';
$msg = "Beste ".$name . ",\n\nBedankt voor uw reservering.\n\nU heeft ".$aantal." kaart(en) gereserveerd. U kunt het bedrag (aantal kaarten maal €8 of €4 als het een kind t/m 12 jaar betreft) zelf overmaken op IBAN  NL98 INGB 0007 2554 08 t.n.v. st. Wiludyeng te Zaandam of wachten op het betaalverzoek.\n\nU heeft gekozen voor het tijdslot dat begint om ".$tijdslot." op zondag 29 november aanstaande. I.v.m. de doorstroom, vragen we u ruim op tijd aanwezig te zijn. Het adres van het evenement is\n\nHet Gamelanhuis\nVeemkade 578\n1019 BL Amsterdam\n\nGoed bereikbaar met het openbaar vervoer (tram 26, halte Kattenburgerstraat) en voldoende parkeergelegenheid op zondag als u erg vroeg komt.\n\nIndien u nog vragen hebt, neemt u dan contact met ons op. U kunt bellen (06 2759 6205) of een antwoord op dit bericht sturen.\n\nTenslotte nog dit: het evenement organiseren we Corona-proof, dat betekent dat we u aan de deur moeten vragen of u geen klachten heeft. Bent u ziek op die dag, dan komt u niet. Neemt u dan contact met ons op.\n\nHartelijk groet,\nGamelan ensemble Wiludyeng en\nDans ensemble Sinar Anyar";
mail( $email, $conf_subject, $msg, 'From: ' . $conf_sender );

header('Location: ../../reservering');
exit;


} else {
         header('refresh:0;url='.$site);
       }

?>


