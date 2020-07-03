<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class JdKeplerSettledAftermarketSaveaftermarketRequest implements Request
{
	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.settled.aftermarket.saveaftermarket';
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

    private  $afsApplyDto;

    public function setAfsApplyDto($afsApplyDto){
        $this->apiParas['afsApplyDto'] = $afsApplyDto;
    }
    public function getAfsApplyDto(){
        return $this->apiParas['afsApplyDto'];
    }
    private  $client;

    public function setClient($client){
        $this->apiParas['client'] = $client;
    }
    public function getClient(){
        return $this->apiParas['client'];
    }
}