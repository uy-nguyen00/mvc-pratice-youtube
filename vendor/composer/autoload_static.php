<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11b0197233df07d2447ddc064655f4ac
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11b0197233df07d2447ddc064655f4ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11b0197233df07d2447ddc064655f4ac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11b0197233df07d2447ddc064655f4ac::$classMap;

        }, null, ClassLoader::class);
    }
}
