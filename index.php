<?php
$link = mysqli_connect ('127.0.0.1:3306', 'root', '', 'new_db');

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Patmos</title>
</head>
<body >
  <p><a href="/" class="btn btn-primary bg-primary" style="text-decoration: none;">Главная</a></p> 
  <p><a href="form.php" class="btn btn-primary bg-primary" style="text-decoration: none;">Оформление протокола</a></p> 
  <p><a href="createuser.php" class="btn btn-primary bg-primary" style="text-decoration: none;">Регистрация</a></p> 
  <p><a href="users_view.php" class="btn btn-primary bg-primary" style="text-decoration: none;">Пользователи</a></p> 
  <p><a href="protocol.php" class="btn btn-primary bg-primary" style="text-decoration: none;">Смотреть</a></p> 
</div>
</div>
</form>
</body>
</html>