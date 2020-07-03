<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;

class JdKeplerSkuProductServiceRequest implements Request
{
    private $skuIdSet; // 商品编号

    private $extFieldSet; // 查询商品特殊属性

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.sku.ProductService';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
		RequestCheckUtil::checkNotNull($this->skuIdSet, 'skuIdSet');
		RequestCheckUtil::checkNotNull($this->extFieldSet, 'extFieldSet');
	}

    public function setSkuIdSet($skuIdSet)
    {
        $this->skuIdSet = $skuIdSet;
        $this->apiParas['skuIdSet'] = $skuIdSet;
    }

    public function getSkuIdSet()
    {
        return $this->skuIdSet;
    }

    public function setExtFieldSet($extFieldSet)
    {
        $this->extFieldSet = $extFieldSet;
        $this->apiParas['extFieldSet'] = $extFieldSet;
    }

    public function getExtFieldSet()
    {
        return $this->extFieldSet;
    }


}
