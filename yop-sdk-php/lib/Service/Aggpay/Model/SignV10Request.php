<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class SignV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $payWay;
    /**
     * @var string
     */
    private $channel;
    /**
     * @var string
     */
    private $signSource;
    /**
     * @var string
     */
    private $appId;
    /**
     * @var string
     */
    private $plainId;
    /**
     * @var string
     */
    private $agreementId;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $contractDisplayAccount;
    /**
     * @var string
     */
    private $returnInfo;
    /**
     * @var \DateTime
     */
    private $expireTime;
    /**
     * @var string
     */
    private $invokeScene;

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
     * @return SignV10Request
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
     * @return SignV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return SignV10Request
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
     * @return SignV10Request
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * Gets signSource
     *
     * @return string
     */
    public function getSignSource()
    {
        return $this->signSource;
    }

    /**
     * Sets signSource
     *
     * @param string $signSource
     * @return SignV10Request
     */
    public function setSignSource($signSource)
    {
        $this->signSource = $signSource;
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
     * @return SignV10Request
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }
    /**
     * Gets plainId
     *
     * @return string
     */
    public function getPlainId()
    {
        return $this->plainId;
    }

    /**
     * Sets plainId
     *
     * @param string $plainId
     * @return SignV10Request
     */
    public function setPlainId($plainId)
    {
        $this->plainId = $plainId;
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
     * @return SignV10Request
     */
    public function setAgreementId($agreementId)
    {
        $this->agreementId = $agreementId;
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
     * @return SignV10Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets contractDisplayAccount
     *
     * @return string
     */
    public function getContractDisplayAccount()
    {
        return $this->contractDisplayAccount;
    }

    /**
     * Sets contractDisplayAccount
     *
     * @param string $contractDisplayAccount
     * @return SignV10Request
     */
    public function setContractDisplayAccount($contractDisplayAccount)
    {
        $this->contractDisplayAccount = $contractDisplayAccount;
        return $this;
    }
    /**
     * Gets returnInfo
     *
     * @return string
     */
    public function getReturnInfo()
    {
        return $this->returnInfo;
    }

    /**
     * Sets returnInfo
     *
     * @param string $returnInfo
     * @return SignV10Request
     */
    public function setReturnInfo($returnInfo)
    {
        $this->returnInfo = $returnInfo;
        return $this;
    }
    /**
     * Gets expireTime
     *
     * @return \DateTime
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * Sets expireTime
     *
     * @param \DateTime $expireTime
     * @return SignV10Request
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;
        return $this;
    }
    /**
     * Gets invokeScene
     *
     * @return string
     */
    public function getInvokeScene()
    {
        return $this->invokeScene;
    }

    /**
     * Sets invokeScene
     *
     * @param string $invokeScene
     * @return SignV10Request
     */
    public function setInvokeScene($invokeScene)
    {
        $this->invokeScene = $invokeScene;
        return $this;
    }

    public static function getOperationId()
    {
        return 'sign_v1_0';
    }


}
