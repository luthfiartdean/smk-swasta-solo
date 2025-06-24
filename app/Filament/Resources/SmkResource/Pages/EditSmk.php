<?php

namespace App\Filament\Resources\SmkResource\Pages;

use App\Filament\Resources\SmkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmk extends EditRecord
{
    protected static string $resource = SmkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
