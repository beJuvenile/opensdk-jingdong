<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class JdBizProductGetSkuByPageRequest implements Request
{

    private $pageNum; // 商品池编号

    private $pageNo; // 页码，默认取第一页；每页最多10000条数据，品类商品池可能存在多页数据，具体根据返回的页总数判断是否有下一页数据

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.biz.product.getSkuByPage';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check(){}

    /**
     * @return mixed
     */
    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param mixed $pageNum
     */
    public function setPageNum($pageNum)
    {
        $this->apiParas['pageNum'] = $pageNum;
        $this->pageNum = $pageNum;
    }

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param mixed $pageNo
     */
    public function setPageNo($pageNo)
    {
        $this->apiParas['pageNo'] = $pageNo;
        $this->pageNo = $pageNo;
    }

}