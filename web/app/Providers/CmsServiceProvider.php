<?php

namespace App\Providers;

use Oscer\Cms\Backend\ScriptHandler;
use Oscer\Cms\Backend\Sidebar\Sidebar;
use Oscer\Cms\Backend\Sidebar\SidebarItem;
use Oscer\Cms\Frontend\Routing\FrontendRouter;
use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    public function boot(FrontendRouter $router, Sidebar $sidebar, ScriptHandler $handler)
    {
        $router->registerPagesRoutes();
        $router->registerPostsRoutes();

        $handler->addScript('/js/app.js');

        $sidebar->addItem(new SidebarItem('folder', 'foobar', 'foo.bar', 'users.view'));

    }
}
