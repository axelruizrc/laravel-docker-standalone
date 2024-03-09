<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CostumersResource\Pages;
use App\Filament\Resources\CostumersResource\RelationManagers;
use App\Models\Costumer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CostumersResource extends Resource
{
    protected static ?string $model = Costumer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $costumerId = request()->route('record');

        $costumer = Costumer::with('devices')->find($costumerId);

        return $form
            ->schema([
                TextInput::make('name')->label('Customer Name')->default($costumer->name ?? ''),
                TextInput::make('level')->label('Level')->default($costumer->level ?? ''),
                TextInput::make('address')->label('Address')->default($costumer->address ?? ''),
            ]);
    }

    public static function table(Table $table): Table
    {

        $var = $table
        ->query(Costumer::query())
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('level'),
                TextColumn::make('address'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);

            return $var;
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
            'index' => Pages\ListCostumers::route('/'),
            'create' => Pages\CreateCostumers::route('/create'),
            'edit' => Pages\EditCostumers::route('/{record}/edit'),
        ];
    }
}
