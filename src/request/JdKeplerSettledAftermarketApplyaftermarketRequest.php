<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;
use OpenSDK\JingDong\Request\Dto\JdKeplerSettledAftermarketApplyaftermarkClientDto;
use OpenSDK\JingDong\Request\Dto\JdKeplerSettledAftermarketClientDto;

class JdKeplerSettledAftermarketApplyaftermarketRequest implements Request
{
    private $orderIds; // 订单id列表，用','逗号分隔

    private $client; // 客户端信息

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.settled.aftermarket.applyaftermarket';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
		RequestCheckUtil::checkNotNull($this->orderIds, 'orderIds');
	}

    public function setOrderIds($orderIds)
    {
        $this->orderIds = $orderIds;
        $this->apiParas['orderIds'] = $orderIds;
    }

    public function getOrderIds()
    {
        return $this->orderIds;
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
