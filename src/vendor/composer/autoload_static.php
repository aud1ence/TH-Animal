<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca24738ccf5ed2772e5cb28f1b9e1e1c
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca24738ccf5ed2772e5cb28f1b9e1e1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca24738ccf5ed2772e5cb28f1b9e1e1c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
