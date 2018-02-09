<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
require_once 'connection.php'; 
 
 if(isset($_POST['name']) && isset($_POST['secondName'])){
 
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка1 " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $secondName = htmlentities(mysqli_real_escape_string($link, $_POST['secondName']));
    $otchestvo = htmlentities(mysqli_real_escape_string($link, $_POST['otchestvo']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
    $phone = htmlentities(mysqli_real_escape_string($link, $_POST['phone']));
    $city = htmlentities(mysqli_real_escape_string($link, $_POST['city']));
    $country = htmlentities(mysqli_real_escape_string($link, $_POST['country']));
     
    $query ="INSERT INTO users VALUES('$name','$secondName','$otchestvo','$email','$phone','$city','$country')";
     
    $result = mysqli_query($link, $query) or die("Ошибка2 " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные успешно добавлены !</span>";
    }
    mysqli_close($link);
}
 ?>
    <h2>Добавить нового студента</h2>
    <form method="POST">
    <p>Имя: <br> 
        <input type="text" name="name" /></p>
        <p>Фамилия: <br> 
        <input type="text" name="secondName" /></p>
        <p>Отчество: <br> 
        <input type="text" name="otchestvo" /></p>
        <p>E-mail: <br> 
        <input type="text" name="email" /></p>
        <p>Номер телефона: <br> 
        <input type="text" name="phone" /></p>
        <p>Город: <br> 
        <input type="text" name="city" /></p>
        <p>Страна: <br> 
        <input type="text" name="country" /></p>
        <input type="submit" value="Добавить">
    </form>
</body>
</html>