<?php
class Route
{
  private function __clone()
  {
  }
  public function __construct()
  {
    require_once FUNC;
    $this->partUri();
  }

  public static function getUri()
  {
    if (isset($_GET['url'])) {
    $uri = explode('/', $_GET['url']);
    return $uri;
    }
    return array();
  }

  public function partUri()
  {
    $uri = self::getUri();
    $controller = 'BaseController';
    $method = (file_get_contents(DBCONFIG, null)) ? 'index' : 'install';
    $controllerObj = '';

    if(!count($uri))
    {
      $controllerObj = Functions::RequireOBJ($controller);
    }
    elseif(file_exists(CONTROLLERS . $uri[0] . '.php'))
    {
      $controller = $uri[0];
      unset($uri[0]);
      $controllerObj = Functions::RequireOBJ($controller);
    }
    else
    {
      Functions::NotFound();
      die;
    }

    if (!empty(@$uri[1]))
    {
      $method = $uri[1];
      unset($uri[1]);
    }
    if(!method_exists($controllerObj, $method))
    {
      Functions::NotFound();
      die;
    }
    $controllerObj->{$method}();
  }
}
