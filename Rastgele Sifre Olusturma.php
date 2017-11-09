<?
function sifreuret($uzunluk)
{
$harfler = "0123456789!@#$%^&*()_+".
"abcdefghijklmnopqrstuvwxyz".
"ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$str = "";
while(strlen($str) < $uzunluk)
{
$str .= substr($harfler, (rand() % strlen($harfler)), 1);
}
return($str);
}
echo sifreuret(14);
?>
