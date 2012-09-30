<?php
$val = $_COOKIE['val'];
if ($val == "0x192837465") {
echo "<b><p align='center'>NO ID AREA</b><br><br><a href='http://noidarea.altervista.org/data/'>DATA LIST</a> <a href='http://noidarea.altervista.org/add.php'>ADD DATA</a><br><br></p>";
chdir("./");
if( !($dp = opendir("./")) )
die("Non riesco a esplorare il contenuto");

while($file = readdir($dp)) {
if(is_file($file))
$lista[] = $file;
}

sort($lista);

foreach($lista as $index => $nome) {
if ($nome != "index.php") {
echo '<a href="http://noidarea.altervista.org/?d='.$nome.'">'.$nome.'</a><br>';
}
}
} else {
echo "<p align='center'><b>ACCESSO NEGATO</b></p>";
}
?>
</p>
