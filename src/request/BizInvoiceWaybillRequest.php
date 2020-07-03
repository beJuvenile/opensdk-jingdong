<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;

class BizInvoiceWaybillRequest implements Request
{
    private $markId; // 申请发票的唯一id标识

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'biz.invoice.waybill';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
	    RequestCheckUtil::checkNotNull($this->markId, 'markId');
	}

    public function setMarkId($markId)
    {
        $this->markId = $markId;
        $this->apiParas['markId'] = $markId;
    }

    public function getMarkId()
    {
        return $this->markId;
    }
}