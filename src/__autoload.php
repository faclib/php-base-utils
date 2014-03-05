<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'ccallback' => '/lib/CCallback.php',
                'cdatetime' => '/lib/CDateTime.php',
                'cjavascript' => '/lib/CJavaScript.php',
                'cjson' => '/lib/CJSON.php',
                'cvardumper' => '/lib/CVarDumper.php',
                'passwordhash' => '/lib/PasswordHash.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd