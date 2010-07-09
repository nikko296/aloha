<?
if ($op=="isi"){
if ($ak=="isi"){
$f="db/jml.db.php";
if (!file_exists($f)){
$s=1;
$b=fopen($f,"w");
$t=fwrite($b,$s,strlen($s));
fclose($b);
} else {
$b=fopen($f,"r");
$s=fread($b,filesize($f));
$s=$s+1;
fclose($b);
$b=fopen($f,"w");
$t=fwrite($b,$s,strlen($s));
fclose($b);
}
$tgl=date("d/m/y h:i A");
$x="$nama#$email#$homepage#".nl2br($pesan)."#$tgl";
$y="db/$s.db.php";
$b=fopen($y,"w");
$t=fwrite($b,$x,strlen($x));
fclose($b);
$k="Terimakasih Anda telah mengisi buku tamu! Anda adalah pengisi ke-$s";
include "isi.php";
} else {
$k="";
include "isi.php";
}
} else {
$r=2;
include "list.php";
}
?>