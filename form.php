<?php
     $link = mysqli_connect ('127.0.0.1:3306', 'root', '', 'new_db');



    if (isset($_POST["worker"])) {
    
      $sql = mysqli_query($link, "INSERT IGNORE INTO `protocol_table` (`data`, `worker`, `indication`) VALUES ('{$_POST['data']}', '{$_POST['worker']}', '{$_POST['indication']}')");
      // $sql = mysqli_query($link, "INSERT IGNORE INTO `protocol_table` (`data`, `worker`, `indication`) VALUES ('{$_POST['data']}', '{$_POST['worker']}', '{$_POST['indication']}')");

      if ($sql) {
        echo '<p>Данные успешно добавлены в таблицу.</p>';
        header("Location: protocol.php");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patmos</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

  <p><a href="/" class="btn btn-primary bg-primary" style="text-decoration: none;">Главная</a></p> 
    
<div class="container">
    
    <div class="for">

    <div id="viewport">
    <form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Дата выдачи (дд.мм.гг)</label>
    <input type="date" class="form-control" id="data" name="data" placeholder="Дата" required>
    <small id="dateHelp" class="form-text text-muted">Выберите дату</small>
  </div>
  <div class="form-group">
    <label for="exampleInputworker" >Ответственный</label>
    <input class="form-control" name="worker" type="text" placeholder="ФИО">
  </div>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Соответствие</label>
    <select class="form-control" id="indication" name="indication">
      <option>Нет</option>
      <option>Да</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

</div>

  </body>
</html>