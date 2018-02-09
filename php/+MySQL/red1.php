<!DOCTYPE html>
<html>
<head>
<title>Редактирование</title>
<meta charset="utf-8">
</head>
<body>
<?php
    require_once 'connection.php';

if($_POST['secondName'])
{
	$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
    $answer = $_POST['secondName'];
    $query = "SELECT * FROM users WHERE secondName LIKE '$answer'"; 
    $result = mysqli_query($link, $query) or die("Ошибка2 " . mysqli_error($link)); 
    $row = mysqli_fetch_row($result);
    
    $name = $row[0];
	$secondName = $row[1];
	$otchestvo = $row[2];
	$email = $row[3];
	$phone = $row[4];
	$city = $row[5];
	$country = $row[6];
	
			echo "<form action='red2.php' method='POST'>
			    <input type='hidden' name='oldSecName' value='$secondName' />
			    <p>Имя: <br> 
	            <input type='text' name='name' value='$name' /></p>
		        <p>Фамилия: <br> 
		        <input type='text' name='secondName' value='$secondName' /></p>
		        <p>Отчество: <br> 
		        <input type='text' name='otchestvo' value='$otchestvo' /></p>
		        <p>E-mail: <br> 
		        <input type='text' name='email' value='$email' /></p>
		        <p>Номер телефона: <br> 
		        <input type='text' name='phone' value='$phone' /></p>
		        <p>Город: <br> 
		        <input type='text' name='city' value='$city' /></p>
		        <p>Страна: <br> 
		        <input type='text' name='country' value='$country' /></p>
		        <input type='submit' value='Сохранить'>
            </form>";

	mysqli_close($link);
}
?>
</body>
</html>