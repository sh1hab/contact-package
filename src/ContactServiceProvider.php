<?php
namespace Shihab\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    function boot(){
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/view','contact');
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        $this->mergeConfigFrom(__DIR__.'/config/contact.php','contact');

        $this->publishes([
            __DIR__.'/config/contact.php'=>config_path('contact.php'),
            __DIR__.'/view/contact/email.blade.php'=>config_path('email.php'),
        ]);
    }

    function register()
    {
        parent::register(); // TODO: Change the autogenerated stub
    }

}
