<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class JdBizProductGetcategoryRequest implements Request
{

    private $cid; // 分类id（可通过商品详情接口查询）

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.biz.product.getcategory';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check(){}

    /**
     * @return int
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param int $cid
     */
    public function setCid($cid)
    {
        $this->apiParas['cid'] = $cid;
        $this->cid = $cid;
    }


}