<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Laravel\Cashier\Cashier;

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
        Cashier::useCustomerModel(User::class);

        // PROD comment this part fort production
        \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::except([
            '*'
        ]);
    }
}
