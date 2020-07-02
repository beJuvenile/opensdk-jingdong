<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class BizAfterSaleWareReturnJdCompQueryRequest implements Request
{

    private $jdOrderId; //

    private $skuId; //

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'biz.afterSale.wareReturnJdComp.query';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode(['param'=>$this->apiParas]);
	}
	
	public function check(){}

    /**
     * @return string
     */
    public function getJdOrderId()
    {
        return $this->jdOrderId;
    }

    /**
     * @param string $jdOrderId
     */
    public function setJdOrderId($jdOrderId)
    {
        $this->apiParas['jdOrderId'] = $jdOrderId;
        $this->jdOrderId = $jdOrderId;
    }

    /**
     * @return string
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param string $skuId
     */
    public function setSkuId($skuId)
    {
        $this->apiParas['skuId'] = $skuId;
        $this->skuId = $skuId;
    }

}