<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;
use OpenSDK\JingDong\Request\Dto\JdKeplerOrderGetorderdetailClientDto;

class JdKeplerOrderGetorderdetailRequest implements Request
{
    private $orderId; // 订单ID

    private $client; // 客户端信息，品牌商城专用，其他端不必传

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.order.getorderdetail';
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
     * @param JdKeplerOrderGetorderdetailClientDto $client
     */
    public function setClient(JdKeplerOrderGetorderdetailClientDto $client)
    {
        $this->client = $client->getParams();
        $this->apiParas['client'] = $client->getParams();
    }

    public function getClient()
    {
        return $this->client;
    }
}