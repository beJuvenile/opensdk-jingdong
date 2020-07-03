<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Request\Dto\JdKeplerSettledAftermarketClientDto;
use OpenSDK\JingDong\Request\Dto\JdKeplerSettledAftermarketQueryServicePageDto;

class JdKeplerSettledAftermarketQueryservicepageRequest implements Request
{
    private $queryServicePageParam; // 服务单概要信息查询入参

    private $client; // 客户端信息

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.settled.aftermarket.queryservicepage';
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

	/**
     * @param JdKeplerSettledAftermarketQueryServicePageDto $queryServicePageParam
	 */
    public function setQueryServicePageParam(JdKeplerSettledAftermarketQueryServicePageDto $queryServicePageParam)
    {
        $this->queryServicePageParam = $queryServicePageParam->getParams();
        $this->apiParas['queryServicePageParam'] = $queryServicePageParam->getParams();
    }

    public function getQueryServicePageParam()
    {
        return $this->queryServicePageParam;
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