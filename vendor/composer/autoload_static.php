<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f5e24207b6aeab36f71497173e90dab
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
            0 => __DIR__ . '/../..' . '/scripts',
            1 => __DIR__ . '/../..' . '/scripts/db',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f5e24207b6aeab36f71497173e90dab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f5e24207b6aeab36f71497173e90dab::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2f5e24207b6aeab36f71497173e90dab::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2f5e24207b6aeab36f71497173e90dab::$classMap;

        }, null, ClassLoader::class);
    }
}