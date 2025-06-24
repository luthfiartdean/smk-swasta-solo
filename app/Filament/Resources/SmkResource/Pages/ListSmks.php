<?php

namespace App\Filament\Resources\SmkResource\Pages;

use App\Filament\Resources\SmkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmks extends ListRecords
{
    protected static string $resource = SmkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
