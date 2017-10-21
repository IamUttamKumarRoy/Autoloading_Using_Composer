<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1e8275c7a654281681695c61e796ad1
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DB\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DB\\' => 
        array (
            0 => __DIR__ . '/..' . '/DB',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\DB\\Query' => __DIR__ . '/..' . '/App/DB/Query.php',
        'App\\Home' => __DIR__ . '/..' . '/App/Home.php',
        'App\\Html\\Html' => __DIR__ . '/..' . '/App/Html/Html.php',
        'App\\Welcome' => __DIR__ . '/..' . '/App/Welcome.php',
        'DB\\Query' => __DIR__ . '/..' . '/DB/Query.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1e8275c7a654281681695c61e796ad1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1e8275c7a654281681695c61e796ad1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1e8275c7a654281681695c61e796ad1::$classMap;

        }, null, ClassLoader::class);
    }
}
