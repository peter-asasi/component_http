<?php
/**
 * 使用 PSR-7 标准构建请求示例
 */
require dirname(__DIR__) . '/vendor/autoload.php';

use by\component\http\ByHttp;
use by\component\http\ByHttp\Http\Request;

$url = 'http://www.baidu.com';

// 构造方法定义：__construct($uri = null, array $headers = [], $body = '', $method = RequestMethod::GET, $version = '1.1', array $server = [], array $cookies = [], array $files = [])
$request = new Request($url);

// 发送请求并获取结果
$response = ByHttp::send($request);

var_dump($response);