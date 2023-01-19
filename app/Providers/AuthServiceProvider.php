<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Models\User;
use App\Models\Product;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Check if the user is admin before checking other gates
        Gate::before(function () {
            if(auth()->user()->role == 'admin') {
                return true;
            }
        });

        // Define a gate to authorize users to update a product
        Gate::define('modify-product', function(User $user, Product $product) {
            return $user->id === $product->user_id;
        });


        // Define a gate to authorize users to search for products
        Gate::define('search-product', function(User $user) {
            return $user->id === auth()->user()->id;
        });


        // Define a gate to access user dashboard
        Gate::define('access-user-dashboard', function(User $user) {
            return $user->id === auth()->user()->id;
        });
    }
}
