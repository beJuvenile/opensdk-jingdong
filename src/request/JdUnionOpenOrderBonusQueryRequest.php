<?php
/**
 *
 * User: 康荨歌歌歌
 * Date: 2018/10/17
 */

namespace JdSdk;

class JdUnionOpenOrderBonusQueryRequest{
    private $is_sign            = true;
    private $request_type       = 'post';
    private $request_data_type;
    private $request_uri        = 'https://router.jd.com/api';
    private $method_name        = 'jd.union.open.order.bonus.query';
    private $app_key;
    //业务参数
    private $pageNo;
    private $pageSize;
    private $optType;
    private $startTime;
    private $endTime;
    private $sortValue;

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    public function setSortValue($sortValue)
    {
        $this->sortValue = $sortValue;
    }
    public function setOptType($optType)
    {
        $this->optType = $optType;
    }
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }
    //公共参数
    public function getIsSign()
    {
        return $this->is_sign;
    }
    public function getRequestType()
    {
        return $this->request_type;
    }
    public function getRequestDataType()
    {
        return $this->request_data_type;
    }
    public function getRequestUri()
    {
        return $this->request_uri;
    }
    public function getParams()
    {
        $data['orderReq'] = [];

        if ($this->pageNo)$data['orderReq']['pageNo'] = $this->pageNo;
        if ($this->pageSize)$data['orderReq']['pageSize'] = $this->pageSize;
        if ($this->optType)$data['orderReq']['optType'] = $this->optType;
        if ($this->startTime)$data['orderReq']['startTime'] = $this->startTime;
        if ($this->endTime)$data['orderReq']['endTime'] = $this->endTime;
        if ($this->sortValue)$data['orderReq']['sortValue'] = $this->sortValue;
        $params = [
            'method'     => $this->method_name,
            'app_key'     => $this->app_key,
            'format'     => $this->request_type,
//            'access_token' => '',
            'timestamp'     => date('Y-m-d H:i:s',time()),
            'v' => '1.0',
            '360buy_param_json' => json_encode($data)
        ];

        return $params;
    }
    /**
     * 解析结果
     *
     * @param   $response
     * @return  mixed
     */
    public function getResult($response)
    {
        $response = @json_decode($response, true);
        if (empty($response['jd_union_open_order_bonus_query_responce']['queryResult']) || $response['jd_union_open_order_bonus_query_responce']['code'] != 0) return [];
        $info = @json_decode($response['jd_union_open_order_bonus_query_responce']['queryResult'], true);

        if (isset($info['code']) && $info['code'] == 200){
            return $info;
        }
        return [];
    }

}