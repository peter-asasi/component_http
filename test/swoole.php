<?php
/**
 * 使用 Swoole 请求示例
 * Swoole 和 Curl的用法基本相同，都可以用 HttpRequest 和 PSR-7 来构建请求，唯一不同的请看 psr7Ex.php 中的扩展参数。
 */

require dirname(__DIR__) . '/vendor/autoload.php';

use by\component\http\ByHttp;
use by\component\http\HttpRequest;

// 设置默认请求处理器为 Swoole
ByHttp::setDefaultHandler('by\component\http\ByHttp\Handler\Swoole'); // php 5.4
// ByHttp::setDefaultHandler(\by\component\http\ByHttp\Handler\Swoole::class); // php 5.5+

// Swoole 处理器必须在协程中调用
go('test');

function test()
{
	$http = new HttpRequest;
	$response = $http->get('http://www.baidu.com');
	echo 'html:', PHP_EOL, $response->body();
}