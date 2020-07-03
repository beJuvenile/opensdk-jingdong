<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=566&apiId=4166&apiName=jd.kepler.order.defray
 */
namespace OpenSDK\JingDong\Request\Dto;


use OpenSDK\JingDong\Interfaces\Dto;

class JdKeplerOrderDefrayReqParamDto implements Dto
{

    private $customerAlias; // 商户别名，京东kepler分配

    private $defrayParamStr; // 代收加密参数

    private $params;


    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return string
     */
    public function getCustomerAlias()
    {
        return $this->customerAlias;
    }

    /**
     * @param string $customerAlias
     */
    public function setCustomerAlias($customerAlias)
    {
        $this->params['customerAlias'] = $customerAlias;
        $this->customerAlias = $customerAlias;
    }

    /**
     * @return string
     */
    public function getDefrayParamStr()
    {
        return $this->defrayParamStr;
    }

    /**
     * @param string $defrayParamStr
     */
    public function setDefrayParamStr($defrayParamStr)
    {
        $this->params['defrayParamStr'] = $defrayParamStr;
        $this->defrayParamStr = $defrayParamStr;
    }


}