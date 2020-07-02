<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class JdBizProductGetSimilarSkuRequest implements Request
{

    private $skuId; // 京东商品编码

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.biz.product.getSimilarSku';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check(){}

    /**
     * @return int
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId($skuId)
    {
        $this->apiParas['skuId'] = $skuId;
        $this->skuId = $skuId;
    }

}