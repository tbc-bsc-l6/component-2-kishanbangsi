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


        // Define a gate to authorize users to update a product
        Gate::define('update-product', function(User $user, Product $product) {
            return $user->id === $product->user_id ? Response::allow() : Response::deny('You are not authorized to update this product!');
        });


        // Define a gate to authorize users to delete a product
        Gate::define('delete-product', function(User $user, Product $product) {
            return $user->id === $product->user_id ? Response::allow() : Response::deny('You are not authorized to delete this product!');
        });

        
        // Define a gate to authorize users to delete a product
        Gate::define('search-product', function(User $user) {
            return $user->id === auth()->user()->id ? Response::allow() : Response::deny('You are not authorized to search!');
        });
    }
}
