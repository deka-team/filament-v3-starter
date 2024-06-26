<?php
return [
    'datetime_format' => 'd/m/Y H:i:s',
    'date_format' => 'd/m/Y',

    // 'activity_resource' => \Z3d0X\FilamentLogger\Resources\ActivityResource::class,
    'activity_resource' => \App\Filament\Resources\ActivityResource::class,
    'save_old_value' => true, // set to false if you don't want to save old values

    'resources' => [
        'enabled' => true,
        'log_name' => 'Resource',
        // 'logger' => \Z3d0X\FilamentLogger\Loggers\ResourceLogger::class,
        'logger' => \App\Loggers\ResourceLogger::class,
        'color' => 'success',
        'exclude' => [
            //App\Filament\Resources\UserResource::class,
        ],
    ],

    'access' => [
        'enabled' => true,
        'logger' => \Z3d0X\FilamentLogger\Loggers\AccessLogger::class,
        'color' => 'danger',
        'log_name' => 'Access',
    ],

    'notifications' => [
        'enabled' => true,
        'logger' => \Z3d0X\FilamentLogger\Loggers\NotificationLogger::class,
        'color' => null,
        'log_name' => 'Notification',
    ],

    'models' => [
        'enabled' => true,
        'log_name' => 'Model',
        'color' => 'warning',
        // 'logger' => \Z3d0X\FilamentLogger\Loggers\ModelLogger::class,
        'logger' => \App\Loggers\ModelLogger::class,
        'register' => [
            //App\Models\User::class,
        ],
    ],

    'custom' => [
        // [
        //     'log_name' => 'Custom',
        //     'color' => 'primary',
        // ]
    ],
];
