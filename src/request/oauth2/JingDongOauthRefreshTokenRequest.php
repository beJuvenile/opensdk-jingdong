<?php
/**
 * 京东用户access_token
 *
 * @link https://open.jd.com/home/home#/doc/common?listId=717
 */

namespace OpenSDK\JingDong\Request\Oauth2;

use OpenSDK\JingDong\Libs\Http;

class JingDongOauthRefreshTokenRequest
{

    public $gateway = 'https://open-oauth.jd.com/oauth2/refresh_token';

    public $appKey; // 应用标识

    public $appSecret; // 应用密钥

    public $grantType = 'refresh_token'; // 固定为authorization_code

    public $refreshToken; //


    public function exec()
    {
        $query = [];
        $query['app_key'] = $this->appKey;
        $query['app_secret'] = $this->appSecret;
        $query['grant_type'] = $this->grantType;
        $query['refresh_token'] = $this->refreshToken;

        return @json_decode(Http::get($this->gateway, $query), true);
    }

}