<?php
class View {
  private function __clone()
  {
  }
  private function __construct()
  {
  }
  static public function CreateView($viewFile, $params = array())
  {
    ob_start();
    foreach ($params as $key=>$val) {
      $$key = $val;
    }
    if (isset($viewFile) && file_exists(APP_PATH . VIEWS . $viewFile . '.php'))
    {
      $explode = explode('.', $viewFile);
    }
    if (!@$explode)
    {
      $viewFile .= '.php';
    }
    if (explode('::', $viewFile))
    {
      $viewFile = str_replace('::', '/', $viewFile);
    }
    require_once APP_PATH . '/core/Views/' . $viewFile;
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
  }
}
