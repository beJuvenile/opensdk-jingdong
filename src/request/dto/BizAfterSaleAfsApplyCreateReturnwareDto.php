<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=576&apiId=3928&apiName=biz.afterSale.afsApply.create
 */
namespace OpenSDK\JingDong\Request\Dto;

use OpenSDK\JingDong\Interfaces\Dto;

class BizAfterSaleAfsApplyCreateReturnwareDto implements Dto
{

    private $type; // 返件方式 自营配送(10),第三方配送(20);换、修这两种情况必填（默认值）

    private $province; // 返件省 换、修这两种情况必填

    private $city; // 返件市

    private $county; // 返件县

    private $village; // 返件乡镇

    private $address; // 返件街道地址 换、修这两种情况必填

    private $params;


    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->params['returnwareType'] = $type;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param mixed $province
     */
    public function setProvince($province)
    {
        $this->params['returnwareProvince'] = $province;
        $this->province = $province;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->params['returnwareCity'] = $city;
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param mixed $county
     */
    public function setCounty($county)
    {
        $this->params['returnwareCounty'] = $county;
        $this->county = $county;
    }

    /**
     * @return mixed
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * @param mixed $village
     */
    public function setVillage($village)
    {
        $this->params['returnwareVillage'] = $village;
        $this->village = $village;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->params['returnwareAddress'] = $address;
        $this->address = $address;
    }
}