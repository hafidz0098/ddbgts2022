<?php

namespace App\Providers;
use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider; 
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        // URL::forceScheme('https');
        Paginator::useBootstrap();

        Gate::define('admin', function(User $user){
            return $user->is_admin;
        });

        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
    }
}
