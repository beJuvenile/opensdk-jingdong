<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=566&apiId=3781&apiName=jd.kepler.settled.aftermarket.applyaftermarket
 */
namespace OpenSDK\JingDong\Request\Dto;

use OpenSDK\JingDong\Interfaces\Dto;

class JdKeplerSettledAftermarketClientDto implements Dto
{

    private $uid; // uid

    private $userIp; // 客户端ip

    private $params;


    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     */
    public function setUid($uid)
    {
        $this->params['uid'] = $uid;
        $this->uid = $uid;
    }

    /**
     * @return string
     */
    public function getUserIp()
    {
        return $this->userIp;
    }

    /**
     * @param string $userIp
     */
    public function setUserIp($userIp)
    {
        $this->params['userIp'] = $userIp;
        $this->userIp = $userIp;
    }


}