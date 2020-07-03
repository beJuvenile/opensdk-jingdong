<?php
/**
 * @link https://open.jd.com/home/home#/doc/api?apiCateId=566&apiId=4199&apiName=jd.kepler.settled.aftermarket.auditcancel
 */
namespace OpenSDK\JingDong\Request\Dto;

use OpenSDK\JingDong\Interfaces\Dto;

class JdKeplerSettledAftermarketOperatorInfoDto implements Dto
{

    private $pin; // 当前用户信息,操作人账号，必填

    private $name; // 操作人昵称,必填

    private $remark; // 当前用户信息,操作备注

    private $date; // 当前用户信息,操作时间

    private $params;


    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return string
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param string $pin
     */
    public function setPin($pin)
    {
        $this->params['operatorPin'] = $pin;
        $this->pin = $pin;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->params['operatorName'] = $name;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->params['operatorRemark'] = $remark;
        $this->remark = $remark;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->params['operatorDate'] = $date;
        $this->date = $date;
    }


}