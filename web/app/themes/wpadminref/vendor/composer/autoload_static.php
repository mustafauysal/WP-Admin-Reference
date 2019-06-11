<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e2e9ea5b6d8d590b4ddae648e8ce9d1
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e2e9ea5b6d8d590b4ddae648e8ce9d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e2e9ea5b6d8d590b4ddae648e8ce9d1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
