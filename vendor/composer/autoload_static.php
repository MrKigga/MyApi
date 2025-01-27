<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit452fe6fadb3461b4cc1a34f086689957
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hajiphp\\Myapi\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hajiphp\\Myapi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit452fe6fadb3461b4cc1a34f086689957::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit452fe6fadb3461b4cc1a34f086689957::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit452fe6fadb3461b4cc1a34f086689957::$classMap;

        }, null, ClassLoader::class);
    }
}
