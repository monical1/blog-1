<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite08e4a74e0297caa470e77ca4443e352
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Predis\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite08e4a74e0297caa470e77ca4443e352::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite08e4a74e0297caa470e77ca4443e352::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}