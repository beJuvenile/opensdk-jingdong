<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class BizInvoiceQueryRequest implements Request
{
    private $markId; // 申请发票的唯一id标识

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'biz.invoice.query';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check(){}

    public function setMarkId($markId)
    {
        $this->markId = $markId;
        $this->apiParas['markId'] = $markId;
    }

    public function getMarkId()
    {
        return $this->apiParas['markId'];
    }
}