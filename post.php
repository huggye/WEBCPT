<?php
$val = $_COOKIE['val'];
if ($val == "0x192837465") {
$ix = "data/".$_POST['name'];
$fp = fopen($ix, 'r+');
$text = fread($fp, filesize($ix));
fclose($fpa);
$text = $text.'<br><br><br><b>'.date("d-m-y").'</b><br><br>'.$_POST['text'];
$text = nl2br($text);
$text = str_replace('1', '.-§°ç$*°§*"°ç_.', $text);
$text = str_replace('2', '.-%&"))(&%£$&_.', $text);
$text = str_replace('3', '.-|!$//)(/&%£_.', $text);
$text = str_replace('4', '.-°çé*§§*"$$%_.', $text);
$text = str_replace('5', '.-§§°*çç°/&%£_.', $text);
$text = str_replace('6', '.-**ç°§çé*ç§*_.', $text);
$text = str_replace('7', '.-&$/$£%$%$&£_.', $text);
$text = str_replace('8', '.-$%!%%£$/%&%_.', $text);
$text = str_replace('9', '.-()%%$£$/&&(_.', $text);
$text = str_replace('0', '.-!!"£))($%&&_.', $text);
$text = str_replace('@', '.-"£"&$/&£/$&_.', $text);
$text = str_replace('a', '.-%&£&&£&£$%$_.', $text);
$text = str_replace('e', '.-%&£&"£!£"$$_.', $text);
$text = str_replace('o', '.-%&£&£"%"%£%_.', $text);
$text = str_replace('i', '.-)"=)£!=£"££_.', $text);
$text = str_replace('u', '.-%")$(£(£"%%_.', $text);
$text = str_replace('d', '.-%&£&£$$££%$_.', $text);
$text = str_replace('t', '.-"£"$£$££%$&_.', $text);
$text = str_replace('p', '.-)")))))"(£$_.', $text);
$text = str_replace('b', '.-!"$%&$£"$&/_.', $text);
$text = str_replace('l', '.-)"£(")=%//%_.', $text);
$text = str_replace('c', '.-)$/£")$%&")_.', $text);
$text = str_replace('<', '.-)"(£/%&"/$/_.', $text);
$text = str_replace('>', '.-!"(£(%))£/"_.', $text);
$fpe = fopen($ix, 'w+');
fwrite($fpe, $text);
fclose($fpe);
echo "<a href='?d=".$_POST['name']."'>?d=".$_POST['name']."<a>";
}
?>