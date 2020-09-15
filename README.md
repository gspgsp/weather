<h1 align="center"> weather </h1>

<p align="center"> A Weather SDK.</p>

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

## 提点儿意见呗

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/gspgsp/weather/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/gspgsp/weather/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## 许可

MIT