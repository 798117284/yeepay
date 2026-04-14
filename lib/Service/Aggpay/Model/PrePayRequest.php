<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class PrePayRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $notifyUrl;
    /**
     * @var string
     */
    private $redirectUrl;
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
    private $promotionType;
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
    private $userIp;
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
    private $limitCredit;
    /**
     * @var string
     */
    private $uniqueOrderNo;
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
    private $accountLinkInfo;
    /**
     * @var string
     */
    private $ypPromotionInfo;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $businessInfo;
    /**
     * @var string
     */
    private $userAuthCode;
    /**
     * @var string
     */
    private $channelActivityInfo;
    /**
     * @var string
     */
    private $terminalId;
    /**
     * @var string
     */
    private $terminalSceneInfo;
    /**
     * @var string
     */
    private $ypAccountBookNo;
    /**
     * @var string
     */
    private $terminalInfo;
    /**
     * @var string
     */
    private $productInfo;
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
    private $feeSubsidyInfo;
    /**
     * @var string
     */
    private $agreementId;
    /**
     * @var string
     */
    private $creditOrderId;
    /**
     * @var string
     */
    private $payMedium;
    /**
     * @var string
     */
    private $receiverAccountType;
    /**
     * @var string
     */
    private $jdbtPaymentInfo;
    /**
     * @var string
     */
    private $appUpIdentifier;
    /**
     * @var string
     */
    private $preConsumeNotifyUrl;

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
     * @return PrePayRequest
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
     * @return PrePayRequest
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
     * @return PrePayRequest
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
     * @return PrePayRequest
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
     * @return PrePayRequest
     */
    public function setExpiredTime($expiredTime)
    {
        $this->expiredTime = $expiredTime;
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
     * @return PrePayRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return PrePayRequest
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
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
     * @return PrePayRequest
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
     * @return PrePayRequest
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
     * @return PrePayRequest
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
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
     * @return PrePayRequest
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
     * @return PrePayRequest
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
     * @return PrePayRequest
     */
    public function setScene($scene)
    {
        $this->scene = $scene;
        return $this;
    }
    /**
     * Gets promotionType
     *
     * @return string
     */
    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * Sets promotionType
     *
     * @param string $promotionType
     * @return PrePayRequest
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;
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
     * @return PrePayRequest
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
     * @return PrePayRequest
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
     * @return PrePayRequest
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
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
     * @return PrePayRequest
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
     * @return PrePayRequest
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
     * @return PrePayRequest
     */
    public function setIdentityInfo($identityInfo)
    {
        $this->identityInfo = $identityInfo;
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
     * @return PrePayRequest
     */
    public function setLimitCredit($limitCredit)
    {
        $this->limitCredit = $limitCredit;
        return $this;
    }
    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->uniqueOrderNo;
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo
     * @return PrePayRequest
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
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
     * @return PrePayRequest
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
     * @return PrePayRequest
     */
    public function setCsUrl($csUrl)
    {
        $this->csUrl = $csUrl;
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
     * @return PrePayRequest
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
     * @return PrePayRequest
     */
    public function setYpPromotionInfo($ypPromotionInfo)
    {
        $this->ypPromotionInfo = $ypPromotionInfo;
        return $this;
    }
    /**
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode
     * @return PrePayRequest
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
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
     * @return PrePayRequest
     */
    public function setBusinessInfo($businessInfo)
    {
        $this->businessInfo = $businessInfo;
        return $this;
    }
    /**
     * Gets userAuthCode
     *
     * @return string
     */
    public function getUserAuthCode()
    {
        return $this->userAuthCode;
    }

    /**
     * Sets userAuthCode
     *
     * @param string $userAuthCode
     * @return PrePayRequest
     */
    public function setUserAuthCode($userAuthCode)
    {
        $this->userAuthCode = $userAuthCode;
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
     * @return PrePayRequest
     */
    public function setChannelActivityInfo($channelActivityInfo)
    {
        $this->channelActivityInfo = $channelActivityInfo;
        return $this;
    }
    /**
     * Gets terminalId
     *
     * @return string
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * Sets terminalId
     *
     * @param string $terminalId
     * @return PrePayRequest
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
        return $this;
    }
    /**
     * Gets terminalSceneInfo
     *
     * @return string
     */
    public function getTerminalSceneInfo()
    {
        return $this->terminalSceneInfo;
    }

    /**
     * Sets terminalSceneInfo
     *
     * @param string $terminalSceneInfo
     * @return PrePayRequest
     */
    public function setTerminalSceneInfo($terminalSceneInfo)
    {
        $this->terminalSceneInfo = $terminalSceneInfo;
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
     * @return PrePayRequest
     */
    public function setYpAccountBookNo($ypAccountBookNo)
    {
        $this->ypAccountBookNo = $ypAccountBookNo;
        return $this;
    }
    /**
     * Gets terminalInfo
     *
     * @return string
     */
    public function getTerminalInfo()
    {
        return $this->terminalInfo;
    }

    /**
     * Sets terminalInfo
     *
     * @param string $terminalInfo
     * @return PrePayRequest
     */
    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
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
     * @return PrePayRequest
     */
    public function setProductInfo($productInfo)
    {
        $this->productInfo = $productInfo;
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
     * @return PrePayRequest
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
     * @return PrePayRequest
     */
    public function setDivideNotifyUrl($divideNotifyUrl)
    {
        $this->divideNotifyUrl = $divideNotifyUrl;
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
     * @return PrePayRequest
     */
    public function setFeeSubsidyInfo($feeSubsidyInfo)
    {
        $this->feeSubsidyInfo = $feeSubsidyInfo;
        return $this;
    }
    /**
     * Gets agreementId
     *
     * @return string
     */
    public function getAgreementId()
    {
        return $this->agreementId;
    }

    /**
     * Sets agreementId
     *
     * @param string $agreementId
     * @return PrePayRequest
     */
    public function setAgreementId($agreementId)
    {
        $this->agreementId = $agreementId;
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
     * @return PrePayRequest
     */
    public function setCreditOrderId($creditOrderId)
    {
        $this->creditOrderId = $creditOrderId;
        return $this;
    }
    /**
     * Gets payMedium
     *
     * @return string
     */
    public function getPayMedium()
    {
        return $this->payMedium;
    }

    /**
     * Sets payMedium
     *
     * @param string $payMedium
     * @return PrePayRequest
     */
    public function setPayMedium($payMedium)
    {
        $this->payMedium = $payMedium;
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
     * @return PrePayRequest
     */
    public function setReceiverAccountType($receiverAccountType)
    {
        $this->receiverAccountType = $receiverAccountType;
        return $this;
    }
    /**
     * Gets jdbtPaymentInfo
     *
     * @return string
     */
    public function getJdbtPaymentInfo()
    {
        return $this->jdbtPaymentInfo;
    }

    /**
     * Sets jdbtPaymentInfo
     *
     * @param string $jdbtPaymentInfo
     * @return PrePayRequest
     */
    public function setJdbtPaymentInfo($jdbtPaymentInfo)
    {
        $this->jdbtPaymentInfo = $jdbtPaymentInfo;
        return $this;
    }
    /**
     * Gets appUpIdentifier
     *
     * @return string
     */
    public function getAppUpIdentifier()
    {
        return $this->appUpIdentifier;
    }

    /**
     * Sets appUpIdentifier
     *
     * @param string $appUpIdentifier
     * @return PrePayRequest
     */
    public function setAppUpIdentifier($appUpIdentifier)
    {
        $this->appUpIdentifier = $appUpIdentifier;
        return $this;
    }
    /**
     * Gets preConsumeNotifyUrl
     *
     * @return string
     */
    public function getPreConsumeNotifyUrl()
    {
        return $this->preConsumeNotifyUrl;
    }

    /**
     * Sets preConsumeNotifyUrl
     *
     * @param string $preConsumeNotifyUrl
     * @return PrePayRequest
     */
    public function setPreConsumeNotifyUrl($preConsumeNotifyUrl)
    {
        $this->preConsumeNotifyUrl = $preConsumeNotifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'prePay';
    }


}
