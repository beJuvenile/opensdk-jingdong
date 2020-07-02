<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class BizAfterSaleSendSkuUpdateRequest implements Request
{

    private $afsServiceId; // afsServiceId

    private $deliverDate; // 发货日期

    private $expressCode; // 货运单号

    private $expressCompany; // 货运公司

    private $freightMoney; //

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'biz.afterSale.sendSku.update';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode(['param'=>$this->apiParas]);
	}
	
	public function check(){}

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
        $this->apiParas['afsServiceId'] = $afsServiceId;
        $this->afsServiceId = $afsServiceId;
    }

    /**
     * @return string
     */
    public function getDeliverDate()
    {
        return $this->deliverDate;
    }

    /**
     * @param string $deliverDate
     */
    public function setDeliverDate($deliverDate)
    {
        $this->apiParas['deliverDate'] = $deliverDate;
        $this->deliverDate = $deliverDate;
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
        $this->apiParas['expressCode'] = $expressCode;
        $this->expressCode = $expressCode;
    }

    /**
     * @return string
     */
    public function getExpressCompany()
    {
        return $this->expressCompany;
    }

    /**
     * @param string $expressCompany
     */
    public function setExpressCompany($expressCompany)
    {
        $this->apiParas['expressCompany'] = $expressCompany;
        $this->expressCompany = $expressCompany;
    }

    /**
     * @return mixed
     */
    public function getFreightMoney()
    {
        return $this->freightMoney;
    }

    /**
     * @param mixed $freightMoney
     */
    public function setFreightMoney($freightMoney)
    {
        $this->apiParas['freightMoney'] = $freightMoney;
        $this->freightMoney = $freightMoney;
    }


}