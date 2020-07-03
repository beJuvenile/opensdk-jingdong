<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class JingDongJosMasterKeyGetRequest implements Request
{
    private $sig; // 使用凭证key对data进行HmacSHA256签名结果

    private $sdkVer; // sdk版本

    private $ts; // 请求时间的时间戳

    private $tid; // 凭证id，通过jingdong.jos.voucher.info.get获取

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jingdong.jos.master.key.get';
	}
	
	public function getApiParas()
    {
	    if (!$this->apiParas)
	        return '{}';

        return json_encode($this->apiParas);
	}
	
	public function check(){}

	public function setSig($sig)
    {
        $this->sig = $sig;
        $this->apiParas['sig'] = $sig;
	}

	public function getSig()
    {
        return $this->sig;
	}

	public function setSdkVer($sdkVer)
    {
		$this->sdkVer = $sdkVer;
		$this->apiParas['sdk_ver'] = $sdkVer;
	}

	public function getSdkVer()
    {
        return $this->sdkVer;
	}

	public function setTs($ts)
    {
		$this->ts = $ts;
		$this->apiParas['ts'] = $ts;
	}

	public function getTs()
    {
        return $this->ts;
	}

	public function setTid($tid)
    {
		$this->tid = $tid;
		$this->apiParas['tid'] = $tid;
	}

	public function getTid()
    {
        return $this->tid;
	}

}





        
 

