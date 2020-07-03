<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;

class JdKeplerItemQuerybigfieldconvertskuRequest implements Request
{
    private $sku; // 单个sku 商品id

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.item.querybigfieldconvertsku';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
        RequestCheckUtil::checkNotNull($this->sku, 'sku');
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->apiParas['sku'] = $sku;
    }

    public function getSku()
    {
        return $this->sku;
    }


}
