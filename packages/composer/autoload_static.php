<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb190f00f3b3438a972e45988fdc28f45
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kirki\\Settings\\' => 15,
            'Kirki\\Modules\\Postmessage\\' => 26,
            'Kirki\\Modules\\Loading\\' => 22,
            'Kirki\\Modules\\Editor_Styles\\' => 28,
            'Kirki\\Modules\\CSS\\' => 18,
            'Kirki\\Module\\' => 13,
            'Kirki\\Field\\' => 12,
            'Kirki\\Core\\' => 11,
            'Kirki\\Control\\' => 14,
            'Kirki\\Compatibility\\' => 20,
            'Kirki\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kirki\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/kirki-framework/control-repeater/src/Settings',
        ),
        'Kirki\\Modules\\Postmessage\\' => 
        array (
            0 => __DIR__ . '/..' . '/kirki-framework/module-postmessage/src',
        ),
        'Kirki\\Modules\\Loading\\' => 
        array (
            0 => __DIR__ . '/..' . '/kirki-framework/module-loading/src',
        ),
        'Kirki\\Modules\\Editor_Styles\\' => 
        array (
            0 => __DIR__ . '/..' . '/kirki-framework/module-editor-styles/src',
        ),
        'Kirki\\Modules\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/kirki-framework/module-css/src',
        ),
        'Kirki\\Module\\' => 
        array (
            0 => __DIR__ . '/..' . '/kirki-framework/module-css-vars/src',
            1 => __DIR__ . '/..' . '/kirki-framework/module-custom-sections/src',
            2 => __DIR__ . '/..' . '/kirki-framework/module-field-dependencies/src',
            3 => __DIR__ . '/..' . '/kirki-framework/module-preset/src',
            4 => __DIR__ . '/..' . '/kirki-framework/module-section-icons/src',
            5 => __DIR__ . '/..' . '/kirki-framework/module-selective-refresh/src',
            6 => __DIR__ . '/..' . '/kirki-framework/module-tooltips/src',
            7 => __DIR__ . '/..' . '/kirki-framework/module-webfonts/src',
        ),
        'Kirki\\Field\\' => 
        array (
            0 => __DIR__ . '/..' . '/kirki-framework/control-background/src/Field',
            1 => __DIR__ . '/..' . '/kirki-framework/control-checkbox/src/Field',
            2 => __DIR__ . '/..' . '/kirki-framework/control-code/src/Field',
            3 => __DIR__ . '/..' . '/kirki-framework/control-color/src/Field',
            4 => __DIR__ . '/..' . '/kirki-framework/control-color-palette/src/Field',
            5 => __DIR__ . '/..' . '/kirki-framework/control-custom/src/Field',
            6 => __DIR__ . '/..' . '/kirki-framework/control-dashicons/src/Field',
            7 => __DIR__ . '/..' . '/kirki-framework/control-date/src/Field',
            8 => __DIR__ . '/..' . '/kirki-framework/control-dimension/src/Field',
            9 => __DIR__ . '/..' . '/kirki-framework/control-editor/src/Field',
            10 => __DIR__ . '/..' . '/kirki-framework/control-fontawesome/src/Field',
            11 => __DIR__ . '/..' . '/kirki-framework/control-generic/src/Field',
            12 => __DIR__ . '/..' . '/kirki-framework/control-image/src/Field',
            13 => __DIR__ . '/..' . '/kirki-framework/control-multicheck/src/Field',
            14 => __DIR__ . '/..' . '/kirki-framework/control-palette/src/Field',
            15 => __DIR__ . '/..' . '/kirki-framework/control-radio/src/Field',
            16 => __DIR__ . '/..' . '/kirki-framework/control-repeater/src/Field',
            17 => __DIR__ . '/..' . '/kirki-framework/control-select/src/Field',
            18 => __DIR__ . '/..' . '/kirki-framework/control-slider/src/Field',
            19 => __DIR__ . '/..' . '/kirki-framework/control-sortable/src/Field',
            20 => __DIR__ . '/..' . '/kirki-framework/control-upload/src/Field',
            21 => __DIR__ . '/..' . '/kirki-framework/field-dimensions/src/Field',
            22 => __DIR__ . '/..' . '/kirki-framework/field-multicolor/src/Field',
            23 => __DIR__ . '/..' . '/kirki-framework/field-typography/src/Field',
        ),
        'Kirki\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/kirki-framework/control-color-palette/src/Core',
            1 => __DIR__ . '/..' . '/kirki-framework/control-dashicons/src/Core',
            2 => __DIR__ . '/..' . '/kirki-framework/core/src',
        ),
        'Kirki\\Control\\' => 
        array (
            0 => __DIR__ . '/..' . '/kirki-framework/control-background/src/Control',
            1 => __DIR__ . '/..' . '/kirki-framework/control-base/src/Control',
            2 => __DIR__ . '/..' . '/kirki-framework/control-checkbox/src/Control',
            3 => __DIR__ . '/..' . '/kirki-framework/control-code/src/Control',
            4 => __DIR__ . '/..' . '/kirki-framework/control-color/src/Control',
            5 => __DIR__ . '/..' . '/kirki-framework/control-color-palette/src/Control',
            6 => __DIR__ . '/..' . '/kirki-framework/control-cropped-image/src',
            7 => __DIR__ . '/..' . '/kirki-framework/control-custom/src/Control',
            8 => __DIR__ . '/..' . '/kirki-framework/control-dashicons/src/Control',
            9 => __DIR__ . '/..' . '/kirki-framework/control-date/src/Control',
            10 => __DIR__ . '/..' . '/kirki-framework/control-dimension/src/Control',
            11 => __DIR__ . '/..' . '/kirki-framework/control-editor/src/Control',
            12 => __DIR__ . '/..' . '/kirki-framework/control-fontawesome/src/Control',
            13 => __DIR__ . '/..' . '/kirki-framework/control-generic/src/Control',
            14 => __DIR__ . '/..' . '/kirki-framework/control-image/src/Control',
            15 => __DIR__ . '/..' . '/kirki-framework/control-multicheck/src/Control',
            16 => __DIR__ . '/..' . '/kirki-framework/control-palette/src/Control',
            17 => __DIR__ . '/..' . '/kirki-framework/control-radio/src/Control',
            18 => __DIR__ . '/..' . '/kirki-framework/control-repeater/src/Control',
            19 => __DIR__ . '/..' . '/kirki-framework/control-select/src/Control',
            20 => __DIR__ . '/..' . '/kirki-framework/control-slider/src/Control',
            21 => __DIR__ . '/..' . '/kirki-framework/control-sortable/src/Control',
            22 => __DIR__ . '/..' . '/kirki-framework/control-upload/src/Control',
            23 => __DIR__ . '/..' . '/kirki-framework/field-multicolor/src/Control',
            24 => __DIR__ . '/..' . '/kirki-framework/field-typography/src/Control',
        ),
        'Kirki\\Compatibility\\' => 
        array (
            0 => __DIR__ . '/..' . '/kirki-framework/compatibility/src',
        ),
        'Kirki\\' => 
        array (
            0 => __DIR__ . '/..' . '/kirki-framework/field/src',
            1 => __DIR__ . '/..' . '/kirki-framework/googlefonts/src',
            2 => __DIR__ . '/..' . '/kirki-framework/url-getter/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb190f00f3b3438a972e45988fdc28f45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb190f00f3b3438a972e45988fdc28f45::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
