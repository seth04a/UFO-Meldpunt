<?php

namespace App\Filament\Resources\PostCreatorResource\Pages;

use App\Filament\Resources\PostCreatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPostCreator extends EditRecord
{
    protected static string $resource = PostCreatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
