<?php

session_start();
if(isset($_SESSION['Aunique_id'])){
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login form</title>
    <link rel="stylesheet" href="../admin/css/login.css" />
  </head>
  <body>
    <div class="login">
      <h1>Нэвтрэх</h1>
      <form id="form" method="post">
        <input
           onkeyup=""
           autocomplete="username"
          type="text"
          id="email"
          name="e"
          placeholder="Дугараа оруулна уу"
          required="required"
        />
        <input
          type="password"
          autocomplete="current-password"
          name="p"
          placeholder="Нууц үгээ"
          required="required"
        />
        <div class="error-text">Please enter valid email address</div>
        <div class="error-txt"></div>
        <button type="submit" class="btn btn-primary btn-block btn-large">
          Нэвтрэх
        </button>
      </form>
    </div>
   
      <script src="./script/login.js"></script>
  </body>
</html>
