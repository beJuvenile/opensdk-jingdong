<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;

class JdKeplerServicePromotionGoodsinfoRequest implements Request
{
    private  $skuIds;

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.service.promotion.goodsinfo';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
        RequestCheckUtil::checkNotNull($this->skuIds, 'skuIds');
	}

    public function setSkuIds($skuIds)
    {
        $this->skuIds = $skuIds;
        $this->apiParas['skuIds'] = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->skuIds;
    }


}
