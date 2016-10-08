# WxPay
laravel WeChat pay lib (laravel微信支付扩展包，基于官方php_v3版)

## 使用步骤

### 1.1 使用composer安装本扩展

```
composer require apptut/wx-pay
```

### 1.2 添加WxServiceProvider到config/app.php

```php
['providers'=>[
    '...',
    'WxPay\WxServiceProvider::class'
]]
```

### 1.3 生成配置文件

```sh
php artisan vendor:publish
```
此命令会在`config`目录下生成`wxPay.php`配置文件, 请根据自身实际情况修改相应参数即可


