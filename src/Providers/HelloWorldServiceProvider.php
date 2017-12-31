<?php

namespace Ohom\HelloWorld\Providers;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * 在注册后进行服务的启动。
     *
     * @return void
     */
    public function boot()
    {
        //扩展包 加载迁移
        $this->loadMigrationsFrom(__DIR__.'/../Migrations');

        //扩展包 加载语言
        $this->loadTranslationsFrom(__DIR__.'/../Translations', 'HelloWorld');

        //扩展包 加载路由
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        //include(__DIR__ . '/../Routes/web.php');

        //扩展包 发布
        //$this->publishes([
        //    __DIR__.'/../Config/helloworld.php' => config_path('helloworld.php'), //发布配置
        //    __DIR__.'/../Translations' => resource_path('lang/vendor/helloworld'), //发布语言
        //]);

        $value = config('helloworld');
        dump($value);
        dump( trans('HelloWorld::messages.welcome') );
        dump( trans('messages.welcome') );


        $this->app->make(\Ohom\HelloWorld\Controllers\HelloWorldController::class);

        $this->loadViewsFrom(__DIR__ . '/../Views', 'HelloWorld');
    }

    /**
     * 在容器中注册绑定。
     *
     * @return void
     */
    public function register()
    {
        //
        dump(\App::getLocale());

        //扩展包 加载配置
        $this->mergeConfigFrom(
            __DIR__.'/../Config/helloworld.php', 'helloworld'
        );
    }
}
