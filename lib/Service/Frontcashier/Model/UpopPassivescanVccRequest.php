<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopPassivescanVccRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantFlowId;
    /**
     * @var string
     */
    private $cardNo;
    /**
     * @var string
     */
    private $cvv;
    /**
     * @var string
     */
    private $valid;
    /**
     * @var float
     */
    private $pinFreeAmount;
    /**
     * @var float
     */
    private $maxAmont;
    /**
     * @var int
     */
    private $expireTime;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $validNotifyUrl;
    /**
     * @var string
     */
    private $couponInfo;
    /**
     * @var string
     */
    private $deviceID;
    /**
     * @var string
     */
    private $deviceType;
    /**
     * @var string
     */
    private $accountIDHash;
    /**
     * @var string
     */
    private $sourceIP;
    /**
     * @var string
     */
    private $riskInfoMobile;
    /**
     * @var \DateTime
     */
    private $usrRgstrDt;

    /**
     * Gets merchantFlowId
     *
     * @return string
     */
    public function getMerchantFlowId()
    {
        return $this->merchantFlowId;
    }

    /**
     * Sets merchantFlowId
     *
     * @param string $merchantFlowId
     * @return UpopPassivescanVccRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
        return $this;
    }
    /**
     * Gets cardNo
     *
     * @return string
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }

    /**
     * Sets cardNo
     *
     * @param string $cardNo
     * @return UpopPassivescanVccRequest
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;
        return $this;
    }
    /**
     * Gets cvv
     *
     * @return string
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Sets cvv
     *
     * @param string $cvv
     * @return UpopPassivescanVccRequest
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
        return $this;
    }
    /**
     * Gets valid
     *
     * @return string
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Sets valid
     *
     * @param string $valid
     * @return UpopPassivescanVccRequest
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
        return $this;
    }
    /**
     * Gets pinFreeAmount
     *
     * @return float
     */
    public function getPinFreeAmount()
    {
        return $this->pinFreeAmount;
    }

    /**
     * Sets pinFreeAmount
     *
     * @param float $pinFreeAmount
     * @return UpopPassivescanVccRequest
     */
    public function setPinFreeAmount($pinFreeAmount)
    {
        $this->pinFreeAmount = $pinFreeAmount;
        return $this;
    }
    /**
     * Gets maxAmont
     *
     * @return float
     */
    public function getMaxAmont()
    {
        return $this->maxAmont;
    }

    /**
     * Sets maxAmont
     *
     * @param float $maxAmont
     * @return UpopPassivescanVccRequest
     */
    public function setMaxAmont($maxAmont)
    {
        $this->maxAmont = $maxAmont;
        return $this;
    }
    /**
     * Gets expireTime
     *
     * @return int
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * Sets expireTime
     *
     * @param int $expireTime
     * @return UpopPassivescanVccRequest
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;
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
     * @return UpopPassivescanVccRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets validNotifyUrl
     *
     * @return string
     */
    public function getValidNotifyUrl()
    {
        return $this->validNotifyUrl;
    }

    /**
     * Sets validNotifyUrl
     *
     * @param string $validNotifyUrl
     * @return UpopPassivescanVccRequest
     */
    public function setValidNotifyUrl($validNotifyUrl)
    {
        $this->validNotifyUrl = $validNotifyUrl;
        return $this;
    }
    /**
     * Gets couponInfo
     *
     * @return string
     */
    public function getCouponInfo()
    {
        return $this->couponInfo;
    }

    /**
     * Sets couponInfo
     *
     * @param string $couponInfo
     * @return UpopPassivescanVccRequest
     */
    public function setCouponInfo($couponInfo)
    {
        $this->couponInfo = $couponInfo;
        return $this;
    }
    /**
     * Gets deviceID
     *
     * @return string
     */
    public function getDeviceID()
    {
        return $this->deviceID;
    }

    /**
     * Sets deviceID
     *
     * @param string $deviceID
     * @return UpopPassivescanVccRequest
     */
    public function setDeviceID($deviceID)
    {
        $this->deviceID = $deviceID;
        return $this;
    }
    /**
     * Gets deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Sets deviceType
     *
     * @param string $deviceType
     * @return UpopPassivescanVccRequest
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * Gets accountIDHash
     *
     * @return string
     */
    public function getAccountIDHash()
    {
        return $this->accountIDHash;
    }

    /**
     * Sets accountIDHash
     *
     * @param string $accountIDHash
     * @return UpopPassivescanVccRequest
     */
    public function setAccountIDHash($accountIDHash)
    {
        $this->accountIDHash = $accountIDHash;
        return $this;
    }
    /**
     * Gets sourceIP
     *
     * @return string
     */
    public function getSourceIP()
    {
        return $this->sourceIP;
    }

    /**
     * Sets sourceIP
     *
     * @param string $sourceIP
     * @return UpopPassivescanVccRequest
     */
    public function setSourceIP($sourceIP)
    {
        $this->sourceIP = $sourceIP;
        return $this;
    }
    /**
     * Gets riskInfoMobile
     *
     * @return string
     */
    public function getRiskInfoMobile()
    {
        return $this->riskInfoMobile;
    }

    /**
     * Sets riskInfoMobile
     *
     * @param string $riskInfoMobile
     * @return UpopPassivescanVccRequest
     */
    public function setRiskInfoMobile($riskInfoMobile)
    {
        $this->riskInfoMobile = $riskInfoMobile;
        return $this;
    }
    /**
     * Gets usrRgstrDt
     *
     * @return \DateTime
     */
    public function getUsrRgstrDt()
    {
        return $this->usrRgstrDt;
    }

    /**
     * Sets usrRgstrDt
     *
     * @param \DateTime $usrRgstrDt
     * @return UpopPassivescanVccRequest
     */
    public function setUsrRgstrDt($usrRgstrDt)
    {
        $this->usrRgstrDt = $usrRgstrDt;
        return $this;
    }

    public static function getOperationId()
    {
        return 'upop_passivescan_vcc';
    }


}
