<?php
/**
 *
 * User: 康荨歌歌歌
 * Date: 2018/5/24
 */
namespace JdSdk;

class JdClient{

	public $serverUrl = "https://api.jd.com/routerjson";

	public $accessToken;

	public $appId;  //原 app_key

	public $appSecret; //原 $appSecret

	public $version = "1.0";

	public $format = "json";

    private $result;
    private $is_sign;
    private $request;
    private $timestamp;
    private $request_type;
    private $request_data_type;
    private $params = [];
    /**
     * 执行一个请求
     */
    public function query()
    {
        try {
            if (array_key_exists('app_key', $this->params)) {
                $this->params['app_key'] = $this->appId;
            }
            if (array_key_exists('client_secret', $this->params)) {
                $this->params['client_secret'] = $this->appSecret;
            }

            if (array_key_exists('access_token', $this->params)) {
                $this->params['access_token'] = $this->accessToken;
            }

            if ($this->is_sign) {
                $this->params['sign'] = $this->makeRequestSign($this->params);
            }

            // get请求
            if ($this->request_type=='get') {
                $this->httpRequestGet($this->serverUrl, $this->params);
            }
            // post请求
            if ($this->request_type=='post') {
                $this->httpRequestPost($this->serverUrl, $this->params);
            }
        } catch (\Exception $e) {

//            $this->writeLogs($e->getMessage());
        }
    }

    /**
     * 设置应用ID
     *
     * @param   $id     string
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
    }

    /**
     * 设置应用secret
     *
     * @param   $secret     string
     */
    public function setAppSecret($appSecret)
    {
        $this->appSecret = $appSecret;
    }
    /**
     * 设置应用secret
     *
     * @param   $secret     string
     */
    public function setTimeStamp()
    {
        $this->timestamp = time();
    }
    /**
     * 初始化请求参数
     *
     * @param   $request    object
     * //是否需要签名
     * //请求方式 post||get
     * //数据格式 xml||json
     * //参数
     * //请求地址
     */
    public function setRequest($request)
    {
        $this->request              = $request;
        $this->is_sign              = $request->getIsSign();
        $this->request_type         = $request->getRequestType();
        $this->request_data_type    = $request->getRequestDataType();
        $this->params               = $request->getParams();
        $this->request_uri          = $request->getRequestUri();
    }

    /**
     * 设置access token
     *
     * @param   $token  string
     */
    public function setAccessToken($token)
    {
        $this->accessToken = $token;
    }

    /**
     * GET 请求方法
     *
     * @param   $uri    string
     * @param   $params array
     * @throws  Exception
     */
    private function httpRequestGet($uri, $params)
    {
        try {
            $request_url = $uri.'?'.http_build_query($params);

            $ch = curl_init();
            //设置选项，包括URL
            curl_setopt($ch, CURLOPT_URL, $request_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            //执行并获取HTML文档内容
            $resp = curl_exec($ch);

            if (curl_errno($ch)) throw new \Exception(curl_error($ch),0);

            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) throw new \Exception($resp, $httpStatusCode);

            //释放curl句柄
            curl_close($ch);
            $this->result = $resp;
        } catch (\Exception $e) {
            $exception = $e->getMessage();
            return [];
        }

    }

    /**
     * POST 请求方法
     *
     * @param   $uri    string
     * @param   $params array
     * @throws Exception
     */
    private function httpRequestPost($uri, $params)
    {
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $uri);
            curl_setopt($ch, CURLOPT_FAILONERROR, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_POST, true);
            //https 请求
            if (strlen($uri) > 5 && strtolower(substr($uri,0,5)) == 'https') {
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            }

            // 数据格式
            if ($this->request_data_type=='json') {

                curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));

            } else {
                if (is_array($params) && 0 < count($params)) {
                    $postBodyString = '';
                    foreach ($params as $k => $v)
                    {
                        $postBodyString .= $k.'=' . urlencode($v) . '&';
                    }
                    unset($k, $v);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString,0,-1));
                }
            }

            $resp = curl_exec($ch);
            if (curl_errno($ch)) throw new \Exception(curl_error($ch),0);

            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) throw new \Exception($resp, $httpStatusCode);
            curl_close($ch);
            $this->result = $resp;
        } catch (\Exception $e) {
            $exception = $e->getMessage();
            return [];
        }
    }

    /**
     * 生成请求签名
     *
     * @param   $params     array
     * @return  string
     */
    private function makeRequestSign($params)
    {
        ksort($params);
        $stringToBeSigned = $this->appSecret;

        foreach ($params as $k => $v)
        {
            if (!is_string($v))continue;

            if("@" != substr($v, 0, 1))
            {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;
        return strtoupper(md5($stringToBeSigned));
    }

    /**
     * 获取执行结果
     *
     * @return  mixed
     */
    public function result()
    {
        return $this->request->getResult($this->result);
    }
    /**
     * 获取执行结果  (ios端测试结果)
     *
     * @return  mixed
     */
    public function result_ios_test()
    {
        return $this->result;
    }




}