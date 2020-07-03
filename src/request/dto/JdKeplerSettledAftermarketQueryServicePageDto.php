<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=566&apiId=3872&apiName=jd.kepler.settled.aftermarket.queryservicepage
 */
namespace OpenSDK\JingDong\Request\Dto;

use OpenSDK\JingDong\Interfaces\Dto;

class JdKeplerSettledAftermarketQueryServicePageDto implements Dto
{

    private $afsServiceId; // 服务单号

    private $buId; // 商家编号

    private $orderId; // 订单编号

    private $wareId; // 商品编号

    private $afsApplyTimeBegin; // 申请开始时间

    private $afsApplyTimeEnd; // 申请结束时间

    private $approvedDateBegin; // 审核开始时间

    private $approvedDateEnd; // 审核结束时间

    private $trackPin; // 跟踪人，审核调度指的是审核人，处理指的是处理人

    private $customerPin; // 客户账号

    private $customerName; // 客户昵称

    private $customerTel; // 客户电话

    private $orderType; // 订单类型

    private $newOrderId; // 换新单号

    private $expressCode; // 运单号

    private $afsServiceStep; // 服务单环节 申请阶段(10), 客服审核(21), 商家审核(22), 审核不通过(20), 京东收货(31), 京东处理(33), 商家处理(34), 商家收货(32), 用户确认(40), 完成(50), 取消(60)

    private $pageSize; // 分页信息 每页记录数,必填，默认10

    private $pageIndex; // 分页信息 页码,必填，第一页为1

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
    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param int $wareId
     */
    public function setWareId($wareId)
    {
        $this->params['wareId'] = $wareId;
        $this->wareId = $wareId;
    }

    /**
     * @return string
     */
    public function getAfsApplyTimeBegin()
    {
        return $this->afsApplyTimeBegin;
    }

    /**
     * @param string $afsApplyTimeBegin
     */
    public function setAfsApplyTimeBegin($afsApplyTimeBegin)
    {
        $this->params['afsApplyTimeBegin'] = $afsApplyTimeBegin;
        $this->afsApplyTimeBegin = $afsApplyTimeBegin;
    }

    /**
     * @return string
     */
    public function getAfsApplyTimeEnd()
    {
        return $this->afsApplyTimeEnd;
    }

    /**
     * @param string $afsApplyTimeEnd
     */
    public function setAfsApplyTimeEnd($afsApplyTimeEnd)
    {
        $this->params['afsApplyTimeEnd'] = $afsApplyTimeEnd;
        $this->afsApplyTimeEnd = $afsApplyTimeEnd;
    }

    /**
     * @return string
     */
    public function getApprovedDateBegin()
    {
        return $this->approvedDateBegin;
    }

    /**
     * @param string $approvedDateBegin
     */
    public function setApprovedDateBegin($approvedDateBegin)
    {
        $this->params['approvedDateBegin'] = $approvedDateBegin;
        $this->approvedDateBegin = $approvedDateBegin;
    }

    /**
     * @return string
     */
    public function getApprovedDateEnd()
    {
        return $this->approvedDateEnd;
    }

    /**
     * @param string $approvedDateEnd
     */
    public function setApprovedDateEnd($approvedDateEnd)
    {
        $this->params['approvedDateEnd'] = $approvedDateEnd;
        $this->approvedDateEnd = $approvedDateEnd;
    }

    /**
     * @return string
     */
    public function getTrackPin()
    {
        return $this->trackPin;
    }

    /**
     * @param string $trackPin
     */
    public function setTrackPin($trackPin)
    {
        $this->params['trackPin'] = $trackPin;
        $this->trackPin = $trackPin;
    }

    /**
     * @return string
     */
    public function getCustomerPin()
    {
        return $this->customerPin;
    }

    /**
     * @param string $customerPin
     */
    public function setCustomerPin($customerPin)
    {
        $this->params['customerPin'] = $customerPin;
        $this->customerPin = $customerPin;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param string $customerName
     */
    public function setCustomerName($customerName)
    {
        $this->params['customerName'] = $customerName;
        $this->customerName = $customerName;
    }

    /**
     * @return string
     */
    public function getCustomerTel()
    {
        return $this->customerTel;
    }

    /**
     * @param string $customerTel
     */
    public function setCustomerTel($customerTel)
    {
        $this->params['customerTel'] = $customerTel;
        $this->customerTel = $customerTel;
    }

    /**
     * @return int
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param int $orderType
     */
    public function setOrderType($orderType)
    {
        $this->params['orderType'] = $orderType;
        $this->orderType = $orderType;
    }

    /**
     * @return int
     */
    public function getNewOrderId()
    {
        return $this->newOrderId;
    }

    /**
     * @param int $newOrderId
     */
    public function setNewOrderId($newOrderId)
    {
        $this->params['newOrderId'] = $newOrderId;
        $this->newOrderId = $newOrderId;
    }

    /**
     * @return string
     */
    public function getExpressCode()
    {
        return $this->expressCode;
    }

    /**
     * @param string $expressCode
     */
    public function setExpressCode($expressCode)
    {
        $this->params['expressCode'] = $expressCode;
        $this->expressCode = $expressCode;
    }

    /**
     * @return int
     */
    public function getAfsServiceStep()
    {
        return $this->afsServiceStep;
    }

    /**
     * @param int $afsServiceStep
     */
    public function setAfsServiceStep($afsServiceStep)
    {
        $this->params['afsServiceStep'] = $afsServiceStep;
        $this->afsServiceStep = $afsServiceStep;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->params['pageSize'] = $pageSize;
        $this->pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageIndex
     */
    public function setPageIndex($pageIndex)
    {
        $this->params['pageIndex'] = $pageIndex;
        $this->pageIndex = $pageIndex;
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