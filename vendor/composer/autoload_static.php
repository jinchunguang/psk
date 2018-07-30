<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b44870bece1fad15826f7e29993ed66
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pheanstalk\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pheanstalk\\' => 
        array (
            0 => __DIR__ . '/..' . '/pda/pheanstalk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b44870bece1fad15826f7e29993ed66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b44870bece1fad15826f7e29993ed66::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}