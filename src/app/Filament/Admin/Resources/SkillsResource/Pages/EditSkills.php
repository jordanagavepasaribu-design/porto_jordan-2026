<?php

namespace App\Filament\Admin\Resources\SkillsResource\Pages;

use App\Filament\Admin\Resources\SkillsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkills extends EditRecord
{
    protected static string $resource = SkillsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
