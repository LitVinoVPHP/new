<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a8654a36f3ae150c84a4fd3feabd528
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a8654a36f3ae150c84a4fd3feabd528::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a8654a36f3ae150c84a4fd3feabd528::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a8654a36f3ae150c84a4fd3feabd528::$classMap;

        }, null, ClassLoader::class);
    }
}
