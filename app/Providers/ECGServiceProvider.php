<?php

namespace App\Providers;

use App\ECG\ECG;
use App\ECG\ECGInterface;
use Illuminate\Support\ServiceProvider;

class ECGServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ECGInterface::class, ECG::class);
    }

    public function boot()
    {
        //
    }
}