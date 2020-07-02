# opensdk-jd  

#### 介绍
本类库是对京东开放平台API的封装  
接口文档请参见 [京东开放平台](https://open.jd.com)

#### 使用示例
~~~php
require 'vendor/autoload.php';

use OpenSDK\JingDong\Client;
use OpenSDK\JingDong\Request\BizAddressAllProvincesQueryRequest;

$c = new Client();
$c->appKey = $this->appKey;
$c->appSecret = $this->appSecret;
$c->version = '1.0';
$req = new BizAddressAllProvincesQueryRequest();
$result = $c->execute($req, 'd411506e3a694722b75cb5296f6fd773xmtu');

var_dump($result);
~~~
