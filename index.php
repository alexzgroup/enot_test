<?php

error_reporting(E_ALL);
ini_set('error_log', __DIR__ . '/php-errors.log');

// подгружаем классы
spl_autoload_register(function ($className) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, __DIR__ . $className . '.php');
    if (!is_file($file)) {
        $file = __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
    }
    if (is_file($file)) {
        include_once $file;
    }
});

// немного кода для определения контроллеров )))
if ($controller = $_REQUEST['controller'] ?? null)
{
    $controllerClassName = ucfirst($controller) . 'Controller';
    $controllerFileName = $controllerClassName . '.php';

    if (file_exists(__DIR__ . '/controller/' . $controllerFileName)) {
        $controllerUsePath = 'controller\\' . $controllerClassName;

        /**
         * @var \controller\BaseController $controllerUsePath
         */
        (new $controllerUsePath())->run();
    } else {
        die('No exists controller file');
    }
} else {
    die('No exists id controller');
}

