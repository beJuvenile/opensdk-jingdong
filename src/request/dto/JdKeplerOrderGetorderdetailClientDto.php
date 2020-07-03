<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=566&apiId=3871&apiName=jd.kepler.order.getorderdetail
 */
namespace OpenSDK\JingDong\Request\Dto;


use OpenSDK\JingDong\Interfaces\Dto;

class JdKeplerOrderGetorderdetailClientDto implements Dto
{

    private $uid; // uid

    private $userIp; // 客户端ip

    private $logId; // 日志ID

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

    /**
     * @return mixed
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * @param mixed $logId
     */
    public function setLogId($logId)
    {
        $this->params['logId'] = $logId;
        $this->logId = $logId;
    }


}