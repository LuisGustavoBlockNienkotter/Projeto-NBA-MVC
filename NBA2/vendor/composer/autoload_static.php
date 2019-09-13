<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58928fdbfc632f4a63710bf0fb7fe876
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'D' => 
        array (
            'Dto\\' => 4,
            'Dao\\' => 4,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
        'B' => 
        array (
            'Bo\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'Dto\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model/dto',
        ),
        'Dao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model/dao',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
        'Bo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model/bo',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58928fdbfc632f4a63710bf0fb7fe876::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58928fdbfc632f4a63710bf0fb7fe876::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
