<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=576&apiId=3928&apiName=biz.afterSale.afsApply.create
 */
namespace OpenSDK\JingDong\Request\Dto;


use OpenSDK\JingDong\Interfaces\Dto;

class BizAfterSaleAfsApplyCreatePickwareDto implements Dto
{

    private $type; // 取件方式 4 上门取件 7 客户送货 40客户发货

    private $province; // 取件省

    private $city; // 取件市

    private $county; // 取件县

    private $village; // 取件乡镇

    private $address; // 取件详细地址

    private $params;


    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param integer $type
     */
    public function setType($type)
    {
        $this->params['pickwareType'] = $type;
        $this->type = $type;
    }

    /**
     * @return integer
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param integer $province
     */
    public function setProvince($province)
    {
        $this->params['pickwareProvince'] = $province;
        $this->province = $province;
    }

    /**
     * @return integer
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param integer $city
     */
    public function setCity($city)
    {
        $this->params['pickwareCity'] = $city;
        $this->city = $city;
    }

    /**
     * @return integer
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param integer $county
     */
    public function setCounty($county)
    {
        $this->params['pickwareCounty'] = $county;
        $this->county = $county;
    }

    /**
     * @return integer
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * @param integer $village
     */
    public function setVillage($village)
    {
        $this->params['pickwareVillage'] = $village;
        $this->village = $village;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->params['pickwareAddress'] = $address;
        $this->address = $address;
    }
}