<?php

namespace Idea\Uploader;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;
use Idea\Uploader\Views\Components\UploaderForm;

class UploaderService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->publishes([
            __DIR__.'/../views/assets' => public_path('vendor/idea/uploader'),
        ], 'public');
        $this->loadViewsFrom(__DIR__."/../views",'uploady');
        $this->loadViewComponentsAs('myuploader',[UploaderForm::class]);

    }
}
