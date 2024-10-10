<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit452fe6fadb3461b4cc1a34f086689957
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit452fe6fadb3461b4cc1a34f086689957', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit452fe6fadb3461b4cc1a34f086689957', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit452fe6fadb3461b4cc1a34f086689957::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
