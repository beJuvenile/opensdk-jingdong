<?php
/**
 *
 * User: 康荨歌歌歌
 * Date: 2018/10/17
 */

namespace JdSdk;

class JdUnionOpenOrderQueryGetRequest{
    private $is_sign            = true;
    private $request_type       = 'post';
    private $request_data_type;
    private $request_uri        = 'https://router.jd.com/api';
    private $method_name        = 'jd.union.open.order.query';
    private $app_key;
    //业务参数
    private $pageNo;
    private $pageSize;
    private $type;
    private $time;
    private $childUnionId;
    private $key;


    public function setKey($key)
    {
        $this->key = $key;
    }
    public function setChildUnionId($childUnionId)
    {
        $this->childUnionId = $childUnionId;
    }
    public function setTime($time)
    {
        $this->time = $time;
    }
    public function setType($type)
    {
        $this->type = $type;
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
        if ($this->type)$data['orderReq']['type'] = $this->type;
        if ($this->time)$data['orderReq']['time'] = $this->time;
        if ($this->childUnionId)$data['orderReq']['childUnionId'] = $this->childUnionId;
        if ($this->key)$data['orderReq']['key'] = $this->key;
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
     * @param   $response   stringjd_union_open_goods_query_responce
     * @return  mixed
     */
    public function getResult($response)
    {
        $response = @json_decode($response, true);
        if (empty($response['jd_union_open_order_query_responce']['queryResult']) || $response['jd_union_open_order_query_responce']['code'] != 0) return [];
        $info = @json_decode($response['jd_union_open_order_query_responce']['queryResult'], true);
        if (isset($info['code']) && $info['code'] == 200){
            return $info;
        }
        return [];
    }

}