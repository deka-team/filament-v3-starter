<?php

namespace App\Filament\Resources;

class ActivityResource extends \Z3d0X\FilamentLogger\Resources\ActivityResource
{
    protected static ?string $slug = '/pengaturan/activity';

    protected static ?string $navigationGroup = 'Pengaturan';

    protected static ?string $pluralModelLabel = 'Activity';

    protected static ?string $tenantRelationshipName = 'activity';

    public static function getNavigationGroup(): ?string
    {
        return self::$navigationGroup;
    }

    public static function getNavigationLabel(): string
    {
        return self::$pluralModelLabel;
    }
}
