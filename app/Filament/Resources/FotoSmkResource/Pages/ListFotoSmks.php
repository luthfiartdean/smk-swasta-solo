<?php

namespace App\Filament\Resources\FotoSmkResource\Pages;

use App\Filament\Resources\FotoSmkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFotoSmks extends ListRecords
{
    protected static string $resource = FotoSmkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
