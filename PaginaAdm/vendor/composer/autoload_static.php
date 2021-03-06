<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00afad996328bf8fa5a8befdb76ec261
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Libern\\QRCodeReader\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Libern\\QRCodeReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/libern/qr-code-reader/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00afad996328bf8fa5a8befdb76ec261::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00afad996328bf8fa5a8befdb76ec261::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
