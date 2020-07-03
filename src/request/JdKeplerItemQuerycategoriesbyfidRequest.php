<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;

class JdKeplerItemQuerycategoriesbyfidRequest implements Request
{
    private $fid; // 父id，填0获取一级分类

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.kepler.item.querycategoriesbyfid';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
        RequestCheckUtil::checkNotNull($this->fid, 'fid');
    }

    public function setFid($fid)
    {
        $this->fid = $fid;
        $this->apiParas['fid'] = $fid;
    }

    public function getFid()
    {
        return $this->fid;
    }

}
