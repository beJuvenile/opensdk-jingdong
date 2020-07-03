<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class JingDongJosSecretApiReportGetRequest implements Request
{
    private $accessToken; // jos授权accessToken，与公共请求参数access_token相同，可以通过公共参数传入；自定义用户（自有账号）无需填写

    private $businessId; // 随机数

    private $text; // 网关来源url

    private $attribute; // attributeJson串

    private $customerUserId; // 自定义用户ID，与注册自有账号时的customer_user_id一致；jos授权用户无需填写

    private $serverUrl; // 网关请求地址

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jingdong.jos.secret.api.report.get';
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

	public function setBusinessId($businessId)
    {
		$this->businessId = $businessId;
		$this->apiParas['businessId'] = $businessId;
	}

	public function getBusinessId()
    {
        return $this->businessId;
	}

	public function setText($text)
    {
		$this->text = $text;
		$this->apiParas['text'] = $text;
	}

	public function getText()
    {
        return $this->text;
	}

	public function setAttribute($attribute)
    {
		$this->attribute = $attribute;
		$this->apiParas['attribute'] = $attribute;
	}

	public function getAttribute()
    {
        return $this->attribute;
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

	public function setServerUrl($serverUrl)
    {
		$this->serverUrl = $serverUrl;
		$this->apiParas['server_url'] = $serverUrl;
	}

	public function getServerUrl()
    {
        return $this->serverUrl;
	}

}