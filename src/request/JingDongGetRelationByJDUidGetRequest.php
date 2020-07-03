<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class JingDongGetRelationByJDUidGetRequest implements Request
{
    private $uid;


	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jingdong.getRelationByJDUid.get';
	}
	
	public function getApiParas()
    {
	    if (!$this->apiParas)
	        return '{}';

        return json_encode($this->apiParas);
	}
	
	public function check(){}

	public function setUid($uid)
    {
		$this->uid = $uid;
		$this->apiParas['uid'] = $uid;
	}

	public function getUid()
    {
        return $this->uid;
	}

}





        
 

