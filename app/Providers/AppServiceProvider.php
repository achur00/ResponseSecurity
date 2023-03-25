<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Service_product;

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
        
        View()->composer(['Layouts.master','Layouts.productslayout','Layouts.serviceslayout'], function($view)
        {
            // $service=Page::with('Service_product')->get();
              $service=Page::all()->load(['Service_product']);
             
             

        $view->with('contact',Contact::all()->first()) 
        ->with('menu',Page::all())
        ->with('servicexr', $service)
       
        
        ;
        });
        

    }
}
