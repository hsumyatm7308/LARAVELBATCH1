<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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
        // view()->composer('*',function($view){
        //      $getyear = date("Y");  //2023
        //      $gettoday = date("d/M/Y"); //17/jun/2023
        //      $view->with('getyear',$getyear)->with('gettoday',$gettoday);
        // });

          View::composer('*',function($view){
             $getyear = date("Y");  //2023
             $gettoday = date("d/M/Y"); //17/jun/2023
             $view->with('getyear',$getyear)->with('gettoday',$gettoday);
        });


        View::composer('employees.index',function($view){
           
        });



    }
}
