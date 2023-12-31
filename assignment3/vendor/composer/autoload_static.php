<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite696a8bbc889e8a1a851dc7160b49e30
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite696a8bbc889e8a1a851dc7160b49e30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite696a8bbc889e8a1a851dc7160b49e30::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite696a8bbc889e8a1a851dc7160b49e30::$classMap;

        }, null, ClassLoader::class);
    }
}
