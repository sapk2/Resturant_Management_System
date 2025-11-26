<?php

namespace App\Filament\Resources\Bills\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;

class BillsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order_id')
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('total_amount')
                    ->numeric()->searchable()
                    ->sortable(),
                TextColumn::make('payment_type'),
                TextColumn::make('payment_status'),
                TextColumn::make('paid_at')
                    ->date()->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Filter::make('created_at')
                ->label("creation date")
                ->schema([
                    DatePicker::make("created_at")
                    ->label("select Date:")
                ])
                ->query(function($query, $data) {
                    return $query
                    ->when($data["created_at"],function($q,$data){
                        $q->whereDate("created_at",$data);
                    });
                })
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
