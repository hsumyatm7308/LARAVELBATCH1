<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // view()->composer(file(bal file ko share chin tar lal),function())
                                      
                                 // $parameter  data passing lote ya mar phyit loh 
        view()->composer('*',function($view){
             $getyear = date("Y");  //2023
             $view->with();
        });
    }
}
