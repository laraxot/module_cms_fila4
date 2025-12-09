<?php

declare(strict_types=1);

namespace Modules\Cms\Providers\Filament;

use Filament\Auth\Pages\EditProfile;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Modules\Cms\Filament\Pages\Themes;

class FrontPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('cms::front')
            ->path('{lang}/front')
            ->colors([
                'primary' => Color::Amber,
            ])
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
            ->discoverResources(
                in: app_path('Filament/Front/Resources'),
                for: 'App\\Filament\\Front\\Resources',
            )
            ->discoverPages(
                in: app_path('Filament/Front/Pages'),
                for: 'App\\Filament\\Front\\Pages',
            )
<<<<<<< HEAD
=======
            ->discoverResources(in: app_path('Filament/Front/Resources'), for: 'App\\Filament\\Front\\Resources')
            ->discoverPages(in: app_path('Filament/Front/Pages'), for: 'App\\Filament\\Front\\Pages')
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
            ->pages([
                //  Dashboard::class,
                // Login::class,
                Themes::class,
                EditProfile::class,
            ])
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
            ->discoverWidgets(
                in: app_path('Filament/Front/Widgets'),
                for: 'App\\Filament\\Front\\Widgets',
            )
<<<<<<< HEAD
=======
            ->discoverWidgets(in: app_path('Filament/Front/Widgets'), for: 'App\\Filament\\Front\\Widgets')
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
            ->widgets([
                // AccountWidget::class,
                // FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
