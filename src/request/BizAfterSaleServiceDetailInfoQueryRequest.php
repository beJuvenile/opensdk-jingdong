<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class BizAfterSaleServiceDetailInfoQueryRequest implements Request
{

    private $afsServiceId; // 服务单号

    private $appendInfoSteps; // 获取信息模块 不设置数据表示只获取服务单主信息、商品明细以及客户信息；1、代表增加获取售后地址信息 2、代表增加获取客户发货信息 3、代表增加获取退款明细 4、 增加获取跟踪信息 5.获取允许的操作信息
	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'biz.afterSale.serviceDetailInfo.query';
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
    public function getAppendInfoSteps()
    {
        return $this->appendInfoSteps;
    }

    /**
     * @param string $appendInfoSteps
     */
    public function setAppendInfoSteps($appendInfoSteps)
    {
        $this->apiParas['appendInfoSteps'] = $appendInfoSteps;
        $this->appendInfoSteps = $appendInfoSteps;
    }


}