<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75c75cf9d84275372ce2f2921a5fc11f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit75c75cf9d84275372ce2f2921a5fc11f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75c75cf9d84275372ce2f2921a5fc11f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
