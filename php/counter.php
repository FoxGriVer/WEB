<?php
setcookie("ourCount", "$count", time() + 30 );
$fd = fopen("count.txt", 'a+') or die("Не удалось открыть файл");
$count = $_COOKIE['ourCount'];
if(!isset($count)) 
{
	$count = 0;
}
$count++;
$record = "Вы вошли " . $count . " раз !";
ftruncate($fd, 0);
fwrite($fd, $record);
setcookie("ourCount", "$count", time() + 30 );
if(isset($count) === 1)
{
	echo "Вы вошли на эту страничку 1 раз ! Куки доступны в течении 30 секунд";
} else 
{
	echo "Вы вошли на эту страничку " . $count . " раз !";
}
fclose($fd);
?>