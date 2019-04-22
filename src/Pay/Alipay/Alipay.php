<?php

namespace SW\Pay\Alipay;

class Alipay
{

    private $config;

    public function __construct(array $info)
    {
        $this->config = [
            //APPID
            'app_id' => $info['app_id'],
            //商户私钥
            'merchant_private_key' => $info['merchant_private_key'],
            //异步通知地址
            'notify_url'=>$info['notify_url'],
            //同步跳转
            'return_url'=>$info['return_url'],
            //编码格式
            'charset'=>$info['charset'],
            //签名方式
            'sign_type'=>$info['sign_type'],
            //支付宝网关
            'gatewayUrl'=>$info['gatewayUrl'],
            //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
            'alipay_public_key'=>$info['alipay_public_key']
        ];
    }

}