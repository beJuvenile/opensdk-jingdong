<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=566&apiId=3898&apiName=jd.kepler.settled.aftermarket.queryservicedetail
 */
namespace OpenSDK\JingDong\Request\Dto;

use OpenSDK\JingDong\Interfaces\Dto;

class JdKeplerSettledAftermarketQueryServiceDetailDto implements Dto
{

    private $afsServiceId; // 服务单号

    private $buId; // 商家编号

    private $operatorInfoParam; // 操作人信息

    private $params;


    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return int
     */
    public function getAfsServiceId()
    {
        return $this->afsServiceId;
    }

    /**
     * @param int $afsServiceId
     */
    public function setAfsServiceId($afsServiceId)
    {
        $this->params['afsServiceId'] = $afsServiceId;
        $this->afsServiceId = $afsServiceId;
    }

    /**
     * @return string
     */
    public function getBuId()
    {
        return $this->buId;
    }

    /**
     * @param string $buId
     */
    public function setBuId($buId)
    {
        $this->params['buId'] = $buId;
        $this->buId = $buId;
    }

    /**
     * @return array
     */
    public function getOperatorInfoParam()
    {
        return $this->operatorInfoParam;
    }

    /**
     * @param JdKeplerSettledAftermarketOperatorInfoDto $operatorInfoParam
     */
    public function setOperatorInfoParam(JdKeplerSettledAftermarketOperatorInfoDto $operatorInfoParam)
    {
        $this->params['operatorInfoParam'] = $operatorInfoParam->getParams();
        $this->operatorInfoParam = $operatorInfoParam->getParams();
    }


}