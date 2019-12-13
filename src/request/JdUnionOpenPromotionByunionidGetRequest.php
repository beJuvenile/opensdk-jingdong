<?php
/**
 *
 * User: 康荨歌歌歌
 * Date: 2018/10/17
 */

namespace JdSdk;

class JdUnionOpenPromotionByunionidGetRequest{
    private $is_sign            = true;
    private $request_type       = 'post';
    private $app_key = '';
    private $request_uri        = 'https://router.jd.com/api';
    private $request_data_type;
    private $method_name        = 'jd.union.open.promotion.byunionid.get';
    private $materialId = '';
    private $unionId = '';
    private $pid = '';
    private $couponUrl = '';
    private $chainType = '';
    private $positionId = '';
    private $subUnionId = '';

    public function setSubUnionId($subUnionId)
    {
        $this->subUnionId = $subUnionId;
    }
    public function setPositionId($positionId)
    {
        $this->positionId = $positionId;
    }
    public function setChainType($chainType)
    {
        $this->chainType = $chainType;
    }
    public function setCouponUrl($couponUrl)
    {
        $this->couponUrl = $couponUrl;
    }
    public function setPid($pid)
    {
        $this->pid = $pid;
    }
    public function setUnionId($unionId)
    {
        $this->unionId = $unionId;
    }
    public function setMaterialId($materialId)
    {
        $this->materialId = $materialId;
    }
    //公共参数
    public function getIsSign()
    {
        return $this->is_sign;
    }
    public function getRequestUri()
    {
        return $this->request_uri;
    }
    public function getRequestType()
    {
        return $this->request_type;
    }
    public function getRequestDataType()
    {
        return $this->request_data_type;
    }
    public function getParams()
    {
        $data['promotionCodeReq'] = [];
        if ($this->positionId)$data['promotionCodeReq']['positionId'] = $this->positionId;
        if ($this->subUnionId)$data['promotionCodeReq']['subUnionId'] = $this->subUnionId;
        if ($this->chainType)$data['promotionCodeReq']['chainType'] = $this->chainType;
        if ($this->couponUrl)$data['promotionCodeReq']['couponUrl'] = $this->couponUrl;
        if ($this->pid)$data['promotionCodeReq']['pid'] = $this->pid;
        if ($this->unionId)$data['promotionCodeReq']['unionId'] = $this->unionId;
        if ($this->materialId)$data['promotionCodeReq']['materialId'] = $this->materialId;
        $params = [
            'method'     => $this->method_name,
            'app_key'     => $this->app_key,
            'format'     => $this->request_type,
            'timestamp'     => date('Y-m-d H:i:s',time()),
            'v' => '1.0',
            '360buy_param_json' => json_encode($data)
        ];
        return $params;
    }
    /**
     * 解析结果
     *
     * @param   $response   string
     * @return  mixed
     */
    public function getResult($response)
    {
        $response = @json_decode($response, true);
        if (empty($response['jd_union_open_promotion_byunionid_get_responce']['getResult']) || $response['jd_union_open_promotion_byunionid_get_responce']['code'] != 0) return [];
        $info = @json_decode($response['jd_union_open_promotion_byunionid_get_responce']['getResult'], true);
//
        if (isset($info['code']) && $info['code'] == 200 && !empty($info['data'])){
            return $info['data'];
        }
        return [];
    }

}