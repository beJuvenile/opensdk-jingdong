<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=566&apiId=3788&apiName=jd.kepler.settled.aftermarket.getbackmode
 */
namespace OpenSDK\JingDong\Request\Dto;

use OpenSDK\JingDong\Interfaces\Dto;

class JdKeplerSettledAftermarketGetbackmodeBackAddrDto implements Dto
{

    private $expect; // 客户期望,退货 10, 换货 20, 维修30, 大家电安装 40, 大家电移机 50, 大家电增值服务 60, 上门维修 70, 优鲜赔90, 补发商品80;

    private $province; // 省id

    private $city; // 市id

    private $county; // 县id

    private $village; // 乡镇id

    private $detailAddress; // 详细地址

    private $params;

    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return int
     */
    public function getExpect()
    {
        return $this->expect;
    }

    /**
     * @param int $expect
     */
    public function setExpect($expect)
    {
        $this->params['expect'] = $expect;
        $this->expect = $expect;
    }

    /**
     * @return int
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param int $province
     */
    public function setProvince($province)
    {
        $this->params['province'] = $province;
        $this->province = $province;
    }

    /**
     * @return int
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param int $city
     */
    public function setCity($city)
    {
        $this->params['city'] = $city;
        $this->city = $city;
    }

    /**
     * @return int
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param int $county
     */
    public function setCounty($county)
    {
        $this->params['county'] = $county;
        $this->county = $county;
    }

    /**
     * @return int
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * @param int $village
     */
    public function setVillage($village)
    {
        $this->params['village'] = $village;
        $this->village = $village;
    }

    /**
     * @return string
     */
    public function getDetailAddress()
    {
        return $this->detailAddress;
    }

    /**
     * @param string $detailAddress
     */
    public function setDetailAddress($detailAddress)
    {
        $this->params['detailAddress'] = $detailAddress;
        $this->detailAddress = $detailAddress;
    }


}