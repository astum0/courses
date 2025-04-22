<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{

    protected static ?string $modelLabel = 'Категория';
    protected static ?string $pluralModelLabel = 'Категории';
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('')->schema([
                        TextInput::make('title')
                            ->label('Название категории')
                            ->placeholder('Frontend, Backend, ...')
                            ->required(),
                        Textarea::make('description')
                            ->label('Описание категории')
                            ->placeholder('Frontend разработка представляет из себя...')
                            ->maxLength(120)
                            ->required(),
                    ]),
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make()->schema([
                        TextInput::make('languages')
                            ->label('Языки программирования')
                            ->placeholder('CSS, JavaScript ...')
                            ->maxLength(35)
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Активная категория')
                            ->default(true)
                    ])
                ])->columnSpan(1)
            ])->columns(3);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
