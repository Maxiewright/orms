<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Events\UserCreated;
use App\Filament\Resources\UserResource;
use App\Filament\Traits\RedirectToIndex;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    use RedirectToIndex;

    protected static string $resource = UserResource::class;

    protected function afterCreate(): void
    {
        UserCreated::dispatch($this->record);
    }
}
