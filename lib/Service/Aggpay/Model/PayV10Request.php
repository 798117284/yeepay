<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class PayV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $authCode;
    /**
     * @var string
     */
    private $appId;
    /**
     * @var string
     */
    private $userIp;
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
    private $token;
    /**
     * @var string
     */
    private $uniqueOrderNo;
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
    private $bankCode;
    /**
     * @var string
     */
    private $businessInfo;
    /**
     * @var string
     */
    private $ypAccountBookNo;
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
    private $payMedium;
    /**
     * @var string
     */
    private $terminalInfo;
    /**
     * @var string
     */
    private $channelActivityInfo;
    /**
     * @var string
     */
    private $receiverAccountType;
    /**
     * @var string
     */
    private $encryptedPINData;
    /**
     * @var string
     */
    private $payerAccountNo;
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
     */
    public function setScene($scene)
    {
        $this->scene = $scene;
        return $this;
    }
    /**
     * Gets authCode
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * Sets authCode
     *
     * @param string $authCode
     * @return PayV10Request
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
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
     * @return PayV10Request
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
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
     * @return PayV10Request
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
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
     * @return PayV10Request
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
     * @return PayV10Request
     */
    public function setTerminalSceneInfo($terminalSceneInfo)
    {
        $this->terminalSceneInfo = $terminalSceneInfo;
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
     */
    public function setToken($token)
    {
        $this->token = $token;
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
     * @return PayV10Request
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
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
     * @return PayV10Request
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
     * @return PayV10Request
     */
    public function setAccountLinkInfo($accountLinkInfo)
    {
        $this->accountLinkInfo = $accountLinkInfo;
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
     * @return PayV10Request
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
     * @return PayV10Request
     */
    public function setBusinessInfo($businessInfo)
    {
        $this->businessInfo = $businessInfo;
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
     * @return PayV10Request
     */
    public function setYpAccountBookNo($ypAccountBookNo)
    {
        $this->ypAccountBookNo = $ypAccountBookNo;
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
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
     * @return PayV10Request
     */
    public function setFeeSubsidyInfo($feeSubsidyInfo)
    {
        $this->feeSubsidyInfo = $feeSubsidyInfo;
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
     * @return PayV10Request
     */
    public function setPayMedium($payMedium)
    {
        $this->payMedium = $payMedium;
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
     * @return PayV10Request
     */
    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
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
     * @return PayV10Request
     */
    public function setChannelActivityInfo($channelActivityInfo)
    {
        $this->channelActivityInfo = $channelActivityInfo;
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
     * @return PayV10Request
     */
    public function setReceiverAccountType($receiverAccountType)
    {
        $this->receiverAccountType = $receiverAccountType;
        return $this;
    }
    /**
     * Gets encryptedPINData
     *
     * @return string
     */
    public function getEncryptedPINData()
    {
        return $this->encryptedPINData;
    }

    /**
     * Sets encryptedPINData
     *
     * @param string $encryptedPINData
     * @return PayV10Request
     */
    public function setEncryptedPINData($encryptedPINData)
    {
        $this->encryptedPINData = $encryptedPINData;
        return $this;
    }
    /**
     * Gets payerAccountNo
     *
     * @return string
     */
    public function getPayerAccountNo()
    {
        return $this->payerAccountNo;
    }

    /**
     * Sets payerAccountNo
     *
     * @param string $payerAccountNo
     * @return PayV10Request
     */
    public function setPayerAccountNo($payerAccountNo)
    {
        $this->payerAccountNo = $payerAccountNo;
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
     * @return PayV10Request
     */
    public function setPreConsumeNotifyUrl($preConsumeNotifyUrl)
    {
        $this->preConsumeNotifyUrl = $preConsumeNotifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'pay_v1_0';
    }


}
