<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8974ed53003b7a868f97a1d5f40de395
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vxize\\Lavx\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vxize\\Lavx\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8974ed53003b7a868f97a1d5f40de395::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8974ed53003b7a868f97a1d5f40de395::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8974ed53003b7a868f97a1d5f40de395::$classMap;

        }, null, ClassLoader::class);
    }
}
