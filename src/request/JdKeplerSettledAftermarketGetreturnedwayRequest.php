<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;
use OpenSDK\JingDong\Request\Dto\JdKeplerSettledAftermarketClientDto;

class JdKeplerSettledAftermarketGetreturnedwayRequest implements Request
{
    private $orderId; // 订单ID

    private $wareId; // 商品id

    private $client; // 客户端信息

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.settled.aftermarket.getreturnedway';
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
