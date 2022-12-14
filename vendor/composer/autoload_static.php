<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit035a9822fd4ebb0d1a0113d676a10272
{
    public static $files = array (
        '0b015b3f5985995fe34e0bb1b2bda31f' => __DIR__ . '/../..' . '/Core/confiq.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit035a9822fd4ebb0d1a0113d676a10272::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit035a9822fd4ebb0d1a0113d676a10272::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit035a9822fd4ebb0d1a0113d676a10272::$classMap;

        }, null, ClassLoader::class);
    }
}
