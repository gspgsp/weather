## 介绍
<p color="blue">获取天气类的SDK</p> 

## 安装过程

```shell
$ composer require gspgsp/weather -vvv
```
## 我们需要在 composer.json 中添加如下部分
```
"extra": {
    "laravel": {
        "providers": [
            "Overtrue\\Weather\\ServiceProvider"
        ]
    }
}

#这样一来我们 Laravel 应用安装后无需手动注册服务提供器即可使用，否则在Laravel应用里面需要在config/app.php手动添加providers
``` 

## 使用过程
### Laravel项目里使用，这个可以直接使用
```
<?php

namespace App\Http\Controllers;

use Ggsspp\Weather\Weather;

class WeatherController extends Controller
{
    //直接注入就可调用Weather类
    public function index(Weather $weather)
    {
        //通过服务名称的方式调用
        //dd(app('weather')->getWeather('天门市'));
        //通过注入的方式访问
        dd($weather->getWeather('天门市'));
    }

}
```

## 问题
1. 如果有任何的bug，请点击这里[issue tracker](https://github.com/gspgsp/weather/issues).
2. 不明白的也可以点击这里[issue tracker](https://github.com/gspgsp/weather/issues).

## 许可

MIT