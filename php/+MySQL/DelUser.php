<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
    <?php
    require_once 'connection.php'; 
     
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка1 " . mysqli_error($link)); 
    if(isset($_POST['secondName']))
    {
        $answer = $_POST['secondName'];
        $query ="DELETE FROM users WHERE secondName LIKE '$answer'";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        echo "<span style='color:blue;'>Пользователь удален !</span>";
        mysqli_close($link);
    }

    ?>
    <h2>Введите фамилию студента, которого хотите удалить:</h2>
    <form method="POST">
        <p>Фамилия: <br> 
        <input type="text" name="secondName" /></p>
        <input type="submit" value="Удалить">
    </form>
</body>
</html>