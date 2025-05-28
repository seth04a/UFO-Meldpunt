<?php

namespace App\Filament\Resources\PostCreatorResource\Pages;

use App\Filament\Resources\PostCreatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPostCreators extends ListRecords
{
    protected static string $resource = PostCreatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
