<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class GetAuthInfoV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $rawData;
    /**
     * @var string
     */
    private $storeId;
    /**
     * @var string
     */
    private $storeName;
    /**
     * @var string
     */
    private $deviceId;
    /**
     * @var string
     */
    private $channel;
    /**
     * @var string
     */
    private $scene;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $attach;
    /**
     * @var string
     */
    private $appId;

    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return GetAuthInfoV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets rawData
     *
     * @return string
     */
    public function getRawData()
    {
        return $this->rawData;
    }

    /**
     * Sets rawData
     *
     * @param string $rawData
     * @return GetAuthInfoV10Request
     */
    public function setRawData($rawData)
    {
        $this->rawData = $rawData;
        return $this;
    }
    /**
     * Gets storeId
     *
     * @return string
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * Sets storeId
     *
     * @param string $storeId
     * @return GetAuthInfoV10Request
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Gets storeName
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Sets storeName
     *
     * @param string $storeName
     * @return GetAuthInfoV10Request
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        return $this;
    }
    /**
     * Gets deviceId
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Sets deviceId
     *
     * @param string $deviceId
     * @return GetAuthInfoV10Request
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }
    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets channel
     *
     * @param string $channel
     * @return GetAuthInfoV10Request
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * Gets scene
     *
     * @return string
     */
    public function getScene()
    {
        return $this->scene;
    }

    /**
     * Sets scene
     *
     * @param string $scene
     * @return GetAuthInfoV10Request
     */
    public function setScene($scene)
    {
        $this->scene = $scene;
        return $this;
    }
    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return GetAuthInfoV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets attach
     *
     * @return string
     */
    public function getAttach()
    {
        return $this->attach;
    }

    /**
     * Sets attach
     *
     * @param string $attach
     * @return GetAuthInfoV10Request
     */
    public function setAttach($attach)
    {
        $this->attach = $attach;
        return $this;
    }
    /**
     * Gets appId
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Sets appId
     *
     * @param string $appId
     * @return GetAuthInfoV10Request
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'get_auth_info_v1_0';
    }


}
