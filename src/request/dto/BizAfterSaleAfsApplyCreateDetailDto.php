<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=576&apiId=3928&apiName=biz.afterSale.afsApply.create
 */
namespace OpenSDK\JingDong\Request\Dto;


use OpenSDK\JingDong\Interfaces\Dto;

class BizAfterSaleAfsApplyCreateDetailDto implements Dto
{

    private $skuId; // 商品编号

    private $skuNum; // 提交售后数量

    private $params;


    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return mixed
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param mixed $skuId
     */
    public function setSkuId($skuId)
    {
        $this->params['skuId'] = $skuId;
        $this->skuId = $skuId;
    }

    /**
     * @return mixed
     */
    public function getSkuNum()
    {
        return $this->skuNum;
    }

    /**
     * @param mixed $skuNum
     */
    public function setSkuNum($skuNum)
    {
        $this->params['skuNum'] = $skuNum;
        $this->skuNum = $skuNum;
    }
}