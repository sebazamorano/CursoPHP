<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47282fd4a7da6537f699d00b9f030423
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Freshwork\\ChileanBundle\\' => 24,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Freshwork\\ChileanBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/freshwork/chilean-bundle/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47282fd4a7da6537f699d00b9f030423::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47282fd4a7da6537f699d00b9f030423::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}