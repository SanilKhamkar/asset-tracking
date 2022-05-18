<?php 
spl_autoload_register(
    function ($class) {
        if (file_exists('../app/core/' . $class . '.php')) {
            require_once '../app/core/' . $class . '.php';
        } else if (file_exists('../app/controllers/' . $class . '.php')) {
            require_once '../app/controllers/' . $class . '.php';
        } else if (file_exists('../app/models/' . $class . '.php')) {
            require_once '../app/models/' . $class . '.php';
        } else if (file_exists('../app/managers/' . $class . '.php')) {
            require_once '../app/managers/' . $class . '.php';
        } else if (file_exists('../app/utilities/' . $class . '.php')) {
            require_once '../app/utilities/' . $class . '.php';
        }
    }
);
?>