<?php
define ('url',"https://api.telegram.org/bot591606796:AAH66XnYqIQXPVT4VF62EkCbVRrZ4_9Vtbc/");
$name = $_GET['name'];
$message = $_GET['message'];
$email= $_GET['email'];
$chat_id = '111615805';
$onderwerp = $_GET['onderwerp'];
$site = $_GET['site'];
$message = rawurlencode("*Feedback ontvangen*\n👤 ".$name."\n🕸 ".$site."\n⌨ ".$onderwerp."\n📧 ".$email."\n\n".$message);
if ($name == "") {
    exit;
  }
header('refresh:4;url='.$site);

file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=Markdown&disable_web_page_preview=true");

header('Location: ../../ontvangen');
?>


