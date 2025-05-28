<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('category_id')
                ->label('Category')
                ->relationship('category', 'category') 
                ->searchable()
                ->required(),
                Forms\Components\DateTimePicker::make('timestamp')
                ->required(),
                Forms\Components\TextInput::make('location')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('content')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('user_id')
                ->label('Author')
                ->relationship('user', 'name')
                ->searchable()
                ->required(),

                FileUpload::make('image')
                ->label('Post Image')
                ->image()
                ->directory('posts/images') // storage path under 'public'
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->label('Title')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('category.category')
                ->label('Category')
                ->sortable(),

            Tables\Columns\TextColumn::make('timestamp')
                ->label('Published At')
                ->dateTime()
                ->sortable(),

            Tables\Columns\TextColumn::make('location')
                ->label('Location')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('user.name')
                ->label('Author')
                ->sortable(),

            Tables\Columns\ImageColumn::make('image')
                ->label('Image')
                ->disk('public') // Ensure files are accessible
                ->width(60)
                ->height(60),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
