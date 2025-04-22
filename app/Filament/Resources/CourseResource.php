<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use Filament\Actions\SelectAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{

    protected static ?string $modelLabel = 'Курс';
    protected static ?string $pluralModelLabel = 'Курсы';
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('')->schema([
                        TextInput::make('title')
                            ->label('Название курса')
                            ->placeholder('Курс Python')
                            ->maxLength(30)
                            ->required(),
                        Textarea::make('description')
                            ->label('Описание курса')
                            ->maxLength(255)
                            ->placeholder('Курс по Python представляет из себя ...')
                            ->required(),
                        TextInput::make('price')
                            ->label('Цена курса')
                            ->numeric()
                            ->maxLength(6)
                            ->placeholder('799$')
                            ->required(),
                    ]),
                    Section::make()->schema([
                        FileUpload::make('image')
                        ->image()
                        ->imageEditor()
                        ->directory('courses')
                        ->label('Фотография курса')
                        ->columnSpanFull()
                        ->required(),
                    ])
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make('')->schema([
                        Select::make('category_id')
                            ->preload()
                            ->searchable()
                            ->label('Категория')
                            ->placeholder('Выберите категорию')
                            ->relationship('category', 'title')
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Активный курс')
                            ->default(true),
                        Toggle::make('is_popular')
                            ->label('Популярный курс')
                            ->default(false),
                    ]),
                ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->searchable()
                ->label('Название продукта'),
                TextColumn::make('price')
                ->label('Цена'),
                ToggleColumn::make('is_active')
                ->label('Активный курс'),
                ImageColumn::make('image')
                ->size(52)
                ->circular()
                ->label('Изображение'),
            ])
            ->filters([
                Filter::make('is_active')
                    ->label('Активные товары')
                    ->query(fn (Builder $query): Builder => $query->where('is_active', true)),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
