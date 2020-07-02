<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class BizAfterSaleAvailableNumberCompQueryRequest implements Request
{

    private $jdOrderId; // 京东订单号，必需

    private $skuId; // 京东商品编号，必需

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'biz.afterSale.availableNumberComp.query';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode(['param'=>$this->apiParas]);
	}
	
	public function check(){}

    /**
     * @return int
     */
    public function getJdOrderId()
    {
        return $this->jdOrderId;
    }

    /**
     * @param int $jdOrderId
     */
    public function setJdOrderId($jdOrderId)
    {
        $this->apiParas['jdOrderId'] = $jdOrderId;
        $this->jdOrderId = $jdOrderId;
    }

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