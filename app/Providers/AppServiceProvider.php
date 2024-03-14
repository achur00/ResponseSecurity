<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Service_product;
use App\Models\Brochure;
use App\Models\Newsletter;

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
        
        View()->composer(['Layouts.master','Layouts.productslayout','Layouts.serviceslayout','Layouts.dashboardlayout'], function($view)
        {
            // $service=Page::with('Service_product')->get();
             $service=Page::all()->load(['Service_product']);
             $service_product=Service_product::inRandomOrder()->limit(5)->get();
             $newsletter=Newsletter::all()->first();
            //      

        $view->with('contact',Contact::all()->first()) 
        ->with('menu',Page::all())
        ->with('servicexr', $service)
        ->with('service_product', $service_product)
        ->with('newsletter',$newsletter);
        });

        // 
        View()->composer('include.brochure', function($view)
        {
            // $service=Page::with('Service_product')->get();
              $Brochure=Brochure::all()->first();
              $Appform=Brochure::where('id','=', 2)->first();
            // 
    
        $view->with('brochure', $Brochure)
               ->with('Application', $Appform);
        });
        // 
        View()->composer('include.quote', function($view)
        {
              $service_product=Service_product::all();
            // 
    
        $view->with('services', $service_product);
        });


    }
}
