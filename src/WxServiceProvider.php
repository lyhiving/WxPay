<?php
/**
 * ------------------
 *  微信支付provider
 * ------------------
 *
 * User: liangqi
 * Date: 2016/10/8
 * Time: 下午5:03
 */

namespace WxPay;


use Illuminate\Support\ServiceProvider;



class WxServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('wxPay.php'),
        ]);
    }

    public function register()
    {
        // TODO: Implement register() method.
    }
}