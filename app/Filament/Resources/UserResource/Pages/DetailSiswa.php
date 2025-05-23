<?php

namespace App\Filament\Resources\SiswaResource\Pages;

use App\Filament\Resources\SiswaResource;
use Filament\Resources\Pages\ViewRecord;

class DetailSiswa extends ViewRecord
{
    
    protected static string $resource = SiswaResource::class;

    protected static string $view = 'filament.resources.user-resource.pages.detail-siswa';
    
}
