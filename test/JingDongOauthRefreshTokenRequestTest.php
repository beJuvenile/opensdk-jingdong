<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require __DIR__ . '/../vendor/autoload.php';

use OpenSDK\JingDong\Request\Oauth2\JingDongOauthRefreshTokenRequest;

class JingDongOauthRefreshTokenRequestTest
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
        $c = new JingDongOauthRefreshTokenRequest();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $c->refreshToken = '56c46c42df4b42ad8c7fd5fc369b371fdzjn';
        $result = $c->exec();

        var_dump($result);
    }


}

(new JingDongOauthRefreshTokenRequestTest())();