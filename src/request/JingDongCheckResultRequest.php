<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class JingDongCheckResultRequest implements Request
{
    private $orderId;

    private $isSuccess;

    private $failedCode;

    private $failedMsg;

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jingdong.checkResult';
	}
	
	public function getApiParas()
    {
	    if (!$this->apiParas)
	        return '{}';

        return json_encode($this->apiParas);
	}
	
	public function check(){}

	public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        $this->apiParas['orderId'] = $orderId;
	}

	public function getOrderId()
    {
        return $this->orderId;
	}

	public function setIsSuccess($isSuccess)
    {
		$this->isSuccess = $isSuccess;
		$this->apiParas['isSuccess'] = $isSuccess;
	}

	public function getIsSuccess()
    {
        return $this->isSuccess;
	}

	public function setFailedCode($failedCode)
    {
        $this->failedCode = $failedCode;
        $this->apiParas['failedCode'] = $failedCode;
	}

	public function getFailedCode()
    {
        return $this->failedCode;
	}

	public function setFailedMsg($failedMsg)
    {
        $this->failedMsg = $failedMsg;
        $this->apiParas['failedMsg'] = $failedMsg;
	}

	public function getFailedMsg()
    {
        return $this->failedMsg;
	}
}