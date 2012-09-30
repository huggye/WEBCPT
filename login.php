<?php
$password = $_POST['pass'];
if ($password == 192837465) {
setcookie("val", "0x192837465");
echo "password corretta";
} else {
echo "password sbagliata";
}
?>