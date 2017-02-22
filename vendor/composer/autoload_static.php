<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c5316e36347ab4007b59195947bb3ef
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'atk4\\ui\\' => 8,
            'atk4\\dsql\\' => 10,
            'atk4\\data\\' => 10,
            'atk4\\core\\' => 10,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
        'F' => 
        array (
            'Facebook\\WebDriver\\' => 19,
        ),
        'D' => 
        array (
            'Demo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'atk4\\ui\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/ui/src',
        ),
        'atk4\\dsql\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/dsql/src',
        ),
        'atk4\\data\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/data/src',
        ),
        'atk4\\core\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/core/src',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Facebook\\WebDriver\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/webdriver/lib',
        ),
        'Demo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c5316e36347ab4007b59195947bb3ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c5316e36347ab4007b59195947bb3ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
