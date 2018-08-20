<?php

namespace PHPMVC\LIB;
// هنا عشان لو حابب اعمل لود لاي كلاس مش محتاج اعمله كل شويه الكلاس ده بيعمل اوتو لود لاي كلاس محتاجه 
class Autoload {

    public static function autoload($className) {

        $className = str_replace('PHPMVC', '', $className);
        $className = str_replace('\\\\', '\\', $className);
        $className = $className . '.php';
        $className = strtolower($className);

        if (file_exists(APP_PATH . $className)) {
            require_once APP_PATH . $className;
        }
    }

}

spl_autoload_register(__NAMESPACE__ . '\Autoload::autoload');
