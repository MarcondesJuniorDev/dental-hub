<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PatientInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('clinic.name')
                    ->label('Clinica'),

                TextEntry::make('name')
                    ->label('Nome completo'),

                TextEntry::make('cpf')
                    ->label('CPF')
                    ->placeholder('-'),

                TextEntry::make('phone')
                    ->label('Telefone')
                    ->placeholder('-'),

                TextEntry::make('email')
                    ->label('Email')
                    ->placeholder('-'),

                TextEntry::make('birth_date')
                    ->label('Data de nascimento')
                    ->placeholder('-'),

                TextEntry::make('created_at')
                    ->label('Data de criação')
                    ->dateTime()
                    ->placeholder('-'),

                TextEntry::make('updated_at')
                    ->label('Data de atualização')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
