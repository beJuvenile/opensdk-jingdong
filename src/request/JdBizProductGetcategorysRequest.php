<?php
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;

class BizProductGetcategorysRequest implements Request
{
    private $parentId; // 父ID

    private $catClass; // 分类等级（0:一级； 1:二级；2：三级）

    private $pageNo; //

    private $pageSize; //

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'jd.biz.product.getcategorys';
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
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     */
    public function setParentId($parentId)
    {
        $this->apiParas['parentId'] = $parentId;
        $this->parentId = $parentId;
    }

    /**
     * @return int
     */
    public function getCatClass()
    {
        return $this->catClass;
    }

    /**
     * @param int $catClass
     */
    public function setCatClass($catClass)
    {
        $this->apiParas['catClass'] = $catClass;
        $this->catClass = $catClass;
    }

    /**
     * @return int
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageNo
     */
    public function setPageNo($pageNo)
    {
        $this->apiParas['pageNo'] = $pageNo;
        $this->pageNo = $pageNo;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->apiParas['pageSize'] = $pageSize;
        $this->pageSize = $pageSize;
    }

}