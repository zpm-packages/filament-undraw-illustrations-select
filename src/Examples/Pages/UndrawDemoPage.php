<?php

namespace ZPMLabs\FilamentUndraw\Examples\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use ZPMLabs\FilamentUndraw\Forms\Components\UndrawSelect;

/**
 * @property Schema $content
 */
class UndrawDemoPage extends Page
{
    protected string $view = 'filament-undraw::examples.pages.undraw-demo-page';

    protected static string | BackedEnum | null $navigationIcon = null;

    protected static ?string $navigationLabel = 'Undraw Demo';

    protected static ?string $title = 'Filament Undraw Demo';

    protected static bool $shouldRegisterNavigation = true;

    protected static string $routePath = 'undraw-demo';

    /**
     * @var array<string, string|null>
     */
    public array $data = [];

    public function mount(): void
    {
        $this->data = [
            'hero_illustration' => null,
            'compact_illustration' => null,
        ];
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->statePath('data')
            ->columns(1)
            ->components([
                Section::make('Ready-to-use examples')
                    ->description('Use the larger preset for hero sections and the compact preset for cards, empty states, and side panels.')
                    ->schema([
                        UndrawSelect::make('hero_illustration')
                            ->label('Hero illustration')
                            ->live()
                            ->hint('Search by workflow, product area, or mood.'),
                        UndrawSelect::make('compact_illustration')
                            ->label('Compact illustration')
                            ->searchResultSize('w-24 h-24')
                            ->selectedOptionSize('w-24 h-24')
                            ->limit(12)
                            ->live()
                            ->hint('Smaller result cards for tighter layouts.'),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}