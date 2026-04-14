<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopPassivescanBindQrcodeRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantFlowId;
    /**
     * @var float
     */
    private $pinFreeAmount;
    /**
     * @var float
     */
    private $maxAmont;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $validNotifyUrl;
    /**
     * @var int
     */
    private $expireTime;
    /**
     * @var int
     */
    private $bindId;
    /**
     * @var string
     */
    private $userNo;
    /**
     * @var string
     */
    private $userType;
    /**
     * @var string
     */
    private $cvv;
    /**
     * @var string
     */
    private $valid;
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
     * @var string
     */
    private $usrRgstrDt;
    /**
     * @var string
     */
    private $accountEmailLife;
    /**
     * @var string
     */
    private $deviceLocation;
    /**
     * @var string
     */
    private $fullDeviceNumber;
    /**
     * @var string
     */
    private $captureMethod;
    /**
     * @var string
     */
    private $deviceSimNumber;
    /**
     * @var string
     */
    private $deviceName;

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
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
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
     * @return UpopPassivescanBindQrcodeRequest
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
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setMaxAmont($maxAmont)
    {
        $this->maxAmont = $maxAmont;
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
     * @return UpopPassivescanBindQrcodeRequest
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
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setValidNotifyUrl($validNotifyUrl)
    {
        $this->validNotifyUrl = $validNotifyUrl;
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
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;
        return $this;
    }
    /**
     * Gets bindId
     *
     * @return int
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Sets bindId
     *
     * @param int $bindId
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;
        return $this;
    }
    /**
     * Gets userNo
     *
     * @return string
     */
    public function getUserNo()
    {
        return $this->userNo;
    }

    /**
     * Sets userNo
     *
     * @param string $userNo
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
        return $this;
    }
    /**
     * Gets userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Sets userType
     *
     * @param string $userType
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
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
     * @return UpopPassivescanBindQrcodeRequest
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
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
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
     * @return UpopPassivescanBindQrcodeRequest
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
     * @return UpopPassivescanBindQrcodeRequest
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
     * @return UpopPassivescanBindQrcodeRequest
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
     * @return UpopPassivescanBindQrcodeRequest
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
     * @return UpopPassivescanBindQrcodeRequest
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
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setRiskInfoMobile($riskInfoMobile)
    {
        $this->riskInfoMobile = $riskInfoMobile;
        return $this;
    }
    /**
     * Gets usrRgstrDt
     *
     * @return string
     */
    public function getUsrRgstrDt()
    {
        return $this->usrRgstrDt;
    }

    /**
     * Sets usrRgstrDt
     *
     * @param string $usrRgstrDt
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setUsrRgstrDt($usrRgstrDt)
    {
        $this->usrRgstrDt = $usrRgstrDt;
        return $this;
    }
    /**
     * Gets accountEmailLife
     *
     * @return string
     */
    public function getAccountEmailLife()
    {
        return $this->accountEmailLife;
    }

    /**
     * Sets accountEmailLife
     *
     * @param string $accountEmailLife
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setAccountEmailLife($accountEmailLife)
    {
        $this->accountEmailLife = $accountEmailLife;
        return $this;
    }
    /**
     * Gets deviceLocation
     *
     * @return string
     */
    public function getDeviceLocation()
    {
        return $this->deviceLocation;
    }

    /**
     * Sets deviceLocation
     *
     * @param string $deviceLocation
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setDeviceLocation($deviceLocation)
    {
        $this->deviceLocation = $deviceLocation;
        return $this;
    }
    /**
     * Gets fullDeviceNumber
     *
     * @return string
     */
    public function getFullDeviceNumber()
    {
        return $this->fullDeviceNumber;
    }

    /**
     * Sets fullDeviceNumber
     *
     * @param string $fullDeviceNumber
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setFullDeviceNumber($fullDeviceNumber)
    {
        $this->fullDeviceNumber = $fullDeviceNumber;
        return $this;
    }
    /**
     * Gets captureMethod
     *
     * @return string
     */
    public function getCaptureMethod()
    {
        return $this->captureMethod;
    }

    /**
     * Sets captureMethod
     *
     * @param string $captureMethod
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setCaptureMethod($captureMethod)
    {
        $this->captureMethod = $captureMethod;
        return $this;
    }
    /**
     * Gets deviceSimNumber
     *
     * @return string
     */
    public function getDeviceSimNumber()
    {
        return $this->deviceSimNumber;
    }

    /**
     * Sets deviceSimNumber
     *
     * @param string $deviceSimNumber
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setDeviceSimNumber($deviceSimNumber)
    {
        $this->deviceSimNumber = $deviceSimNumber;
        return $this;
    }
    /**
     * Gets deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Sets deviceName
     *
     * @param string $deviceName
     * @return UpopPassivescanBindQrcodeRequest
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    public static function getOperationId()
    {
        return 'upopPassivescanBindQrcode';
    }


}
