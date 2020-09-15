<?php
/**
 * Created by PhpStorm.
 * User: Helix
 * Date: 2020/9/15
 * Time: 14:27
 */

namespace Gspgsp\Weather;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * 标记着提供器是延迟加载的
     *
     * @var bool
     */
    protected $defer = true;

    public function register()
    {
        /**
         * 这里直接注册整个类
         */
        $this->app->singleton(Weather::class, function(){
            return new Weather(config('services.weather.key'));
        });

        /**
         * 取别名
         */
        $this->app->alias(Weather::class, 'weather');
    }

    /**
     * 添加了方法 provides，这是 Laravel 扩展包的延迟注册(https://learnku.com/docs/laravel/5.6/providers/1360#deferred-providers)方式，它不会在框架启动就注册，而是当你调用到它的时候才会注册
     *
     * @return array
     */
    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}
