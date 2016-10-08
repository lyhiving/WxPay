<?php
return [
    'APPID' => 'wx426b3015555a46be',
    'MCHID' => '1900009851',
    'KEY' => '8934e7d15453e97507ef794cf7b0519d',
    'APPSECRET' => '7813490da6f1265e4901ffb80afaa36f',

	'SSLCERT_PATH' => '../cert/apiclient_cert.pem',
	'SSLKEY_PATH' => '../cert/apiclient_key.pem',

    'NOTIFY_URL' => '',

	//=======【curl代理设置】===================================
	/**
     * TODO：这里设置代理机器，只有需要代理的时候才设置，不需要代理，请设置为0.0.0.0和0
     * 本例程通过curl使用HTTP POST方法，此处可修改代理服务器，
     * 默认CURL_PROXY_HOST=0.0.0.0和CURL_PROXY_PORT=0，此时不开启代理（如有需要才设置）
     * @var unknown_type
     */
	'CURL_PROXY_HOST' => "0.0.0.0",//"10.152.18.220";
	'CURL_PROXY_PORT' => 0,//8080;

	//=======【上报信息配置】===================================
	/**
     * TODO：接口调用上报等级，默认紧错误上报（注意：上报超时间为【1s】，上报无论成败【永不抛出异常】，
     * 不会影响接口调用流程），开启上报之后，方便微信监控请求调用的质量，建议至少
     * 开启错误上报。
     * 上报等级，0.关闭上报; 1.仅错误出错上报; 2.全量上报
     * @var int
     */
	'REPORT_LEVENL' => 1,
];