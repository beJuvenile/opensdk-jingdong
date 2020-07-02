<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require __DIR__ . '/../vendor/autoload.php';

use OpenSDK\JingDong\Client;
use OpenSDK\JingDong\Request\BizAddressAllProvincesQueryRequest;

class BizAddressAllProvincesQueryRequestTest
{

    private $appKey;

    private $appSecret;

    private $redirectUrl;

    public function __construct()
    {
        $config = require __DIR__ . '/config.php';
        $this->appKey = $config['app_key'];
        $this->appSecret = $config['app_secret'];
        $this->redirectUrl = $config['redirect_url'];
    }

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $c->version = '1.0';
        $req = new BizAddressAllProvincesQueryRequest();
        $result = $c->execute($req, 'd411506e3a694722b75cb5296f6fd773xmtu');

        var_dump($result);
    }


}

(new BizAddressAllProvincesQueryRequestTest())();