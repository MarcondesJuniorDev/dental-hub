<?php

namespace App\Filament\Resources\Professionals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ProfessionalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nome')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('specialty')
                    ->label('Especialidade')
                    ->searchable()
                    ->wrap()
                    ->width('250px'),

                TextColumn::make('document_number')
                    ->label('Registro')
                    ->searchable()
                    ->badge()
                    ->color('info')
                    ->toggleable(),

                TextColumn::make('phone')
                    ->label('Telefone')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Cadastrado em')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make()->label('Lixeira'),
            ])
            ->recordActions([
                EditAction::make()->label('Editar'),
                DeleteAction::make()->label('Excluir'),
                RestoreAction::make()->label('Restaurar'),
                ForceDeleteAction::make()->label('Excluir Definitivamente'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->label('Excluir Selecionados'),
                    RestoreBulkAction::make()->label('Restaurar Selecionados'),
                    ForceDeleteBulkAction::make()->label('Excluir Definitivamente'),
                ])->label('Ações em Massa'),
            ])
            ->emptyStateHeading('Nenhum profissional cadastrado');
    }
}
