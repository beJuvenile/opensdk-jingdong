<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require __DIR__ . '/../vendor/autoload.php';

use OpenSDK\JingDong\Request\Oauth2\JingDongOauthAccessTokenRequest;

class JingDongOauthAccessTokenRequestTest
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
        $c = new JingDongOauthAccessTokenRequest();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $c->code = 'rSQkk9';
        $result = $c->exec();

        var_dump($result);
    }


}

(new JingDongOauthAccessTokenRequestTest())();