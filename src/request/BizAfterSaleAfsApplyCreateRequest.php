<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=576&apiId=3928&apiName=biz.afterSale.afsApply.create
 */
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Request\Dto\BizAfterSaleAfsApplyCreateCustomerDto;
use OpenSDK\JingDong\Request\Dto\BizAfterSaleAfsApplyCreateDetailDto;
use OpenSDK\JingDong\Request\Dto\BizAfterSaleAfsApplyCreatePickwareDto;
use OpenSDK\JingDong\Request\Dto\BizAfterSaleAfsApplyCreateReturnwareDto;

class BizAfterSaleAfsApplyCreateRequest implements Request
{

    private $jdOrderId; // 京东订单号

    private $customerExpect; // 客户预期（退货(10)、换货(20)、维修(30)）

    private $questionDesc; // 产品问题描述

    private $isNeedDetectionReport; // 	是否需要检验报告

    private $questionPic; // 问题描述图片

    private $asCustomerDto; // 客户信息实体

    private $asPickwareDto; // 取件信息实体

    private $asReturnwareDto; // 返件信息实体，即商品如何返回客户手中

    private $asDetailDto; // 申请单明细

    private $isHasPackage; // 是否有包装

    private $packageDesc; // 包装描述，0 无包装 10 包装完整 20 包装破损

	private $apiParas = [];
	
	public function getApiMethodName()
    {
        return 'biz.afterSale.afsApply.create';
	}

	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode(['param' => $this->apiParas]);
	}
	
	public function check(){}

    /**
     * @return integer
     */
    public function getJdOrderId()
    {
        return $this->jdOrderId;
    }

    /**
     * @param integer $jdOrderId
     */
    public function setJdOrderId($jdOrderId)
    {
        $this->apiParas['jdOrderId'] = $jdOrderId;
        $this->jdOrderId = $jdOrderId;
    }

    /**
     * @return integer
     */
    public function getCustomerExpect()
    {
        return $this->customerExpect;
    }

    /**
     * @param integer $customerExpect
     */
    public function setCustomerExpect($customerExpect)
    {
        $this->apiParas['customerExpect'] = $customerExpect;
        $this->customerExpect = $customerExpect;
    }

    /**
     * @return string
     */
    public function getQuestionDesc()
    {
        return $this->questionDesc;
    }

    /**
     * @param string $questionDesc
     */
    public function setQuestionDesc($questionDesc)
    {
        $this->apiParas['questionDesc'] = $questionDesc;
        $this->questionDesc = $questionDesc;
    }

    /**
     * @return bool
     */
    public function getIsNeedDetectionReport()
    {
        return $this->isNeedDetectionReport;
    }

    /**
     * @param bool $isNeedDetectionReport
     */
    public function setIsNeedDetectionReport($isNeedDetectionReport)
    {
        $this->apiParas['isNeedDetectionReport'] = $isNeedDetectionReport;
        $this->isNeedDetectionReport = $isNeedDetectionReport;
    }

    /**
     * @return string
     */
    public function getQuestionPic()
    {
        return $this->questionPic;
    }

    /**
     * @param string $questionPic
     */
    public function setQuestionPic($questionPic)
    {
        $this->apiParas['questionPic'] = $questionPic;
        $this->questionPic = $questionPic;
    }

    /**
     * @return array
     */
    public function getAsCustomerDto()
    {
        return $this->asCustomerDto;
    }

    /**
     * @param BizAfterSaleAfsApplyCreateCustomerDto $asCustomerDto
     */
    public function setAsCustomerDto(BizAfterSaleAfsApplyCreateCustomerDto $asCustomerDto)
    {
        $this->apiParas['asCustomerDto'] = $asCustomerDto->getParams();
        $this->asCustomerDto = $asCustomerDto;
    }

    /**
     * @return array
     */
    public function getAsPickwareDto()
    {
        return $this->asPickwareDto;
    }

    /**
     * @param BizAfterSaleAfsApplyCreatePickwareDto $asPickwareDto
     */
    public function setAsPickwareDto(BizAfterSaleAfsApplyCreatePickwareDto $asPickwareDto)
    {
        $this->apiParas['asPickwareDto'] = $asPickwareDto->getParams();
        $this->asPickwareDto = $asPickwareDto;
    }

    /**
     * @return array
     */
    public function getAsReturnwareDto()
    {
        return $this->asReturnwareDto;
    }

    /**
     * @param BizAfterSaleAfsApplyCreateReturnwareDto $asReturnwareDto
     */
    public function setAsReturnwareDto(BizAfterSaleAfsApplyCreateReturnwareDto $asReturnwareDto)
    {
        $this->asPickwareDto['asReturnwareDto'] = $asReturnwareDto->getParams();
        $this->asReturnwareDto = $asReturnwareDto;
    }

    /**
     * @return array
     */
    public function getAsDetailDto()
    {
        return $this->asDetailDto;
    }

    /**
     * @param BizAfterSaleAfsApplyCreateDetailDto $asDetailDto
     */
    public function setAsDetailDto(BizAfterSaleAfsApplyCreateDetailDto $asDetailDto)
    {
        $this->apiParas['asDetailDto'] = $asDetailDto->getParams();
        $this->asDetailDto = $asDetailDto;
    }

    /**
     * @return bool
     */
    public function getIsHasPackage()
    {
        return $this->isHasPackage;
    }

    /**
     * @param bool $isHasPackage
     */
    public function setIsHasPackage($isHasPackage)
    {
        $this->apiParas['isHasPackage'] = $isHasPackage;
        $this->isHasPackage = $isHasPackage;
    }

    /**
     * @return int
     */
    public function getPackageDesc()
    {
        return $this->packageDesc;
    }

    /**
     * @param int $packageDesc
     */
    public function setPackageDesc($packageDesc)
    {
        $this->apiParas['packageDesc'] = $packageDesc;
        $this->packageDesc = $packageDesc;
    }


}