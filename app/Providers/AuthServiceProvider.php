<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    protected $guards = [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
    ];

    protected $providers = [
        'admins' => [
            'driver' => 'eloquent',
            'model' => \App\Models\Admin::class, // Make sure this points to your Admin model
        ],
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
