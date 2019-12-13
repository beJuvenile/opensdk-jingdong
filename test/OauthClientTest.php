<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../vendor/autoload.php';

use JdSdk\JdClient;
use JdSdk\JdUnionOpenGoodsQueryRequest;
use JdSdk\JdUnionOpenPromotionByunionidGetRequest;
use JdSdk\JdUnionOpenOrderQueryGetRequest;
use JdSdk\JdUnionOpenOrderBonusQueryRequest;

class OauthClientTest
{

    private $appKey = 'c3bd9bae84174deda49e954e19daf928';

    private $appSecret = '5e035595457044a08f210c473766d42d';

    /**
     * 查全网
     */
    public function jdUnionOpenGoodsQuery($page=1,$pageSize=20,$keyword='',$skuIds='',$isCoupon='',$sort='',$sort_name='')
    {
        $client = new JdClient();
        $client->setAppId($this->appKey);
        $client->setAppSecret($this->appSecret);
        $request = new JdUnionOpenGoodsQueryRequest();
        $request->setPage($page);
        $request->setPageSize($pageSize);
        $request->setIsCoupon($isCoupon);
        if(!empty($skuIds)){
            $skuArr = explode(',',$skuIds);
            $request->setskuIds($skuArr);
        }
        $request->setKeyword($keyword);
        $request->setSortName($sort_name);
        $request->setsort($sort);
        $client->setRequest($request);
        $client->query($client);
        return $client->result();
    }

    /**
     *  京东转链
     *
     * 通过商品链接、领券链接、活动链接获取普通推广链接或优惠券二合一推广链接，支持传入subunionid参数，可用于区分媒体自身的用户ID。需向cps-qxsq jd.com申请权限。功能同宙斯接口的优惠券,商品二合一转接API-通过subUnionId获取推广链接、联盟微信手q通过subUnionId获取推广链接。
     */
    public function jdUnionOpenPromotionByunionidGet($materialId,$unionId,$pid,$couponUrl,$chainType,$positionId = '',$subUnionId = '')
    {
        $client = new JdClient();
        $client->setAppId($this->appKey);
        $client->setAppSecret($this->appSecret);
        $request = new JdUnionOpenPromotionByunionidGetRequest();
        $request->setMaterialId($materialId);
        $request->setUnionId($unionId);
        if($positionId)$request->setPositionId($positionId);
        if($subUnionId)$request->setSubUnionId($subUnionId);
        $request->setPid($pid);
        $request->setCouponUrl($couponUrl);
        $request->setChainType($chainType);
        $client->setRequest($request);
        $client->query($client);
//        print_r($client);exit;
        return $client->result();
    }

    /**
     *  京东订单
     *
     * 查询推广订单及佣金信息，会随着订单状态变化更新数据，支持按下单时间、完成时间或状态更新时间查询，通常可按更新时间每分钟调用一次来获取订单的最新状态。支持subunionid、推广位、PID、工具商角色订单查询。功能相当于原宙斯接口的订单查询、 查询引入订单、查询业绩订单、工具商订单查询、工具商引入数据查询接口、工具商业绩数据查询接口、PID订单查询、PID引入订单查询、PID业绩订单查询。
     *
     */
    public function jdUnionOpenOrderQuery($pageNo,$pageSize,$type,$time,$key)
    {
        $client = new JdClient();
        $client->setAppId($this->appKey);
        $client->setAppSecret($this->appSecret);
        $request = new JdUnionOpenOrderQueryGetRequest();
        $request->setPageNo($pageNo);
        $request->setPageSize($pageSize);
        $request->setType($type);
        $request->setTime($time);
        $request->setKey($key);
        $client->setRequest($request);
        $client->query($client);
        return $client->result();
    }

    /**
     *  京东奖励订单
     *
     * 查询推广订单及佣金信息，会随着订单状态变化更新数据，支持按下单时间、完成时间或状态更新时间查询，通常可按更新时间每分钟调用一次来获取订单的最新状态。支持subunionid、推广位、PID、工具商角色订单查询。功能相当于原宙斯接口的订单查询、 查询引入订单、查询业绩订单、工具商订单查询、工具商引入数据查询接口、工具商业绩数据查询接口、PID订单查询、PID引入订单查询、PID业绩订单查询。
     *
     */
    public function jdunionOpenOrderBonusQuery($pageNo,$pageSize,$startTime,$endTime,$optType,$sortValue)
    {
        $client = new JdClient();
        $client->setAppId($this->appKey);
        $client->setAppSecret($this->appSecret);
        $request = new JdUnionOpenOrderBonusQueryRequest();
        $request->setStartTime($startTime);
        $request->setEndTime($endTime);
        $request->setSortValue($sortValue);
        $request->setOptType($optType);
        $request->setPageNo($pageNo);
        $request->setPageSize($pageSize);
        $client->setRequest($request);
        $client->query($client);
        return $client->result();
    }
}

(new OauthClientTest())();