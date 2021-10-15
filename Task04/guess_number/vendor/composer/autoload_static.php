<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7be1a0ab238617740ebef36f6860b5c4
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'e5d8bc73fb7163837136204f5065fe9f' => __DIR__ . '/../..' . '/src/Controller.php',
        '14c9dde82ecf23571d5f4cabe6d5dea2' => __DIR__ . '/../..' . '/src/View.php',
        '07c16cef6d53c983e6ea4ad35ff27b46' => __DIR__ . '/../..' . '/src/Model.php',
        'd305124fab7d95fc2ee76c4868f8333c' => __DIR__ . '/../..' . '/src/DB.php',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit7be1a0ab238617740ebef36f6860b5c4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7be1a0ab238617740ebef36f6860b5c4::$classMap;

        }, null, ClassLoader::class);
    }
}