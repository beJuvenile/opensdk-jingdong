<?php
/**
 *
 * User: 康荨歌歌歌
 * Date: 2018/10/17
 */

namespace JdSdk;

class JdUnionOpenGoodsQueryRequest{
    private $is_sign            = true;
    private $request_type       = 'post';
    private $request_data_type;
    private $request_uri        = 'https://router.jd.com/api';
    private $method_name        = 'jd.union.open.goods.query';
    private $app_key;
    private $page;
    private $pageSize;
    private $skuIds;
    private $keyword;
    private $sortName;
    private $sort;
    private $isPG;
    private $isCoupon;
    private $shopId;

    //公共参数
    public function getIsSign()
    {
        return $this->is_sign;
    }
    public function setPage($page)
    {
        return $this->page = $page;
    }
    public function setPageSize($pageSize)
    {
        return $this->pageSize = $pageSize;
    }
    public function setSkuIds($skuIds)
    {
        return $this->skuIds = $skuIds;
    }
    public function setKeyword($keyword)
    {
        return $this->keyword = $keyword;
    }
    public function setSortName($sortName)
    {
        return $this->sortName = $sortName;
    }
    public function setsort($sort)
    {
        return $this->sort = $sort;
    }
    public function setIsCoupon($isCoupon)
    {
        return $this->isCoupon = $isCoupon;
    }
    public function setIsPG($isPG)
    {
        return $this->isPG = $isPG;
    }
    public function setShopId($shopId)
    {
        return $this->shopId = $shopId;
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
        $data['goodsReqDTO'] = [];

        if ($this->skuIds)$data['goodsReqDTO']['skuIds'] = $this->skuIds;
        if ($this->page)$data['goodsReqDTO']['pageIndex'] = $this->page;
        if ($this->pageSize)$data['goodsReqDTO']['pageSize'] = $this->pageSize;
        if ($this->keyword)$data['goodsReqDTO']['keyword'] = $this->keyword;
        if ($this->sortName)$data['goodsReqDTO']['sortName'] = $this->sortName;
        if ($this->sort)$data['goodsReqDTO']['sort'] = $this->sort;
        if ($this->isPG)$data['goodsReqDTO']['isPG'] = $this->isPG;
        if ($this->isCoupon)$data['goodsReqDTO']['isCoupon'] = $this->isCoupon;
        if ($this->shopId)$data['goodsReqDTO']['shopId'] = $this->shopId;
        $params = [
            'method'     => $this->method_name,
            'app_key'     => $this->app_key,
            'format'     => $this->request_type,
//            'access_token' => '',
//            'sign_method'     => 'md5',
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
        if (empty($response['jd_union_open_goods_query_responce']['queryResult']) || $response['jd_union_open_goods_query_responce']['code'] != 0) return [];
        $info = @json_decode($response['jd_union_open_goods_query_responce']['queryResult'], true);
        if (isset($info['code']) && $info['code'] == 200 && !empty($info['data'])){
            return $info;
        }
        return [];
    }

}