<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;

class JdKeplerItemQueryskusbycatidRequest implements Request
{
    private $catId; // 分类id

    private $scrollId; // 游标

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.item.queryskusbycatid';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
	    RequestCheckUtil::checkNotNull($this->catId, 'catId');
	}

    public function setCatId($catId)
    {
        $this->catId = $catId;
        $this->apiParas['catId'] = $catId;
    }

    public function getCatId()
    {
        return $this->catId;
    }

    public function setScrollId($scrollId)
    {
        $this->scrollId = $scrollId;
        $this->apiParas['scrollId'] = $scrollId;
    }

    public function getScrollId()
    {
        return $this->scrollId;
    }


}
