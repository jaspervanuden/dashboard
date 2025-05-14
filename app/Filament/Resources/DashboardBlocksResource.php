<?php

namespace App\Filament\Resources;

use App\Classes\Blocks;
use App\Filament\Resources\DashboardBlocksResource\Pages;
use App\Filament\Resources\DashboardBlocksResource\RelationManagers;
use App\Models\DashboardBlock;
use App\Models\DashboardBlocks;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DashboardBlocksResource extends Resource
{
    protected static ?string $model = DashboardBlock::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label('Bloknaam')
                            ->columnSpan(2),

                        Forms\Components\Select::make('block')
                            ->required()
                            ->options(Blocks::getBlocks())
                            ->label('Bloktype')
                            ->columnSpan(2),

                        Forms\Components\Select::make('width')
                            ->required()
                            ->default(1)
                            ->options([
                                1 => '1 breed (smal)',
                                2 => '2 breed (standaard)',
                                3 => '3 breed ',
                                4 => '4 breed (breed)'
                            ])
                            ->label('Breedte')

                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Naam'),

                Tables\Columns\TextColumn::make('block')
                    ->label('Type'),

                Tables\Columns\TextColumn::make('width')
                    ->badge()
                    ->label('Breedte')
                    ->formatStateUsing(fn (int $state): string => "{$state} kolommen"),

                Tables\Columns\TextColumn::make('order')
                    ->sortable()
                    ->label('Volgorde'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d-m-Y H:i')
                    ->label('Aangemaakt')
            ])
            ->filters([
                //
            ])
            ->reorderable('order')
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDashboardBlocks::route('/'),
            'create' => Pages\CreateDashboardBlocks::route('/create'),
            'edit' => Pages\EditDashboardBlocks::route('/{record}/edit'),
        ];
    }
}
