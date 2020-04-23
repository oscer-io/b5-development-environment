<?php

namespace App\Providers;

use Oscer\Cms\Frontend\Routing\FrontendRouter;
use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    public function boot(FrontendRouter $router)
    {
        $router->registerPagesRoutes();
        $router->registerPostsRoutes();
    }
}
