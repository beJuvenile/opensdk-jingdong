<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class JingDongJosVoucherInfoGetRequest implements Request
{
    private $accessToken; // jos授权accessToken，与公共请求参数access_token相同，通过公共参数传入；自定义用户（自有账号）无需填写

    private $customerUserId; // 自定义用户ID，与注册自有账号时的customer_user_id一致；jos授权用户无需填写

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jingdong.jos.voucher.info.get';
	}
	
	public function getApiParas()
    {
	    if (!$this->apiParas)
	        return '{}';

        return json_encode($this->apiParas);
	}
	
	public function check(){}

	public function setAccessToken($accessToken)
    {
		$this->accessToken = $accessToken;
		$this->apiParas['access_token'] = $accessToken;
	}

	public function getAccessToken()
    {
        return $this->accessToken;
	}

	public function setCustomerUserId($customerUserId)
    {
		$this->customerUserId = $customerUserId;
		$this->apiParas['customer_user_id'] = $customerUserId;
	}

	public function getCustomerUserId()
    {
        return $this->customerUserId;
	}

}