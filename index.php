<?php
$mpw = $_GET['pass'];
if ($mpw == 192837465) {
setcookie("val", "0x192837465");
}
$ix = "data/".$_GET['d'];
$val = $_COOKIE['val'];
if ($val == "0x192837465") {
$fp = fopen($ix, 'r');
$text = fread($fp, filesize($ix));
fclose($fpa);
$text = str_replace('.-%&£&&£&£$%$_.', 'a', $text);
$text = str_replace('.-%&£&"£!£"$$_.', 'e', $text);
$text = str_replace('.-%&£&£"%"%£%_.', 'o', $text);
$text = str_replace('.-)"=)£!=£"££_.', 'i', $text);
$text = str_replace('.-%")$(£(£"%%_.', 'u', $text);
$text = str_replace('.-%&£&£$$££%$_.', 'd', $text);
$text = str_replace('.-"£"$£$££%$&_.', 't', $text);
$text = str_replace('.-)")))))"(£$_.', 'p', $text);
$text = str_replace('.-!"$%&$£"$&/_.', 'b', $text);
$text = str_replace('.-)"£(")=%//%_.', 'l', $text);
$text = str_replace('.-)$/£")$%&")_.', 'c', $text);
$text = str_replace('.-)"(£/%&"/$/_.', '<', $text);
$text = str_replace('.-!"(£(%))£/"_.', '>', $text);
$text = str_replace('.-"£"&$/&£/$&_.', '@', $text);
$text = str_replace('.-§°ç$*°§*"°ç_.', '1', $text);
$text = str_replace('.-%&"))(&%£$&_.', '2', $text);
$text = str_replace('.-|!$//)(/&%£_.', '3', $text);
$text = str_replace('.-°çé*§§*"$$%_.', '4', $text);
$text = str_replace('.-§§°*çç°/&%£_.', '5', $text);
$text = str_replace('.-**ç°§çé*ç§*_.', '6', $text);
$text = str_replace('.-&$/$£%$%$&£_.', '7', $text);
$text = str_replace('.-$%!%%£$/%&%_.', '8', $text);
$text = str_replace('.-()%%$£$/&&(_.', '9', $text);
$text = str_replace('.-!!"£))($%&&_.', '0', $text);
echo "<b><p align='center'>NO ID AREA</b><br><br><a href='http://noidarea.altervista.org/data/'>DATA LIST</a> <a href='http://noidarea.altervista.org/add.php'>ADD DATA</a><br><br><font size='7'><b>".$_GET['d']."</b></font></p>";
echo $text;
} else {
echo "<b><p align='center'>NO ID AREA</b><br><br>";
echo "<a href='http://noidarea.altervista.org/log.php'>LogIn</a>";
}
?>