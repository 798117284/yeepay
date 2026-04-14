<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class CreditscoreCreateRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $creditOrderId;
    /**
     * @var string
     */
    private $serviceId;
    /**
     * @var string
     */
    private $payWay;
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
    private $appId;
    /**
     * @var string
     */
    private $userId;
    /**
     * @var string
     */
    private $serviceSource;
    /**
     * @var string
     */
    private $goodsName;
    /**
     * @var string
     */
    private $postPaymentInfos;
    /**
     * @var string
     */
    private $postDiscountInfos;
    /**
     * @var string
     */
    private $locationInfo;
    /**
     * @var string
     */
    private $riskFundInfo;
    /**
     * @var string
     */
    private $timeRange;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $alipayCreditInfo;
    /**
     * @var string
     */
    private $userIp;
    /**
     * @var string
     */
    private $ypPromotionInfo;
    /**
     * @var string
     */
    private $needUserConfirm;

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
     * @return CreditscoreCreateRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
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
     * @return CreditscoreCreateRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets creditOrderId
     *
     * @return string
     */
    public function getCreditOrderId()
    {
        return $this->creditOrderId;
    }

    /**
     * Sets creditOrderId
     *
     * @param string $creditOrderId
     * @return CreditscoreCreateRequest
     */
    public function setCreditOrderId($creditOrderId)
    {
        $this->creditOrderId = $creditOrderId;
        return $this;
    }
    /**
     * Gets serviceId
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * Sets serviceId
     *
     * @param string $serviceId
     * @return CreditscoreCreateRequest
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
        return $this;
    }
    /**
     * Gets payWay
     *
     * @return string
     */
    public function getPayWay()
    {
        return $this->payWay;
    }

    /**
     * Sets payWay
     *
     * @param string $payWay
     * @return CreditscoreCreateRequest
     */
    public function setPayWay($payWay)
    {
        $this->payWay = $payWay;
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
     * @return CreditscoreCreateRequest
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
     * @return CreditscoreCreateRequest
     */
    public function setScene($scene)
    {
        $this->scene = $scene;
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
     * @return CreditscoreCreateRequest
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }
    /**
     * Gets userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets userId
     *
     * @param string $userId
     * @return CreditscoreCreateRequest
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * Gets serviceSource
     *
     * @return string
     */
    public function getServiceSource()
    {
        return $this->serviceSource;
    }

    /**
     * Sets serviceSource
     *
     * @param string $serviceSource
     * @return CreditscoreCreateRequest
     */
    public function setServiceSource($serviceSource)
    {
        $this->serviceSource = $serviceSource;
        return $this;
    }
    /**
     * Gets goodsName
     *
     * @return string
     */
    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * Sets goodsName
     *
     * @param string $goodsName
     * @return CreditscoreCreateRequest
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        return $this;
    }
    /**
     * Gets postPaymentInfos
     *
     * @return string
     */
    public function getPostPaymentInfos()
    {
        return $this->postPaymentInfos;
    }

    /**
     * Sets postPaymentInfos
     *
     * @param string $postPaymentInfos
     * @return CreditscoreCreateRequest
     */
    public function setPostPaymentInfos($postPaymentInfos)
    {
        $this->postPaymentInfos = $postPaymentInfos;
        return $this;
    }
    /**
     * Gets postDiscountInfos
     *
     * @return string
     */
    public function getPostDiscountInfos()
    {
        return $this->postDiscountInfos;
    }

    /**
     * Sets postDiscountInfos
     *
     * @param string $postDiscountInfos
     * @return CreditscoreCreateRequest
     */
    public function setPostDiscountInfos($postDiscountInfos)
    {
        $this->postDiscountInfos = $postDiscountInfos;
        return $this;
    }
    /**
     * Gets locationInfo
     *
     * @return string
     */
    public function getLocationInfo()
    {
        return $this->locationInfo;
    }

    /**
     * Sets locationInfo
     *
     * @param string $locationInfo
     * @return CreditscoreCreateRequest
     */
    public function setLocationInfo($locationInfo)
    {
        $this->locationInfo = $locationInfo;
        return $this;
    }
    /**
     * Gets riskFundInfo
     *
     * @return string
     */
    public function getRiskFundInfo()
    {
        return $this->riskFundInfo;
    }

    /**
     * Sets riskFundInfo
     *
     * @param string $riskFundInfo
     * @return CreditscoreCreateRequest
     */
    public function setRiskFundInfo($riskFundInfo)
    {
        $this->riskFundInfo = $riskFundInfo;
        return $this;
    }
    /**
     * Gets timeRange
     *
     * @return string
     */
    public function getTimeRange()
    {
        return $this->timeRange;
    }

    /**
     * Sets timeRange
     *
     * @param string $timeRange
     * @return CreditscoreCreateRequest
     */
    public function setTimeRange($timeRange)
    {
        $this->timeRange = $timeRange;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return CreditscoreCreateRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets alipayCreditInfo
     *
     * @return string
     */
    public function getAlipayCreditInfo()
    {
        return $this->alipayCreditInfo;
    }

    /**
     * Sets alipayCreditInfo
     *
     * @param string $alipayCreditInfo
     * @return CreditscoreCreateRequest
     */
    public function setAlipayCreditInfo($alipayCreditInfo)
    {
        $this->alipayCreditInfo = $alipayCreditInfo;
        return $this;
    }
    /**
     * Gets userIp
     *
     * @return string
     */
    public function getUserIp()
    {
        return $this->userIp;
    }

    /**
     * Sets userIp
     *
     * @param string $userIp
     * @return CreditscoreCreateRequest
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
        return $this;
    }
    /**
     * Gets ypPromotionInfo
     *
     * @return string
     */
    public function getYpPromotionInfo()
    {
        return $this->ypPromotionInfo;
    }

    /**
     * Sets ypPromotionInfo
     *
     * @param string $ypPromotionInfo
     * @return CreditscoreCreateRequest
     */
    public function setYpPromotionInfo($ypPromotionInfo)
    {
        $this->ypPromotionInfo = $ypPromotionInfo;
        return $this;
    }
    /**
     * Gets needUserConfirm
     *
     * @return string
     */
    public function getNeedUserConfirm()
    {
        return $this->needUserConfirm;
    }

    /**
     * Sets needUserConfirm
     *
     * @param string $needUserConfirm
     * @return CreditscoreCreateRequest
     */
    public function setNeedUserConfirm($needUserConfirm)
    {
        $this->needUserConfirm = $needUserConfirm;
        return $this;
    }

    public static function getOperationId()
    {
        return 'creditscoreCreate';
    }


}
