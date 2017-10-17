<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae6e4f075778ce47a7f7105efb57ad52
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae6e4f075778ce47a7f7105efb57ad52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae6e4f075778ce47a7f7105efb57ad52::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
