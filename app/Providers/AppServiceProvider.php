<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Chat;

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
    public function boot()
    {
        //
        $data = Chat::all();
        view()->share('chat', $data);

    }
}
