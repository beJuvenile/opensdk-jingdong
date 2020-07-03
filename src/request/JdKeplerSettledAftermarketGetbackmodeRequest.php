<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;
use OpenSDK\JingDong\Request\Dto\JdKeplerSettledAftermarketClientDto;
use OpenSDK\JingDong\Request\Dto\JdKeplerSettledAftermarketGetbackmodeBackAddrDto;

class JdKeplerSettledAftermarketGetbackmodeRequest implements Request
{
    private $orderId; // 订单ID

    private $wareId; // 商品id

    private $backAddr; // 回退信息

    private $client; // 客户端信息

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.settled.aftermarket.getbackmode';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->wareId, 'wareId');
		RequestCheckUtil::checkNotNull($this->backAddr, 'backAddr');
	}

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        $this->apiParas['orderId'] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setWareId($wareId)
    {
        $this->wareId = $wareId;
        $this->apiParas['wareId'] = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param JdKeplerSettledAftermarketGetbackmodeBackAddrDto $backAddr
     */
    public function setBackAddr(JdKeplerSettledAftermarketGetbackmodeBackAddrDto $backAddr)
    {
        $this->backAddr = $backAddr->getParams();
        $this->apiParas['backAddr'] = $backAddr->getParams();
    }

    public function getBackAddr()
    {
        return $this->backAddr;
    }

    /**
     * @param JdKeplerSettledAftermarketClientDto $client
     */
    public function setClient(JdKeplerSettledAftermarketClientDto $client)
    {
        $this->client = $client->getParams();
        $this->apiParas['client'] = $client->getParams();
    }

    public function getClient()
    {
        return $this->client;
    }


}