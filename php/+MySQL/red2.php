<!DOCTYPE html>
<html>
<head>
<title>Редактирование</title>
<meta charset="utf-8">
</head>
<body>
<?php
    require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

if($_POST['secondName'] && isset($_POST['name']) && isset($_POST['otchestvo']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['city']) && isset($_POST['country']) )
{
	$name =$_POST['name'];
	$old =$_POST['oldSecName'];
	$secondName = $_POST['secondName'];
	$otchestvo = $_POST['otchestvo'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$country = $_POST['country'];

	$query ="UPDATE users SET name='$name', secondName='$secondName',otchestvo='$otchestvo',email='$email',phone='$phone',city='$city',country='$country' WHERE secondName LIKE '$old' ";
	$result = mysqli_query($link, $query) or die("Ошибка3 " . mysqli_error($link)); 
	        echo "<span style='color:blue;'>Изменения приняты ! !</span>";

}
mysqli_close($link);
?>
</body>
</html>