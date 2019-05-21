<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/3 0003
 * Time: 16:17
 */
namespace Wangyw\Fenkong;

use Illuminate\Support\ServiceProvider;

class ShuMeiProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/shumei.php' => config_path('shumei.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton('shumei', function ($app) {
            return new ShuMei($app['config']);
        });
    }

}