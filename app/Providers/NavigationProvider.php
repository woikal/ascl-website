<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class NavigationProvider extends ServiceProvider
{
    private static array $topMenu = [
        0 => [
            'target' => 'home',
            'label'  => 'Airsoft',
        ],
        1 => [
            'target'   => 'home',
            'label'    => 'Airsoft',
            'subitems' => [],
        ],
        2 => ['target' => 'home'],
        3 => ['target' => 'home'],
    ];

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
    }

}
