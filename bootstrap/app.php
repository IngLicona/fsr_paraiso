<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withProviders([
            App\Providers\Filament\AdminPanelProvider::class,
            App\Providers\Filament\MaestrosPanelProvider::class, 
    ])
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
        'auth.custom' => \App\Http\Middleware\Authenticate::class,
    ]);
    $middleware->alias([
    'maestro' => \App\Http\Middleware\CheckMaestro::class,
    'force.logout' => \App\Http\Middleware\ForceLogoutRedirect::class,
    ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
    
