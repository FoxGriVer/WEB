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
    $answer = $_POST['secondName'];
    $query = "SELECT * FROM users WHERE secondName LIKE '$answer'";     
    $result = mysqli_query($link, $query) or die("Ошибка2 " . mysqli_error($link)); 
    if(isset($_POST['secondName']))
    {
        $rows = mysqli_num_rows($result); 
         
        echo "<table><tr><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Почта</th><th>Номер телефона</th><th>Город</th><th>Страна</th></tr>";
        for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
                for ($j = 0 ; $j < 7 ; ++$j) echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
        echo "</table>";
         
        mysqli_free_result($result);
    }
    ?>
    <h2>Введите фамилию студента, которого хотите найти:</h2>
    <form method="POST">
        <p>Фамилия: <br> 
        <input type="text" name="secondName" /></p>
        <input type="submit" value="Поиск">
    </form>
</body>
</html>