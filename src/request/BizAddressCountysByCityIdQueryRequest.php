<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class BizAddressCountysByCityIdQueryRequest implements Request
{

    private $id; // 市id

	private $apiParas = [];
	
	public function getApiMethodName()
    {
	  return 'biz.address.countysByCityId.query';
	}

    public function setId($val)
    {
        $this->id = $val;
        $this->apiParas['id'] = $val;
    }

    public function getId()
    {
        return $this->id;
    }
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check(){}

}