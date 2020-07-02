<?php
/**
 * 京东用户access_token
 *
 * @link https://open.jd.com/home/home#/doc/common?listId=717
 */

namespace OpenSDK\JingDong\Request\Oauth2;


use OpenSDK\JingDong\Libs\Http;

class JingDongOauthAccessTokenRequest
{

    public $gateway = 'https://open-oauth.jd.com/oauth2/access_token';

    public $appKey; // 应用标识

    public $appSecret; // 应用密钥

    public $grantType = 'authorization_code'; // 固定为authorization_code

    public $code; //


    public function exec()
    {
        $query = [];
        $query['app_key'] = $this->appKey;
        $query['app_secret'] = $this->appSecret;
        $query['grant_type'] = $this->grantType;
        $query['code'] = $this->code;

        return @json_decode(Http::get($this->gateway, $query), true);
    }

}