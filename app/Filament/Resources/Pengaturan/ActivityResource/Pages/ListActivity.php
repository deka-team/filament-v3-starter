<?php

namespace App\Filament\Resources\ActivityResource\Pages;

use App\Filament\Resources\ActivityResource;
use Croustibat\FilamentJobsMonitor\Models\QueueMonitor;
use Croustibat\FilamentJobsMonitor\Resources\QueueMonitorResource\Widgets\QueueStatsOverview;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;

class ListActivity extends ListRecords
{
    protected static string $resource = ActivityResource::class;

    public function getHeaderWidgets(): array
    {
        return [
            QueueStatsOverview::class,
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('truncate')
                ->color('danger')
                ->icon('heroicon-o-arrow-path')
                ->requiresConfirmation()
                ->action(function () {
                    QueueMonitor::truncate();

                    Notification::make()
                        ->title('Berhasil')
                        ->body('Berhasil Truncate Jobs')
                        ->success()
                        ->send();
                }),
        ];
    }
}
