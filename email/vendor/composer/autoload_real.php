<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdcf5884c95a7c98a32f8aafb87ae5870
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitdcf5884c95a7c98a32f8aafb87ae5870', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdcf5884c95a7c98a32f8aafb87ae5870', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdcf5884c95a7c98a32f8aafb87ae5870::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}