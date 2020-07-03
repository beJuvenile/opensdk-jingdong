<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=576&apiId=4150&apiName=biz.invoice.submit
 */
namespace OpenSDK\JingDong\Request;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\RequestCheckUtil;

class BizInvoiceSubmitRequest implements Request
{
    private $supplierOrder; // 子订单号，批量以，分割

    private $markId; // 第三方申请单号：申请发票的唯一id标识 (该标记下可以对应多张发票信息)

    private $settlementId; // 结算单号（一个结算单号可对对应多个第三方申请单号）

    private $settlementNum; // 结算单子订单总数

    private $settlementNakedPrice; // 结算单不含税总金额

    private $settlementTaxPrice; // 结算单总税额

    private $invoiceType; // 发票类型 1普通 2增值税

    private $invoiceOrg; // 开票机构ID（联系京东业务确定）

    private $bizInvoiceContent; // 开票内容： 1,

    private $invoiceDate; // 期望开票时间 2013-11-8

    private $title; // 	发票抬头（参考使用）

    private $billToParty; // 收票单位 （填写开票省份）

    private $enterpriseTaxpayer; // 纳税人识别号（增票必须）

    private $billToer; // 收票人

    private $billToContact; // 收票人联系方式

    private $billToProvince; // 收票人地址（省）

    private $billToCity; // 收票人地址（市）

    private $billToCounty; // 收票人地址（区）

    private $billToTown; // 收票人地址（街道）（有四级地址则必传，否则传0）

    private $billToAddress; // 收票人地址（详细地址）

    private $repaymentDate; // 预计还款时间2013-11-8（开票方式为预借时必传）

    private $invoiceNum; // 当前批次子订单总数

    private $invoiceNakedPrice; // 当前批次不含税总金额（单位：元）

    private $invoiceTaxPrice; // 当前批次总税额(参考用)

    private $currentBatch; // 当前批次号

    private $totalBatch; // 总批次数

    private $totalBatchInvoiceNakedAmount; // 总批次开发票金额（不含税）

    private $totalBatchInvoiceTaxAmount; // 总批次开发票税额

    private $totalBatchInvoiceAmount; // 总批次开发票价税合计

    private $billingType; // 1-集中开票，2-分别开票（不传默认为集中开票）

    private $invoicePrice; // 当前批次含税总金额

    private $isMerge; // 合并开票，（不传默认为合并开票） 1-合并SKU， 空和其他-分别开票

    private $poNo; // 采购单号，长度范围[1-26]

    private $enterpriseRegAddress; // 企业注册地址

    private $enterpriseRegPhone; // 企业注册电话

    private $enterpriseBankName; // 企业注册开户行名称

    private $enterpriseBankAccount; // 企业注册开户行账号

	private $apiParas = [];

	
	public function getApiMethodName()
    {
        return 'biz.invoice.submit';
	}
	
	public function getApiParas()
    {
        if (!$this->apiParas)
            return '{}';

		return json_encode($this->apiParas);
	}
	
	public function check()
    {
        RequestCheckUtil::checkNotNull($this->supplierOrder, 'supplierOrder');
        RequestCheckUtil::checkNotNull($this->markId, 'markId');
        RequestCheckUtil::checkNotNull($this->settlementId, 'settlementId');
        RequestCheckUtil::checkNotNull($this->invoiceType, 'invoiceType');
        RequestCheckUtil::checkNotNull($this->invoiceOrg, 'invoiceOrg');
        RequestCheckUtil::checkNotNull($this->bizInvoiceContent, 'bizInvoiceContent');
        RequestCheckUtil::checkNotNull($this->invoiceDate, 'invoiceDate');
        RequestCheckUtil::checkNotNull($this->title, 'title');
        RequestCheckUtil::checkNotNull($this->invoiceNum, 'invoiceNum');
        RequestCheckUtil::checkNotNull($this->currentBatch, 'currentBatch');
        RequestCheckUtil::checkNotNull($this->totalBatch, 'totalBatch');
        RequestCheckUtil::checkNotNull($this->totalBatchInvoiceAmount, 'totalBatchInvoiceAmount');
        RequestCheckUtil::checkNotNull($this->invoicePrice, 'invoicePrice');
    }


    public function setSupplierOrder($supplierOrder)
    {
        $this->supplierOrder = $supplierOrder;
        $this->apiParas['supplierOrder'] = $supplierOrder;
    }

    public function getSupplierOrder()
    {
        return $this->supplierOrder;
    }

    public function setMarkId($markId)
    {
        $this->markId = $markId;
        $this->apiParas['markId'] = $markId;
    }

    public function getMarkId()
    {
        return $this->markId;
    }

    public function setSettlementId($settlementId)
    {
        $this->settlementId = $settlementId;
        $this->apiParas['settlementId'] = $settlementId;
    }

    public function getSettlementId()
    {
        return $this->settlementId;
    }

    public function setSettlementNum($settlementNum)
    {
        $this->settlementNum = $settlementNum;
        $this->apiParas['settlementNum'] = $settlementNum;
    }

    public function getSettlementNum()
    {
        return $this->settlementNum;
    }

    public function setSettlementNakedPrice($settlementNakedPrice)
    {
        $this->settlementNakedPrice = $settlementNakedPrice;
        $this->apiParas['settlementNakedPrice'] = $settlementNakedPrice;
    }

    public function getSettlementNakedPrice()
    {
        return $this->settlementNakedPrice;
    }

    public function setSettlementTaxPrice($settlementTaxPrice)
    {
        $this->settlementTaxPrice = $settlementTaxPrice;
        $this->apiParas['settlementTaxPrice'] = $settlementTaxPrice;
    }

    public function getSettlementTaxPrice()
    {
        return $this->settlementTaxPrice;
    }

    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType = $invoiceType;
        $this->apiParas['invoiceType'] = $invoiceType;
    }

    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    public function setInvoiceOrg($invoiceOrg)
    {
        $this->invoiceOrg = $invoiceOrg;
        $this->apiParas['invoiceOrg'] = $invoiceOrg;
    }

    public function getInvoiceOrg()
    {
        return $this->invoiceOrg;
    }

    public function setBizInvoiceContent($bizInvoiceContent)
    {
        $this->bizInvoiceContent = $bizInvoiceContent;
        $this->apiParas['bizInvoiceContent'] = $bizInvoiceContent;
    }

    public function getBizInvoiceContent()
    {
        return $this->bizInvoiceContent;
    }

    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
        $this->apiParas['invoiceDate'] = $invoiceDate;
    }

    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        $this->apiParas['title'] = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setBillToParty($billToParty)
    {
        $this->billToParty = $billToParty;
        $this->apiParas['billToParty'] = $billToParty;
    }

    public function getBillToParty()
    {
        return $this->billToParty;
    }

    public function setEnterpriseTaxpayer($enterpriseTaxpayer)
    {
        $this->enterpriseTaxpayer = $enterpriseTaxpayer;
        $this->apiParas['enterpriseTaxpayer'] = $enterpriseTaxpayer;
    }

    public function getEnterpriseTaxpayer()
    {
        return $this->enterpriseTaxpayer;
    }

    public function setBillToer($billToer)
    {
        $this->billToer = $billToer;
        $this->apiParas['billToer'] = $billToer;
    }

    public function getBillToer()
    {
        return $this->billToer;
    }

    public function setBillToContact($billToContact)
    {
        $this->billToContact = $billToContact;
        $this->apiParas['billToContact'] = $billToContact;
    }

    public function getBillToContact()
    {
        return $this->billToContact;
    }

    public function setBillToProvince($billToProvince)
    {
        $this->billToProvince = $billToProvince;
        $this->apiParas['billToProvince'] = $billToProvince;
    }

    public function getBillToProvince()
    {
        return $this->billToProvince;
    }

    public function setBillToCity($billToCity)
    {
        $this->billToCity = $billToCity;
        $this->apiParas['billToCity'] = $billToCity;
    }

    public function getBillToCity()
    {
        return $this->billToCity;
    }

    public function setBillToCounty($billToCounty)
    {
        $this->billToCounty = $billToCounty;
        $this->apiParas['billToCounty'] = $billToCounty;
    }

    public function getBillToCounty()
    {
        return $this->billToCounty;
    }

    public function setBillToTown($billToTown)
    {
        $this->billToTown = $billToTown;
        $this->apiParas['billToTown'] = $billToTown;
    }

    public function getBillToTown()
    {
        return $this->billToTown;
    }

    public function setBillToAddress($billToAddress)
    {
        $this->billToAddress = $billToAddress;
        $this->apiParas['billToAddress'] = $billToAddress;
    }

    public function getBillToAddress()
    {
        return $this->billToAddress;
    }

    public function setRepaymentDate($repaymentDate)
    {
        $this->repaymentDate = $repaymentDate;
        $this->apiParas['repaymentDate'] = $repaymentDate;
    }

    public function getRepaymentDate()
    {
        return $this->repaymentDate;
    }

    public function setInvoiceNum($invoiceNum)
    {
        $this->invoiceNum = $invoiceNum;
        $this->apiParas['invoiceNum'] = $invoiceNum;
    }

    public function getInvoiceNum()
    {
        return $this->invoiceNum;
    }

    public function setInvoiceNakedPrice($invoiceNakedPrice)
    {
        $this->invoiceNakedPrice = $invoiceNakedPrice;
        $this->apiParas['invoiceNakedPrice'] = $invoiceNakedPrice;
    }

    public function getInvoiceNakedPrice()
    {
        return $this->invoiceNakedPrice;
    }

    public function setInvoiceTaxPrice($invoiceTaxPrice)
    {
        $this->invoiceTaxPrice = $invoiceTaxPrice;
        $this->apiParas['invoiceTaxPrice'] = $invoiceTaxPrice;
    }

    public function getInvoiceTaxPrice()
    {
        return $this->invoiceTaxPrice;
    }

    public function setCurrentBatch($currentBatch)
    {
        $this->currentBatch = $currentBatch;
        $this->apiParas['currentBatch'] = $currentBatch;
    }

    public function getCurrentBatch()
    {
        return $this->currentBatch;
    }

    public function setTotalBatch($totalBatch)
    {
        $this->totalBatch = $totalBatch;
        $this->apiParas['totalBatch'] = $totalBatch;
    }

    public function getTotalBatch()
    {
        return $this->totalBatch;
    }

    public function setTotalBatchInvoiceNakedAmount($totalBatchInvoiceNakedAmount)
    {
        $this->totalBatchInvoiceNakedAmount = $totalBatchInvoiceNakedAmount;
        $this->apiParas['totalBatchInvoiceNakedAmount'] = $totalBatchInvoiceNakedAmount;
    }

    public function getTotalBatchInvoiceNakedAmount()
    {
        return $this->totalBatchInvoiceNakedAmount;
    }

    public function setTotalBatchInvoiceTaxAmount($totalBatchInvoiceTaxAmount)
    {
        $this->totalBatchInvoiceTaxAmount = $totalBatchInvoiceTaxAmount;
        $this->apiParas['totalBatchInvoiceTaxAmount'] = $totalBatchInvoiceTaxAmount;
    }

    public function getTotalBatchInvoiceTaxAmount()
    {
        return $this->totalBatchInvoiceTaxAmount;
    }

    public function setTotalBatchInvoiceAmount($totalBatchInvoiceAmount)
    {
        $this->totalBatchInvoiceAmount = $totalBatchInvoiceAmount;
        $this->apiParas['totalBatchInvoiceAmount'] = $totalBatchInvoiceAmount;
    }

    public function getTotalBatchInvoiceAmount()
    {
        return $this->totalBatchInvoiceAmount;
    }

    public function setBillingType($billingType)
    {
        $this->billingType = $billingType;
        $this->apiParas['billingType'] = $billingType;
    }

    public function getBillingType()
    {
        return $this->billingType;
    }

    public function setInvoicePrice($invoicePrice)
    {
        $this->invoicePrice = $invoicePrice;
        $this->apiParas['invoicePrice'] = $invoicePrice;
    }

    public function getInvoicePrice()
    {
        return $this->invoicePrice;
    }

    public function setIsMerge($isMerge)
    {
        $this->isMerge = $isMerge;
        $this->apiParas['isMerge'] = $isMerge;
    }

    public function getIsMerge()
    {
        return $this->isMerge;
    }

    public function setPoNo($poNo)
    {
        $this->poNo = $poNo;
        $this->apiParas['poNo'] = $poNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

    public function setEnterpriseRegAddress($enterpriseRegAddress)
    {
        $this->enterpriseRegAddress = $enterpriseRegAddress;
        $this->apiParas['enterpriseRegAddress'] = $enterpriseRegAddress;
    }

    public function getEnterpriseRegAddress()
    {
        return $this->enterpriseRegAddress;
    }

    public function setEnterpriseRegPhone($enterpriseRegPhone)
    {
        $this->enterpriseRegPhone = $enterpriseRegPhone;
        $this->apiParas['enterpriseRegPhone'] = $enterpriseRegPhone;
    }

    public function getEnterpriseRegPhone()
    {
        return $this->enterpriseRegPhone;
    }

    public function setEnterpriseBankName($enterpriseBankName)
    {
        $this->enterpriseBankName = $enterpriseBankName;
        $this->apiParas['enterpriseBankName'] = $enterpriseBankName;
    }

    public function getEnterpriseBankName()
    {
        return $this->enterpriseBankName;
    }

    public function setEnterpriseBankAccount($enterpriseBankAccount)
    {
        $this->enterpriseBankAccount = $enterpriseBankAccount;
        $this->apiParas['enterpriseBankAccount'] = $enterpriseBankAccount;
    }

    public function getEnterpriseBankAccount()
    {
        return $this->enterpriseBankAccount;
    }
}