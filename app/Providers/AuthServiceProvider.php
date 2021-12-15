<?php

namespace App\Providers;

use App\Models\Person;
use App\Models\Disorder;
use App\Policies\PersonPolicy;
use App\Policies\disordersPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
//        Person::class   => PersonPolicy::class,
//        Disorder::class => disordersPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
    }
}
