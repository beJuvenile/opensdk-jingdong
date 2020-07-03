<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Request\Dto\JdKeplerOrderGetordertrackClientDto;

class JdKeplerOrderGetordertrackRequest implements Request
{
    private $orderId; // 订单ID

    private $client; // 客户端信息，品牌商城专用，其他端无需传入

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.order.getordertrack';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
		
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

    /**
     * @param JdKeplerOrderGetordertrackClientDto $client
     */
    public function setClient(JdKeplerOrderGetordertrackClientDto $client)
    {
        $this->client = $client->getParams();
        $this->apiParas['client'] = $client->getParams();
    }

    public function getClient()
    {
        return $this->client;
    }
}
