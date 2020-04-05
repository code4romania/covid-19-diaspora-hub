<?php

namespace App\Providers;

use App\Http\Controllers\Api\FallbackController;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes('v1');

        Route::fallback(FallbackController::class);
    }

    /**
     * Define the versioned api routes for the application.
     *
     * @param string $version
     * @return void
     */
    protected function mapApiRoutes(string $version): void
    {
        Route::namespace($this->namespace)
            ->middleware('api')
            ->prefix("api/{$version}")
            ->name("api.{$version}.")
            ->group(base_path("routes/api/{$version}.php"));
    }
}
