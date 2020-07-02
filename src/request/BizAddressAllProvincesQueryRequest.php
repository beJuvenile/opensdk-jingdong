<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class BizAddressAllProvincesQueryRequest implements Request
{
	private $apiParas = [];
	
	public function getApiMethodName()
    {
	  return 'biz.address.allProvinces.query';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check(){}

}