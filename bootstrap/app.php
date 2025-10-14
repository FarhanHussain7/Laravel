<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\elevenPart;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\O16_SetLang;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //Global middleware
        // $middleware->append(elevenPart::class);

        // Route middleware
        $middleware->appendToGroup('middle',[
            AgeCheck::class,
            CountryCheck::class,
        ]);

        // 16 - Localization
        $middleware->appendToGroup('O16_SetLang',[
            AgeCheck::class,
            CountryCheck::class,
        ]);


    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
