<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit030829350eae65c649c4465ace377234
{
    public static $files = array (
        '21b7ef5642bcb586f0b4469e3d52089a' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        '5439ca012ec1784bff6ec69fa783720b' => __DIR__ . '/../..' . '/app/router/router.php',
        '68771a30b407f6639a14bbee31ccd2bf' => __DIR__ . '/../..' . '/app/core/controller.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit030829350eae65c649c4465ace377234::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit030829350eae65c649c4465ace377234::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit030829350eae65c649c4465ace377234::$classMap;

        }, null, ClassLoader::class);
    }
}
