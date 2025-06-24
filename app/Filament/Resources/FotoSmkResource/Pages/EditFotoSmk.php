<?php

namespace App\Filament\Resources\FotoSmkResource\Pages;

use App\Filament\Resources\FotoSmkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFotoSmk extends EditRecord
{
    protected static string $resource = FotoSmkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
