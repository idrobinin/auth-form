<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Форма регистрации</title>

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
   <div class="container">
         <?php
            if (isset($_COOKIE['user']) == ''): 
         ?>
      <div class="row">
         <div class="col">
            <div class="login-form">
               <h1>Форма регистрации</h1>
               <form action="validation-form/check.php" method="post">
                  <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя">
                  <input type="password" class="form-control" name="pass" id="name" placeholder="Введите пароль">
                  <button class="btn btn-success" type="submit">Зарегистрироваться</button>
               </form>
            </div>
         </div>
         <div class="col">
            <div class="auth-form">
               <h1>Форма авторизации</h1>
               <form action="validation-form/auth.php" method="post">
                  <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
                  <input type="password" class="form-control" name="pass" id="name" placeholder="Введите пароль">
                  <button class="btn btn-success" type="submit">Авторизоваться</button>
               </form>
            </div>
         </div>
      </div>
      <?php else:?>

         <p>Привет <?=$_COOKIE['user']?>.Чтобы выйти нажмите <a href="exit.php">Здесь</a>.</p>

      <?php endif;?>

   </div>

</body>

</html>