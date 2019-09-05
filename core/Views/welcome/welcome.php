<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      .welcome {
        background: #e4e4e4;
        padding: 25px;
        font-size: 45px;
        text-align: center;
      }
      .install {
        margin-left:45%;
        margin-top: 20px;
      }
    </style>
    <title>Welcome to MyMVC!</title>
  </head>
  <body>
    <div class="welcome">
      <span>Welcome to MyMVC</span>
    </div>
    <div class="install">
      <p>Installation MyMVC</p>
      <form action="<?php echo LINK; ?>BaseController/step2" method="post">
        <input type="text" name="host" placeholder="Hostname"><br><br>
        <input type="text" name="user" placeholder="Username"><br><br>
        <input type="password" name="pass" placeholder="Password"><br><br>
        <input type="text" name="db" placeholder="Database"><br><br>
        <button type="submit" name="ok">OK!</button>
      </form>
    </div>
  </body>
</html>
