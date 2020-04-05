<?php

namespace App\Providers;

use Bambamboole\LaravelCms\Frontend\Routing\FrontendRouter;
use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    public function boot(FrontendRouter $router)
    {
        $router->registerPagesRoutes();
        $router->registerPostsRoutes();
    }
}
