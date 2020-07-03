<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;
use OpenSDK\JingDong\Request\Dto\JdKeplerSettledAftermarketOperatorInfoDto;
use OpenSDK\JingDong\Request\Dto\JdKeplerSettledAftermarketClientDto;

class JdKeplerSettledAftermarketAuditcancelRequest implements Request
{
    private $serviceId; // 服务单号列表 多个服务单号用,分隔

    private $approveNotes; // 审核意见

    private $operatorInfo; // 操作人信息

    private $client; // 客户端信息

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.settled.aftermarket.auditcancel';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
		RequestCheckUtil::checkNotNull($this->serviceId, 'serviceId');
		RequestCheckUtil::checkNotNull($this->operatorInfo, 'operatorInfo');
	}

    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
        $this->apiParas['serviceId'] = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    public function setApproveNotes($approveNotes)
    {
        $this->approveNotes = $approveNotes;
        $this->apiParas['approveNotes'] = $approveNotes;
    }

    public function getApproveNotes()
    {
        return $this->approveNotes;
    }

    /**
     * @param JdKeplerSettledAftermarketOperatorInfoDto $operatorInfo
     */
    public function setOperatorInfo(JdKeplerSettledAftermarketOperatorInfoDto $operatorInfo)
    {
        $this->operatorInfo = $operatorInfo->getParams();
        $this->apiParas['operatorInfo'] = $operatorInfo->getParams();
    }

    public function getOperatorInfo()
    {
        return $this->operatorInfo;
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
