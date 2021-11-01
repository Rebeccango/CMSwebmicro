<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Voyager Actions
        Voyager::addAction(\App\Actions\PreviewPromotionAction::class);
        Voyager::addAction(\App\Actions\PreviewResourceAction::class);
        Voyager::addAction(\App\Actions\PreviewPostsAction::class);
        Voyager::addAction(\App\Actions\PreviewEventsAction::class);
        Voyager::addAction(\App\Actions\PreviewLandingsAction::class);
        Voyager::addAction(\App\Actions\CloneEventsAction::class);
        Voyager::addFormField(\App\FormFields\MetaTags::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
