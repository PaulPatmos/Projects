<?php
     $link = mysqli_connect ('127.0.0.1:3306', 'root', '', 'new_db');



    if (isset($_POST["name"])) {
    
      $sql = mysqli_query($link, "INSERT IGNORE INTO `users` (`email`, `name`, `password`) VALUES ('{$_POST['email']}', '{$_POST['name']}', '{$_POST['password']}')");
      // $sql = mysqli_query($link, "INSERT IGNORE INTO `protocol_table` (`data`, `worker`, `indication`) VALUES ('{$_POST['data']}', '{$_POST['worker']}', '{$_POST['indication']}')");

      if ($sql) {
        echo '<p>Данные успешно добавлены в таблицу.</p>';
        header("Location: users_view.php");
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
<form action="" method="POST" style="width: 50%; height: 40%; margin-left: 25%; margin-top: 10%; border: solid 0px black;">
<div class="bg-primary"><label for="exampleInputEmail1" class="form-label text-white" style="margin-left: 35%;"><h1>Регистрация</h1></label></div>
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email">
          <label class="form-label">ФИО</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
          <label for="exampleInputPassword1" class="form-label" name="password" >Пароль</label>
					<input type="password" name="password" class="form-control" id="password" placeholder="Пароль"><br>
					<button type="submit" name="registration" class="btn btn-success">Зарегистрироваться</button><br>
				</form> 
</div>

  </body>
</html>