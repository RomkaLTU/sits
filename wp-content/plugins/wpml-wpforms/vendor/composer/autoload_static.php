<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef32d1b9e09f8f19c282f403d41c8844
{
    public static $classMap = array (
        'OTGS_Assets_Handles' => __DIR__ . '/..' . '/otgs/ui/src/php/OTGS_Assets_Handles.php',
        'OTGS_Assets_Store' => __DIR__ . '/..' . '/otgs/ui/src/php/OTGS_Assets_Store.php',
        'OTGS_UI_Assets' => __DIR__ . '/..' . '/otgs/ui/src/php/OTGS_UI_Assets.php',
        'OTGS_UI_Loader' => __DIR__ . '/..' . '/otgs/ui/src/php/OTGS_UI_Loader.php',
        'WPML\\Forms\\Hooks\\WpForms\\ConversationalForms' => __DIR__ . '/../..' . '/classes/Hooks/WpForms/ConversationalForms.php',
        'WPML\\Forms\\Hooks\\WpForms\\DynamicChoices' => __DIR__ . '/../..' . '/classes/Hooks/WpForms/DynamicChoices.php',
        'WPML\\Forms\\Hooks\\WpForms\\FormPages' => __DIR__ . '/../..' . '/classes/Hooks/WpForms/FormPages.php',
        'WPML\\Forms\\Hooks\\WpForms\\Notifications' => __DIR__ . '/../..' . '/classes/Hooks/WpForms/Notifications.php',
        'WPML\\Forms\\Hooks\\WpForms\\Package' => __DIR__ . '/../..' . '/classes/Hooks/WpForms/Package.php',
        'WPML\\Forms\\Hooks\\WpForms\\Strings' => __DIR__ . '/../..' . '/classes/Hooks/WpForms/Strings.php',
        'WPML\\Forms\\Loader\\WpForms' => __DIR__ . '/../..' . '/classes/Loader/WpForms.php',
        'WPML\\Forms\\Loader\\WpFormsStatus' => __DIR__ . '/../..' . '/classes/Loader/WpFormsStatus.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitef32d1b9e09f8f19c282f403d41c8844::$classMap;

        }, null, ClassLoader::class);
    }
}
