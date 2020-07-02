<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class BizAddressCitysByProvinceIdQueryRequest implements Request
{

    private  $id; // 省份

	private $apiParas = [];
	
	public function getApiMethodName()
    {
	  return 'biz.address.citysByProvinceId.query';
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