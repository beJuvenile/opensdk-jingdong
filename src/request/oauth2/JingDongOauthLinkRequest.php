<?php
/**
 * 京东用户授权
 *
 * @link https://open.jd.com/home/home#/doc/common?listId=717
 */

namespace OpenSDK\JingDong\Request\Oauth2;


class JingDongOauthLinkRequest
{

    public $gateway = 'https://open-oauth.jd.com/oauth2/to_login';

    public $appKey; // 应用标识

    public $responseType = 'code'; // 授权类型 ，值为code。

    public $redirectUri; // 回调地址,必须与开发者控制里的URL保持一致

    public $scope = 'snsapi_base'; // 应用的作用域(snsapi_base|snsapi_union_login)

    public $state; // 维持应用的状态，传入值与返回值保持一致。


    public function genUrl()
    {
        $query = [];
        $query['app_key'] = $this->appKey;
        $query['response_type'] = $this->responseType;
        $query['redirect_uri'] = $this->redirectUri;
        $query['scope'] = $this->scope;
        $this->state && $query['state'] = $this->state;

        return $this->gateway . '?' . http_build_query($query);
    }

}