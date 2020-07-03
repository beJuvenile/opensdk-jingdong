<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class JdKeplerItemGetnologinpromotionRequest implements Request
{
    private $skuids; // 用“，”分割的商品sku字符串。小于100个

    private $area; // 区域编码：省_市_县

    private $venderId; // 商家id

    private $appid; // appid

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.item.getnologinpromotion';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check(){}

    public function setSkuids($skuids)
    {
        $this->skuids = $skuids;
        $this->apiParas['skuids'] = $skuids;
    }

    public function getSkuids()
    {
        return $this->skuids;
    }

    public function setArea($area)
    {
        $this->area = $area;
        $this->apiParas['area'] = $area;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setVenderId($venderId)
    {
        $this->venderId = $venderId;
        $this->apiParas['venderId'] = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    public function setAppid($appid)
    {
        $this->appid = $appid;
        $this->apiParas['appid'] = $appid;
    }

    public function getAppid()
    {
        return $this->appid;
    }

}