<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

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
