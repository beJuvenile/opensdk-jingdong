<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;
use OpenSDK\JingDong\Request\Dto\JdKeplerOrderCancelorderCancelOrderDto;
use OpenSDK\JingDong\Request\Dto\JdKeplerOrderCancelorderClientDto;

class JdKeplerOrderCancelorderRequest implements Request
{
    private $cancelOrderReq; // 取消订单入参

    private $client; // 客户端信息,品牌商城填写，其他客户端不用填写

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.order.cancelorder';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
	    RequestCheckUtil::checkNotNull($this->cancelOrderReq, 'cancelOrderReq');
	}

	/**
     * @param JdKeplerOrderCancelorderCancelOrderDto $cancelOrderReq
	 */
    public function setCancelOrderReq(JdKeplerOrderCancelorderCancelOrderDto $cancelOrderReq)
    {
        $this->cancelOrderReq = $cancelOrderReq->getParams();
        $this->apiParas['cancelOrderReq'] = $cancelOrderReq->getParams();
    }

    public function getCancelOrderReq()
    {
        return $this->cancelOrderReq;
    }

    /**
     * @param JdKeplerOrderCancelorderClientDto $client
     */
    public function setClient(JdKeplerOrderCancelorderClientDto $client)
    {
        $this->client = $client->getParams();
        $this->apiParas['client'] = $client->getParams();
    }

    public function getClient()
    {
        return $this->client;
    }
}