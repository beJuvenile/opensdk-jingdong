<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=576&apiId=3928&apiName=biz.afterSale.afsApply.create
 */
namespace OpenSDK\JingDong\Request\Dto;


use OpenSDK\JingDong\Interfaces\Dto;

class BizAfterSaleAfsApplyCreateCustomerDto implements Dto
{

    private $contactName; // 联系人

    private $tel; // 联系电话

    private $mobilePhone; // 联系手机

    private $email; // email

    private $postcode; // 邮编

    private $params;

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode($postcode)
    {
        $this->params['customerPostcode'] = $postcode;
        $this->postcode = $postcode;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->params['customerEmail'] = $email;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->params['customerMobilePhone'] = $mobilePhone;
        $this->mobilePhone = $mobilePhone;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @param string $contactName
     */
    public function setContactName($contactName)
    {
        $this->params['customerContactName'] = $contactName;
        $this->contactName = $contactName;
    }

    /**
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel($tel)
    {
        $this->params['customerTel'] = $tel;
        $this->tel = $tel;
    }


    public function getParams()
    {
        return $this->params;
    }
}