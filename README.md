# opensdk-jd  

#### 介绍
本类库是对京东开放平台API的封装  
接口文档请参见 [京东开放平台](https://open.jd.com)

#### 使用示例
~~~php
require 'vendor/autoload.php';

use OpenSDK\PinDuoDuo\Client;
use OpenSDK\PinDuoDuo\Requests\DdkCmsPromUrlGenerateRequest;

$c = new Client();
$c->appKey = 'You are appKey';
$c->appSecret = 'You are appSecret';
$req = new DdkCmsPromUrlGenerateRequest();
$req->setWeAppWebViewShortUrl(true);
$req->setWeAppWebViewUrl(true);
$req->setPidList(['xxxx_xxxxx']);
$c->setRequest($req);
$result = $c->execute();

var_dump($result);
~~~
