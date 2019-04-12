<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57201e6dd953a388c6d7457b6403589e
{
    public static $files = array (
        '6f7750a5f1d239027ef483252f4ce3c7' => __DIR__ . '/..' . '/10quality/wpmvc-phpfastcache/src/lib/functions.php',
        'c607dd5e0d3f783ee5565b107740298c' => __DIR__ . '/..' . '/10quality/wpmvc-core/src/lib/functions.php',
        '8600a54881920645a043f9b975dff7cc' => __DIR__ . '/../..' . '/app/Lib/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPMVC\\PHPFastCache\\' => 19,
            'WPMVC\\MVC\\' => 10,
            'WPMVC\\KLogger\\' => 14,
            'WPMVC\\Commands\\' => 15,
            'WPMVC\\' => 6,
        ),
        'T' => 
        array (
            'TenQuality\\WP\\' => 14,
        ),
        'P' => 
        array (
            'PostGallery\\' => 12,
            'PhpParser\\' => 10,
        ),
        'A' => 
        array (
            'Ayuco\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPMVC\\PHPFastCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/10quality/wpmvc-phpfastcache/src/psr4',
        ),
        'WPMVC\\MVC\\' => 
        array (
            0 => __DIR__ . '/..' . '/10quality/wpmvc-mvc/src',
        ),
        'WPMVC\\KLogger\\' => 
        array (
            0 => __DIR__ . '/..' . '/10quality/wpmvc-logger/src',
        ),
        'WPMVC\\Commands\\' => 
        array (
            0 => __DIR__ . '/..' . '/10quality/wpmvc-commands/src',
        ),
        'WPMVC\\' => 
        array (
            0 => __DIR__ . '/..' . '/10quality/wpmvc-core/src/psr4',
        ),
        'TenQuality\\WP\\' => 
        array (
            0 => __DIR__ . '/..' . '/10quality/wp-file/src',
        ),
        'PostGallery\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'Ayuco\\' => 
        array (
            0 => __DIR__ . '/..' . '/10quality/ayuco/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
    );

    public static $classMap = array (
        'WPMVC\\KLogger\\Logger' => __DIR__ . '/..' . '/10quality/wpmvc-logger/src/Logger.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit57201e6dd953a388c6d7457b6403589e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57201e6dd953a388c6d7457b6403589e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit57201e6dd953a388c6d7457b6403589e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit57201e6dd953a388c6d7457b6403589e::$classMap;

        }, null, ClassLoader::class);
    }
}
