<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class BizAfterSaleAuditCancelQueryRequest implements Request
{

    private $approveNotes; // 审核意见

    private $serviceIdList; // 服务单id列表

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'biz.afterSale.auditCancel.query';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode(['param'=>$this->apiParas]);
	}
	
	public function check(){}

    /**
     * @return string
     */
    public function getApproveNotes()
    {
        return $this->approveNotes;
    }

    /**
     * @param string $approveNotes
     */
    public function setApproveNotes($approveNotes)
    {
        $this->apiParas['approveNotes'] = $approveNotes;
        $this->approveNotes = $approveNotes;
    }

    /**
     * @return array
     */
    public function getServiceIdList()
    {
        return $this->serviceIdList;
    }

    /**
     * @param array $serviceIdList
     */
    public function setServiceIdList($serviceIdList)
    {
        $this->apiParas['serviceIdList'] = $serviceIdList;
        $this->serviceIdList = $serviceIdList;
    }

}