<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;

class JdKeplerSettledAddressGetareabymehodnameRequest implements Request
{
    private $param; // 	地址id

    private $methodName; // getProvices或者getCitys或者getCountys或者getTowns

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.settled.address.getareabymehodname';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode(['request'=>$this->apiParas]);
	}
	
	public function check()
    {
        RequestCheckUtil::checkNotNull($this->param, 'param');
        RequestCheckUtil::checkNotNull($this->methodName, 'methodName');
	}

    /**
     * @return int
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * @param int $param
     */
    public function setParam($param)
    {
        $this->apiParas['param'] = $param;
        $this->param = $param;
    }

    /**
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * @param string $methodName
     */
    public function setMethodName($methodName)
    {
        $this->apiParas['methodName'] = $methodName;
        $this->methodName = $methodName;
    }

}