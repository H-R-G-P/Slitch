<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81a99c07e48e1c19a81bb451d18a0551
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit81a99c07e48e1c19a81bb451d18a0551::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit81a99c07e48e1c19a81bb451d18a0551::$classMap;

        }, null, ClassLoader::class);
    }
}