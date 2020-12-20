<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb916df849950f88268123bdf02e83e03
{
    public static $classMap = array (
        'App\\Controller\\Article' => __DIR__ . '/../..' . '/app/controller/article.php',
        'App\\Controller\\Contact' => __DIR__ . '/../..' . '/app/controller/contact.php',
        'App\\core\\App' => __DIR__ . '/../..' . '/core/app.php',
        'App\\core\\Request' => __DIR__ . '/../..' . '/core/request.php',
        'App\\core\\Router' => __DIR__ . '/../..' . '/core/router.php',
        'ComposerAutoloaderInitb916df849950f88268123bdf02e83e03' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitb916df849950f88268123bdf02e83e03' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'Query' => __DIR__ . '/../..' . '/core/database/query.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb916df849950f88268123bdf02e83e03::$classMap;

        }, null, ClassLoader::class);
    }
}