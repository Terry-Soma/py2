<?php

session_start();
if(isset($_SESSION['unique_id'])){
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
    <link rel="stylesheet" href="./css/login.css" />
  </head>
  <body>
    <div class="login">
      <h1>Нэвтрэх</h1>
      <form id="form" method="post">
        <input
           onkeyup="check()"
           autocomplete="username"
          type="text"
          id="email"
          name="e"
          placeholder="Э-мэйл хаягаа оруулна уу"
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
    <script>
      const email = document.getElementById("email");
    
      const error = document.querySelector(".error-text");
      const btn = document.querySelector("button");
     let regex = /^[^]+@[^]+\.[a-z]{2,3}$/;
      function check() {
        if (email.value.match(regex)) {
          email.style.borderColor = "#26ae60";
          error.style.display = "none";
          btn.style.display = "block";
        } else {
          //   alert("error");
          email.style.borderColor = "#e74c3c";
         
          error.style.display = "block";
          btn.style.display = "none";
        }
        if (email.value == "") {
          email.style.borderColor = "lightgray";
          error.style.display = "none";
          btn.style.display = "block";
        }
      }</script>
      <script src="./scripts/login.js"></script>
  </body>
</html>
