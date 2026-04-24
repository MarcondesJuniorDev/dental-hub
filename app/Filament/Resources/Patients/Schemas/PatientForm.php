<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PatientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome completo')
                    ->required()
                    ->maxLength(255),

                TextInput::make('cpf')
                    ->label('CPF')
                    ->mask('999.999.999-99')
                    ->maxLength(14),

                TextInput::make('phone')
                    ->label('Telefone')
                    ->tel()
                    ->mask('(99) 99999-9999')
                    ->maxLength(15),

                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->maxLength(255),

                DatePicker::make('birth_date')
                    ->label('Data de nascimento')
                    ->native(false)
                    ->maxDate(now())
                    ->displayFormat('d/m/Y'),
            ]);
    }
}
