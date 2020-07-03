<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=566&apiId=4196&apiName=jd.kepler.order.cancelorder
 */
namespace OpenSDK\JingDong\Request\Dto;


use OpenSDK\JingDong\Interfaces\Dto;

class JdKeplerOrderCancelorderCancelOrderDto implements Dto
{

    private $orderId; // 订单ID

    private $applyDate; // 申请时间（格式毫秒数）

    private $applyPin; // 客户账号

    private $applyName; // 客户名字（没有和账号相同）

    private $params;


    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->params['orderId'] = $orderId;
        $this->orderId = $orderId;
    }

    /**
     * @return int
     */
    public function getApplyDate()
    {
        return $this->applyDate;
    }

    /**
     * @param int $applyDate
     */
    public function setApplyDate($applyDate)
    {
        $this->params['applyDate'] = $applyDate;
        $this->applyDate = $applyDate;
    }

    /**
     * @return string
     */
    public function getApplyPin()
    {
        return $this->applyPin;
    }

    /**
     * @param string $applyPin
     */
    public function setApplyPin($applyPin)
    {
        $this->params['applyPin'] = $applyPin;
        $this->applyPin = $applyPin;
    }

    /**
     * @return string
     */
    public function getApplyName()
    {
        return $this->applyName;
    }

    /**
     * @param string $applyName
     */
    public function setApplyName($applyName)
    {
        $this->params['applyName'] = $applyName;
        $this->applyName = $applyName;
    }
}