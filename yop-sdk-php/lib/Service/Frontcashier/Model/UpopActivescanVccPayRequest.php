<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopActivescanVccPayRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $tradeAmount;
    /**
     * @var string
     */
    private $paySerialNo;
    /**
     * @var string
     */
    private $payComments;
    /**
     * @var string
     */
    private $callBackUrl;
    /**
     * @var string
     */
    private $couponSerialNo;
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
     * @var string
     */
    private $riskInfoMobile;

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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
        return $this;
    }
    /**
     * Gets tradeAmount
     *
     * @return float
     */
    public function getTradeAmount()
    {
        return $this->tradeAmount;
    }

    /**
     * Sets tradeAmount
     *
     * @param float $tradeAmount
     * @return UpopActivescanVccPayRequest
     */
    public function setTradeAmount($tradeAmount)
    {
        $this->tradeAmount = $tradeAmount;
        return $this;
    }
    /**
     * Gets paySerialNo
     *
     * @return string
     */
    public function getPaySerialNo()
    {
        return $this->paySerialNo;
    }

    /**
     * Sets paySerialNo
     *
     * @param string $paySerialNo
     * @return UpopActivescanVccPayRequest
     */
    public function setPaySerialNo($paySerialNo)
    {
        $this->paySerialNo = $paySerialNo;
        return $this;
    }
    /**
     * Gets payComments
     *
     * @return string
     */
    public function getPayComments()
    {
        return $this->payComments;
    }

    /**
     * Sets payComments
     *
     * @param string $payComments
     * @return UpopActivescanVccPayRequest
     */
    public function setPayComments($payComments)
    {
        $this->payComments = $payComments;
        return $this;
    }
    /**
     * Gets callBackUrl
     *
     * @return string
     */
    public function getCallBackUrl()
    {
        return $this->callBackUrl;
    }

    /**
     * Sets callBackUrl
     *
     * @param string $callBackUrl
     * @return UpopActivescanVccPayRequest
     */
    public function setCallBackUrl($callBackUrl)
    {
        $this->callBackUrl = $callBackUrl;
        return $this;
    }
    /**
     * Gets couponSerialNo
     *
     * @return string
     */
    public function getCouponSerialNo()
    {
        return $this->couponSerialNo;
    }

    /**
     * Sets couponSerialNo
     *
     * @param string $couponSerialNo
     * @return UpopActivescanVccPayRequest
     */
    public function setCouponSerialNo($couponSerialNo)
    {
        $this->couponSerialNo = $couponSerialNo;
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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
     */
    public function setSourceIP($sourceIP)
    {
        $this->sourceIP = $sourceIP;
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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
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
     * @return UpopActivescanVccPayRequest
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
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
     * @return UpopActivescanVccPayRequest
     */
    public function setRiskInfoMobile($riskInfoMobile)
    {
        $this->riskInfoMobile = $riskInfoMobile;
        return $this;
    }

    public static function getOperationId()
    {
        return 'upopActivescanVccPay';
    }


}
