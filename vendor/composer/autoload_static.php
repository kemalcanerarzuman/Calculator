<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a53fe98ac74b3d87f70ddd7e9d9fcf8
{
    public static $classMap = array (
        'app\\src\\Calculator' => __DIR__ . '/../..' . '/app/src/Calculator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0a53fe98ac74b3d87f70ddd7e9d9fcf8::$classMap;

        }, null, ClassLoader::class);
    }
}
