<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class BizAfterSaleServiceListPageQueryRequest implements Request
{
	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'biz.afterSale.serviceListPage.query';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode(['param'=>$this->apiParas]);
	}
	
	public function check(){}
	

}