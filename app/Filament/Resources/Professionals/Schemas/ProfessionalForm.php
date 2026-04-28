<?php

namespace App\Filament\Resources\Professionals\Schemas;

use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProfessionalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Dados do Profissional')
                    ->description('Informações de contato e registro profissional.')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome Completo')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('document_number')
                            ->label('Documento (CRO / CRM)')
                            ->placeholder('Ex: CRO-SP 12345')
                            ->maxLength(255),

                        TextInput::make('specialty')
                            ->label('Especialidade')
                            ->placeholder('Ex: Ortodontia, Clínico Geral')
                            ->maxLength(255),

                        TextInput::make('phone')
                            ->label('Telefone')
                            ->tel()
                            ->mask('(99) 99999-9999')
                            ->maxLength(15),

                        TextInput::make('email')
                            ->label('E-mail')
                            ->email()
                            ->maxLength(255),
                    ])->columns(2)
            ]);
    }
}
