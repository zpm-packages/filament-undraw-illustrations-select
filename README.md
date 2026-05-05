<img width="2560" height="1440" alt="undraw" src="https://github.com/user-attachments/assets/82ecc201-5074-49d6-9b8e-c095ade32743" />

# Filament Undraw (ZPMLabs)

A Filament v4 select component that lets you **search & pick** [unDraw](https://undraw.co/) illustrations with **image thumbnails** in the dropdown and in the selected value.

> PHP 8.1+, Filament Forms 4.x.

---

## Install

```bash
composer require zpmlabs/filament-undraw
```

## Filament theme setup

If your Filament panel uses a custom Tailwind theme, add the package `src` path to your theme file so Tailwind can see the configurable utility classes used by the field:

```css
@source '../../../../vendor/zpmlabs/filament-undraw/src/**/*';
```

This is needed because the field component stores configurable utility classes like `w-24 h-24` and `w-40 h-40` inside PHP strings.

After adding the source, rebuild your assets:

```bash
npm run build
```

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

*** Since this is a select component, you can use other chaining methods, but keep in mind, this one has a custom view with custom styles and same official  component. ***

## Expanding Undraw Usage

In case you want to expand this in some other field or custom component you can check the [base php package](https://github.com/ZPMLabs/undraw-php) for undraw.
