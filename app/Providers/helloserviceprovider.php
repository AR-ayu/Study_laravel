<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Validators\hellovalidator;

class helloserviceprovider extends ServiceProvider
{
    public function boot()
    {
        
    $validator = $this->app['validator'];
    $validator->resolver(function($translator,$data,$rules,$messages) {
        return new hellovalidator($translator,$data,$rules,$messages);
    });

    }
}
