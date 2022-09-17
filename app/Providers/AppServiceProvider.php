<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use \App\Ator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('ATORES');
            $event->menu->add([
                'text' => 'Listagem',
                'url' => 'atores',
                'icon' => 'fas fa-fw fa-user',
                'label' => Ator::count(),
                'label_color' => 'success',
            ]);
        });
    }
}
