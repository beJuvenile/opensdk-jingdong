<?php
/**
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2020/7/2
 */
namespace OpenSDK\JingDong;

use OpenSDK\JingDong\Interfaces\Request;
use OpenSDK\JingDong\Libs\ResultSet;

class Client
{

    public $gateway = 'https://api.jd.com/routerjson';

    public $connectTimeout = 0;

    public $readTimeout = 0;

    public $appKey;

    public $appSecret;

    public $version = '2.0';

    public $format = 'json';

    private $jsonParamKey = '360buy_param_json';

    protected function generateSign($params)
    {
        ksort($params);
        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v)
        {
            if ('@' != substr($v, 0, 1)) {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;
        return strtoupper(md5($stringToBeSigned));
    }

    public function curl($url, $postFields = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($this->readTimeout) {
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
        }
        if ($this->connectTimeout) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
        }
        //https 请求
        if (strlen($url) > 5 && strtolower(substr($url,0,5)) == 'https' ) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        if (is_array($postFields) && 0 < count($postFields)) {
            $postBodyString = '';
            $postMultipart = false;
            foreach ($postFields as $k => $v)
            {
                if ('@' != substr($v, 0, 1)) {
                    //判断是不是文件上传
                    $postBodyString .= "$k=" . urlencode($v) . '&';
                } else {
                    //文件上传用multipart/form-data，否则用www-form-urlencoded
                    $postMultipart = true;
                }
            }
            unset($k, $v);
            curl_setopt($ch, CURLOPT_POST, true);
            if ($postMultipart) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
            } else {
                curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString,0,-1));
            }
        }
        $reponse = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new \Exception(curl_error($ch),0);
        } else {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) {
                throw new \Exception($reponse,$httpStatusCode);
            }
        }
        curl_close($ch);
        return $reponse;
    }

    public function execute(Request $request, $accessToken = null)
    {
        $result = new ResultSet();

        //组装系统参数
        $sysParams['app_key'] = $this->appKey;
        $sysParams['v'] = $this->version;
        $sysParams['method'] = $request->getApiMethodName();
        $sysParams['timestamp'] = $this->getCurrentTimeFormatted();
        $accessToken && $sysParams['access_token'] = $accessToken;

        //获取业务参数
        $apiParams = $request->getApiParas();
        $sysParams[$this->jsonParamKey] = $apiParams;

        //签名
        $sysParams['sign'] = $this->generateSign($sysParams);
        //系统参数放入GET请求串
        $requestUrl = $this->gateway . '?';
        foreach ($sysParams as $sysParamKey => $sysParamValue)
        {
            $requestUrl .= "$sysParamKey=" . urlencode($sysParamValue) . '&';
        }

        //发起HTTP请求
        try {
            $resp = $this->curl($requestUrl, $apiParams);
        } catch (\Exception $e) {
            $result->code = $e->getCode();
            $result->msg = $e->getMessage();
            return $result;
        }

        //解析JD返回结果
        $response = json_decode($resp, true);
        if (isset($response['error_response'])) {
            return $response['error_response'];
        } else {
            return $response[str_replace('.', '_', $request->getApiMethodName()) . '_responce'];
        }
    }

    private function getCurrentTimeFormatted()
    {
        return  date('Y-m-d H:i:s').'.000'.$this->getStandardOffsetUTC(date_default_timezone_get());
    }

    private function getStandardOffsetUTC($timezone)
    {
        if ($timezone == 'UTC') {
            return '+0000';
        } else {
            $timezone = new \DateTimeZone($timezone);
            $transitions = array_slice($timezone->getTransitions(), -3, null, true);

            foreach (array_reverse($transitions, true) as $transition)
            {
                if ($transition['isdst'] == 1) {
                    continue;
                }

                return sprintf('%+03d%02u', $transition['offset'] / 3600, abs($transition['offset']) % 3600 / 60);
            }

            return false;
        }
    }

}