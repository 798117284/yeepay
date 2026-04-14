<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class TutelagePrePayRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $orderId;
    /**
     * @var float
     */
    private $orderAmount;
    /**
     * @var \DateTime
     */
    private $expiredTime;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $goodsName;
    /**
     * @var string
     */
    private $fundProcessType;
    /**
     * @var string
     */
    private $notifyUrl;
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
    private $userIp;
    /**
     * @var string
     */
    private $limitCredit;
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $csUrl;
    /**
     * @var string
     */
    private $redirectUrl;
    /**
     * @var string
     */
    private $businessInfo;
    /**
     * @var string
     */
    private $productInfo;
    /**
     * @var string
     */
    private $ypAccountBookNo;
    /**
     * @var string
     */
    private $divideDetail;
    /**
     * @var string
     */
    private $divideNotifyUrl;
    /**
     * @var string
     */
    private $returnSchema;
    /**
     * @var string
     */
    private $channelSpecifiedInfo;
    /**
     * @var string
     */
    private $channelPromotionInfo;
    /**
     * @var string
     */
    private $identityInfo;
    /**
     * @var string
     */
    private $accountLinkInfo;
    /**
     * @var string
     */
    private $ypPromotionInfo;
    /**
     * @var string
     */
    private $channelActivityInfo;
    /**
     * @var string
     */
    private $feeSubsidyInfo;
    /**
     * @var string
     */
    private $merchantMiniInfo;
    /**
     * @var string
     */
    private $receiverAccountType;

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
     * @return TutelagePrePayRequest
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
     * @return TutelagePrePayRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId
     *
     * @param string $orderId
     * @return TutelagePrePayRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount
     * @return TutelagePrePayRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets expiredTime
     *
     * @return \DateTime
     */
    public function getExpiredTime()
    {
        return $this->expiredTime;
    }

    /**
     * Sets expiredTime
     *
     * @param \DateTime $expiredTime
     * @return TutelagePrePayRequest
     */
    public function setExpiredTime($expiredTime)
    {
        $this->expiredTime = $expiredTime;
        return $this;
    }
    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets memo
     *
     * @param string $memo
     * @return TutelagePrePayRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
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
     * @return TutelagePrePayRequest
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        return $this;
    }
    /**
     * Gets fundProcessType
     *
     * @return string
     */
    public function getFundProcessType()
    {
        return $this->fundProcessType;
    }

    /**
     * Sets fundProcessType
     *
     * @param string $fundProcessType
     * @return TutelagePrePayRequest
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
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
     * @return TutelagePrePayRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return TutelagePrePayRequest
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
     * @return TutelagePrePayRequest
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
     * @return TutelagePrePayRequest
     */
    public function setScene($scene)
    {
        $this->scene = $scene;
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
     * @return TutelagePrePayRequest
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
        return $this;
    }
    /**
     * Gets limitCredit
     *
     * @return string
     */
    public function getLimitCredit()
    {
        return $this->limitCredit;
    }

    /**
     * Sets limitCredit
     *
     * @param string $limitCredit
     * @return TutelagePrePayRequest
     */
    public function setLimitCredit($limitCredit)
    {
        $this->limitCredit = $limitCredit;
        return $this;
    }
    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets token
     *
     * @param string $token
     * @return TutelagePrePayRequest
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
    /**
     * Gets csUrl
     *
     * @return string
     */
    public function getCsUrl()
    {
        return $this->csUrl;
    }

    /**
     * Sets csUrl
     *
     * @param string $csUrl
     * @return TutelagePrePayRequest
     */
    public function setCsUrl($csUrl)
    {
        $this->csUrl = $csUrl;
        return $this;
    }
    /**
     * Gets redirectUrl
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * Sets redirectUrl
     *
     * @param string $redirectUrl
     * @return TutelagePrePayRequest
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
    /**
     * Gets businessInfo
     *
     * @return string
     */
    public function getBusinessInfo()
    {
        return $this->businessInfo;
    }

    /**
     * Sets businessInfo
     *
     * @param string $businessInfo
     * @return TutelagePrePayRequest
     */
    public function setBusinessInfo($businessInfo)
    {
        $this->businessInfo = $businessInfo;
        return $this;
    }
    /**
     * Gets productInfo
     *
     * @return string
     */
    public function getProductInfo()
    {
        return $this->productInfo;
    }

    /**
     * Sets productInfo
     *
     * @param string $productInfo
     * @return TutelagePrePayRequest
     */
    public function setProductInfo($productInfo)
    {
        $this->productInfo = $productInfo;
        return $this;
    }
    /**
     * Gets ypAccountBookNo
     *
     * @return string
     */
    public function getYpAccountBookNo()
    {
        return $this->ypAccountBookNo;
    }

    /**
     * Sets ypAccountBookNo
     *
     * @param string $ypAccountBookNo
     * @return TutelagePrePayRequest
     */
    public function setYpAccountBookNo($ypAccountBookNo)
    {
        $this->ypAccountBookNo = $ypAccountBookNo;
        return $this;
    }
    /**
     * Gets divideDetail
     *
     * @return string
     */
    public function getDivideDetail()
    {
        return $this->divideDetail;
    }

    /**
     * Sets divideDetail
     *
     * @param string $divideDetail
     * @return TutelagePrePayRequest
     */
    public function setDivideDetail($divideDetail)
    {
        $this->divideDetail = $divideDetail;
        return $this;
    }
    /**
     * Gets divideNotifyUrl
     *
     * @return string
     */
    public function getDivideNotifyUrl()
    {
        return $this->divideNotifyUrl;
    }

    /**
     * Sets divideNotifyUrl
     *
     * @param string $divideNotifyUrl
     * @return TutelagePrePayRequest
     */
    public function setDivideNotifyUrl($divideNotifyUrl)
    {
        $this->divideNotifyUrl = $divideNotifyUrl;
        return $this;
    }
    /**
     * Gets returnSchema
     *
     * @return string
     */
    public function getReturnSchema()
    {
        return $this->returnSchema;
    }

    /**
     * Sets returnSchema
     *
     * @param string $returnSchema
     * @return TutelagePrePayRequest
     */
    public function setReturnSchema($returnSchema)
    {
        $this->returnSchema = $returnSchema;
        return $this;
    }
    /**
     * Gets channelSpecifiedInfo
     *
     * @return string
     */
    public function getChannelSpecifiedInfo()
    {
        return $this->channelSpecifiedInfo;
    }

    /**
     * Sets channelSpecifiedInfo
     *
     * @param string $channelSpecifiedInfo
     * @return TutelagePrePayRequest
     */
    public function setChannelSpecifiedInfo($channelSpecifiedInfo)
    {
        $this->channelSpecifiedInfo = $channelSpecifiedInfo;
        return $this;
    }
    /**
     * Gets channelPromotionInfo
     *
     * @return string
     */
    public function getChannelPromotionInfo()
    {
        return $this->channelPromotionInfo;
    }

    /**
     * Sets channelPromotionInfo
     *
     * @param string $channelPromotionInfo
     * @return TutelagePrePayRequest
     */
    public function setChannelPromotionInfo($channelPromotionInfo)
    {
        $this->channelPromotionInfo = $channelPromotionInfo;
        return $this;
    }
    /**
     * Gets identityInfo
     *
     * @return string
     */
    public function getIdentityInfo()
    {
        return $this->identityInfo;
    }

    /**
     * Sets identityInfo
     *
     * @param string $identityInfo
     * @return TutelagePrePayRequest
     */
    public function setIdentityInfo($identityInfo)
    {
        $this->identityInfo = $identityInfo;
        return $this;
    }
    /**
     * Gets accountLinkInfo
     *
     * @return string
     */
    public function getAccountLinkInfo()
    {
        return $this->accountLinkInfo;
    }

    /**
     * Sets accountLinkInfo
     *
     * @param string $accountLinkInfo
     * @return TutelagePrePayRequest
     */
    public function setAccountLinkInfo($accountLinkInfo)
    {
        $this->accountLinkInfo = $accountLinkInfo;
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
     * @return TutelagePrePayRequest
     */
    public function setYpPromotionInfo($ypPromotionInfo)
    {
        $this->ypPromotionInfo = $ypPromotionInfo;
        return $this;
    }
    /**
     * Gets channelActivityInfo
     *
     * @return string
     */
    public function getChannelActivityInfo()
    {
        return $this->channelActivityInfo;
    }

    /**
     * Sets channelActivityInfo
     *
     * @param string $channelActivityInfo
     * @return TutelagePrePayRequest
     */
    public function setChannelActivityInfo($channelActivityInfo)
    {
        $this->channelActivityInfo = $channelActivityInfo;
        return $this;
    }
    /**
     * Gets feeSubsidyInfo
     *
     * @return string
     */
    public function getFeeSubsidyInfo()
    {
        return $this->feeSubsidyInfo;
    }

    /**
     * Sets feeSubsidyInfo
     *
     * @param string $feeSubsidyInfo
     * @return TutelagePrePayRequest
     */
    public function setFeeSubsidyInfo($feeSubsidyInfo)
    {
        $this->feeSubsidyInfo = $feeSubsidyInfo;
        return $this;
    }
    /**
     * Gets merchantMiniInfo
     *
     * @return string
     */
    public function getMerchantMiniInfo()
    {
        return $this->merchantMiniInfo;
    }

    /**
     * Sets merchantMiniInfo
     *
     * @param string $merchantMiniInfo
     * @return TutelagePrePayRequest
     */
    public function setMerchantMiniInfo($merchantMiniInfo)
    {
        $this->merchantMiniInfo = $merchantMiniInfo;
        return $this;
    }
    /**
     * Gets receiverAccountType
     *
     * @return string
     */
    public function getReceiverAccountType()
    {
        return $this->receiverAccountType;
    }

    /**
     * Sets receiverAccountType
     *
     * @param string $receiverAccountType
     * @return TutelagePrePayRequest
     */
    public function setReceiverAccountType($receiverAccountType)
    {
        $this->receiverAccountType = $receiverAccountType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'tutelagePrePay';
    }


}
