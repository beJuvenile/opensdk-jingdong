<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class JingDongCreatePromotionSiteJosSaveAppPromtionSiteInfoRequest implements Request
{
    private $pin;

    private $appId;

    private $adName;

    private $adType;

    private $adSize;

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jingdong.CreatePromotionSiteJos.saveAppPromtionSiteInfo';
	}
	
	public function getApiParas()
    {
	    if(!$this->apiParas)
	        return '{}';

        return json_encode($this->apiParas);
	}
	
	public function check(){}

	public function setPin($pin)
    {
        $this->pin = $pin;
        $this->apiParas['pin'] = $pin;
	}

	public function getPin()
    {
        return $this->pin;
	}

	public function setAppId($appId)
    {
		$this->appId = $appId;
		$this->apiParas['appId'] = $appId;
	}

	public function getAppId()
    {
        return $this->appId;
	}

	public function setAdName($adName)
    {
		$this->adName = $adName;
		$this->apiParas['adName'] = $adName;
	}

	public function getAdName()
    {
        return $this->adName;
	}

	public function setAdType($adType)
    {
		$this->adType = $adType;
		$this->apiParas['adType'] = $adType;
	}

	public function getAdType()
    {
        return $this->adType;
	}

	public function setAdSize($adSize)
    {
		$this->adSize = $adSize;
		$this->apiParas['adSize'] = $adSize;
	}

	public function getAdSize()
    {
        return $this->adSize;
	}

}





        
 

