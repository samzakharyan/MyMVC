<?php

class BaseController
{
  public function index()
  {
    echo "index";
  }
  public function install()
  {
    echo View::CreateView('welcome::welcome');
  }
  public function step2()
  {
      if(isset($_POST['ok']))
      {
        $host = htmlspecialchars($_POST['host']);
        $user = htmlspecialchars($_POST['user']);
        $pass = htmlspecialchars($_POST['pass']);
        $db = htmlspecialchars($_POST['db']);
      }

      if(!empty($host) && !empty($user) && !empty($pass) && !empty($db))
      {
        $content = "
<?php
define ('HOST','" . $host . "');
define ('USER','" . $user . "');
define ('PASS','" . $pass . "');
define ('DB','" . $db . "');
";
        file_put_contents(DBCONFIG, $content);
        echo View::CreateView('welcome::step2');
      }
      else {
        echo View::CreateView('welcome::failedInstallation');
      }
  }
}
