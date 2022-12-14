<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3486ef6ec78158e9b684af76ac01ab2d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3486ef6ec78158e9b684af76ac01ab2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3486ef6ec78158e9b684af76ac01ab2d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3486ef6ec78158e9b684af76ac01ab2d::$classMap;

        }, null, ClassLoader::class);
    }
}
