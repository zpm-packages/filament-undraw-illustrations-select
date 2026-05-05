<img width="2048" height="1170" alt="image" src="https://github.com/user-attachments/assets/8afcb5b3-d8e1-4b15-8c9a-d8cc9d08b092" />

# Filament Undraw (ZPMLabs)

A Filament v5 select component that lets you search and pick [unDraw](https://undraw.co/) illustrations with image thumbnails in the dropdown and in the selected value.

> PHP 8.2+, Filament Forms 5.x.

---

## Install

```bash
composer require zpmlabs/filament-undraw
```

## Filament theme setup

If your Filament panel uses a custom Tailwind theme, add both package paths to your theme file so Tailwind can see the classes used by the package:

```css
@source '../../../../vendor/zpmlabs/filament-undraw/src/**/*';
@source '../../../../vendor/zpmlabs/filament-undraw/resources/views/**/*';
```

Both are needed for different reasons:

- `src/**/*` is required because the field component stores configurable utility classes like `w-24 h-24` and `w-40 h-40` inside PHP strings.
- `resources/views/**/*` is required because the packaged demo page view uses Tailwind classes directly in Blade.

After adding the sources, rebuild your assets:

```bash
npm run build
```

## Version support

- `main` / `v5.x` tags: Filament 5
- `v4` branch / `v4.x` tags: Filament 4

### If you want to customize the view:

```bash
php artisan vendor:publish --tag=filament-undraw-views
```

 - This will copy the blade file to `resources/views/vendor/filament-undraw/undraw-select.blade.php`.

## Usage

```php
use ZPMLabs\FilamentUndraw\Forms\Components\UndrawSelect;

UndrawSelect::make('svg_url'),
```

Since this extends Filament's `Select`, you can keep using the usual fluent methods alongside the custom thumbnail layout.

## Ready-to-use demo page

The package ships with an example Filament page you can mount directly in your panel:

```php
use CommunitySdks\UnlayerFilament\Examples\Pages\UnlayerFilamentDemoPage;
use Filament\Pages\Dashboard;
use ZPMLabs\FilamentUndraw\Examples\Pages\UndrawDemoPage;

$panel->pages([
	Dashboard::class,
	UnlayerFilamentDemoPage::class,
	UndrawDemoPage::class,
]);
```

Example field presets used on the page:

```php
use ZPMLabs\FilamentUndraw\Forms\Components\UndrawSelect;

UndrawSelect::make('hero_illustration')
	->label('Hero illustration')
	->live();

UndrawSelect::make('compact_illustration')
	->label('Compact illustration')
	->searchResultSize('w-24 h-24')
	->selectedOptionSize('w-24 h-24')
	->limit(12);
```

## Expanding Undraw Usage

In case you want to expand this in some other field or custom component you can check the [base php package](https://github.com/ZPMLabs/undraw-php) for undraw.
