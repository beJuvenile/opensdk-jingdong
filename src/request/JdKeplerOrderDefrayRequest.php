<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;
use OpenSDK\JingDong\Request\Dto\JdKeplerOrderDefrayReqParamDto;

class JdKeplerOrderDefrayRequest implements Request
{
    private $defrayReqParam; // 代收请求参数

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.order.defray';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
		RequestCheckUtil::checkNotNull($this->defrayReqParam, 'defrayReqParam');
	}

	/**
     * @param JdKeplerOrderDefrayReqParamDto $defrayReqParam
	 */
    public function setDefrayReqParam(JdKeplerOrderDefrayReqParamDto $defrayReqParam)
    {
        $this->defrayReqParam = $defrayReqParam->getParams();
        $this->apiParas['defrayReqParam'] = $defrayReqParam->getParams();
    }

    public function getDefrayReqParam()
    {
        return $this->defrayReqParam;
    }
}