<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\View;
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
        View::composer('*', function ($view) {
            $view->with('siteSettings', [
                'company_name' => SiteSetting::get('company_name', 'Uma Dye Chem'),
                'company_tagline' => SiteSetting::get('company_tagline', 'Pioneer Manufacturers & Exporters of Ammonium Bisulphite Since 1984'),
                'phone' => SiteSetting::get('phone', '+91-2767-255893'),
                'phone_alt' => SiteSetting::get('phone_alt', '+91-2767-253749'),
                'whatsapp_number' => SiteSetting::get('whatsapp_number', '919825012345'),
                'email' => SiteSetting::get('email', 'umadyechem.industries@gmail.com'),
                'address' => SiteSetting::get('address', 'Survey No. 1283/1291, Unjha-Unava Highway, Behind National Federation, Unava, Unjha, Mehsana, Gujarat - 384160, India'),
                'postal_address' => SiteSetting::get('postal_address', 'Post Box No. 155, Unava - Unjha Highway, Unava, Gujarat, India'),
                'working_hours' => SiteSetting::get('working_hours', 'Monday - Saturday: 9:00 AM - 6:30 PM (IST)'),
            ]);
        });
    }
}
