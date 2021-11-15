<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite03e445717c2d3490b2e4faba62366f3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite03e445717c2d3490b2e4faba62366f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite03e445717c2d3490b2e4faba62366f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite03e445717c2d3490b2e4faba62366f3::$classMap;

        }, null, ClassLoader::class);
    }
}