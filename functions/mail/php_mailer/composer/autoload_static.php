<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf393a9139c2387a93c7d2dff0cbf303
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf393a9139c2387a93c7d2dff0cbf303::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf393a9139c2387a93c7d2dff0cbf303::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}