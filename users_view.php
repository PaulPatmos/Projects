<?php
    $link = mysqli_connect ('127.0.0.1:3306', 'root', '', 'new_db');

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
    
    <div class="tab">

    <div id="viewport">
    <table class="table">
    <thead>
    <tr>
      <th scope='col'>Номер пользователя</th>
      <th scope='col'>E-mail</th>
      <th scope='col'>Имя</th>
      <th scope='col'>Пароль</th>
    </tr>
  </thead>
        <?php
    
    $users = mysqli_query($link, ('SELECT * FROM `users` WHERE `id`<50'));

    foreach ($users as $user){
        echo "
  <tbody>
    <tr>
      <th scope='row'>".$user['id']."</th>
      <td>".$user['email']."</td>
      <td>".$user['name']."</td>
      <td>".$user['password']."</td>
    </tr>
  </tbody>";
    }
    
    ?>      
</table>

<a class="btn btn-primary" href="createusers.php" role="button">Добавить пользователя</a>
</div>

  </body>
</html>