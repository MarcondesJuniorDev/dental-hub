<?php

namespace App\Filament\Resources\Professionals\Schemas;

use App\Models\Professional;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProfessionalInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('clinic.name')
                    ->label('Clinic'),
                TextEntry::make('name'),
                TextEntry::make('document_number')
                    ->placeholder('-'),
                TextEntry::make('specialty')
                    ->placeholder('-'),
                TextEntry::make('phone')
                    ->placeholder('-'),
                TextEntry::make('email')
                    ->label('Email address')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Professional $record): bool => $record->trashed()),
            ]);
    }
}
