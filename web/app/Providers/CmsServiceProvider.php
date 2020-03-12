<?php

namespace App\Providers;

use Bambamboole\LaravelCms\Services\CmsRouter;
use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    public function boot(CmsRouter $router)
    {
        $router->registerPageRoutes();
        $router->registerBlogRoutes();
    }
}
