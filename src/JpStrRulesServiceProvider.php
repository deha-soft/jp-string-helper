<?php

namespace DehaSoft\JpStringHelper;

use DehaSoft\JpStringHelper\Rules\FullSize;
use DehaSoft\JpStringHelper\Rules\HalfSize;
use Illuminate\Support\ServiceProvider;

class JpStrRulesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('full_size', function($attribute, $value, $parameter, $validator){
            return (new FullSize())->passes($attribute, $value);
        });

        \Validator::extend('half_size', function($attribute, $value, $parameter, $validator){
            return (new HalfSize())->passes($attribute, $value);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
{

}