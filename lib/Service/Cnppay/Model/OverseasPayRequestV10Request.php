<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class OverseasPayRequestV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var string
     */
    private $requestId;
    /**
     * @var string
     */
    private $bankCardNo;
    /**
     * @var string
     */
    private $bankId;
    /**
     * @var string
     */
    private $cardFirstName;
    /**
     * @var string
     */
    private $cardLastName;
    /**
     * @var string
     */
    private $mobilePhoneNo;
    /**
     * @var string
     */
    private $validDate;
    /**
     * @var string
     */
    private $billCountryCode;
    /**
     * @var string
     */
    private $billProvinceCode;
    /**
     * @var string
     */
    private $billCity;
    /**
     * @var string
     */
    private $billAddress;
    /**
     * @var string
     */
    private $billPostalCode;
    /**
     * @var string
     */
    private $billEmail;
    /**
     * @var string
     */
    private $frontendCallbackUrl;
    /**
     * @var string
     */
    private $deviceInfo;
    /**
     * @var string
     */
    private $cvv;
    /**
     * @var string
     */
    private $payPlatform;
    /**
     * @var string
     */
    private $workPhone;
    /**
     * @var string
     */
    private $orderType;

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
     * @return OverseasPayRequestV10Request
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
     * @return OverseasPayRequestV10Request
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
     * @return OverseasPayRequestV10Request
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets requestId
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets requestId
     *
     * @param string $requestId
     * @return OverseasPayRequestV10Request
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo
     * @return OverseasPayRequestV10Request
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }
    /**
     * Gets bankId
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->bankId;
    }

    /**
     * Sets bankId
     *
     * @param string $bankId
     * @return OverseasPayRequestV10Request
     */
    public function setBankId($bankId)
    {
        $this->bankId = $bankId;
        return $this;
    }
    /**
     * Gets cardFirstName
     *
     * @return string
     */
    public function getCardFirstName()
    {
        return $this->cardFirstName;
    }

    /**
     * Sets cardFirstName
     *
     * @param string $cardFirstName
     * @return OverseasPayRequestV10Request
     */
    public function setCardFirstName($cardFirstName)
    {
        $this->cardFirstName = $cardFirstName;
        return $this;
    }
    /**
     * Gets cardLastName
     *
     * @return string
     */
    public function getCardLastName()
    {
        return $this->cardLastName;
    }

    /**
     * Sets cardLastName
     *
     * @param string $cardLastName
     * @return OverseasPayRequestV10Request
     */
    public function setCardLastName($cardLastName)
    {
        $this->cardLastName = $cardLastName;
        return $this;
    }
    /**
     * Gets mobilePhoneNo
     *
     * @return string
     */
    public function getMobilePhoneNo()
    {
        return $this->mobilePhoneNo;
    }

    /**
     * Sets mobilePhoneNo
     *
     * @param string $mobilePhoneNo
     * @return OverseasPayRequestV10Request
     */
    public function setMobilePhoneNo($mobilePhoneNo)
    {
        $this->mobilePhoneNo = $mobilePhoneNo;
        return $this;
    }
    /**
     * Gets validDate
     *
     * @return string
     */
    public function getValidDate()
    {
        return $this->validDate;
    }

    /**
     * Sets validDate
     *
     * @param string $validDate
     * @return OverseasPayRequestV10Request
     */
    public function setValidDate($validDate)
    {
        $this->validDate = $validDate;
        return $this;
    }
    /**
     * Gets billCountryCode
     *
     * @return string
     */
    public function getBillCountryCode()
    {
        return $this->billCountryCode;
    }

    /**
     * Sets billCountryCode
     *
     * @param string $billCountryCode
     * @return OverseasPayRequestV10Request
     */
    public function setBillCountryCode($billCountryCode)
    {
        $this->billCountryCode = $billCountryCode;
        return $this;
    }
    /**
     * Gets billProvinceCode
     *
     * @return string
     */
    public function getBillProvinceCode()
    {
        return $this->billProvinceCode;
    }

    /**
     * Sets billProvinceCode
     *
     * @param string $billProvinceCode
     * @return OverseasPayRequestV10Request
     */
    public function setBillProvinceCode($billProvinceCode)
    {
        $this->billProvinceCode = $billProvinceCode;
        return $this;
    }
    /**
     * Gets billCity
     *
     * @return string
     */
    public function getBillCity()
    {
        return $this->billCity;
    }

    /**
     * Sets billCity
     *
     * @param string $billCity
     * @return OverseasPayRequestV10Request
     */
    public function setBillCity($billCity)
    {
        $this->billCity = $billCity;
        return $this;
    }
    /**
     * Gets billAddress
     *
     * @return string
     */
    public function getBillAddress()
    {
        return $this->billAddress;
    }

    /**
     * Sets billAddress
     *
     * @param string $billAddress
     * @return OverseasPayRequestV10Request
     */
    public function setBillAddress($billAddress)
    {
        $this->billAddress = $billAddress;
        return $this;
    }
    /**
     * Gets billPostalCode
     *
     * @return string
     */
    public function getBillPostalCode()
    {
        return $this->billPostalCode;
    }

    /**
     * Sets billPostalCode
     *
     * @param string $billPostalCode
     * @return OverseasPayRequestV10Request
     */
    public function setBillPostalCode($billPostalCode)
    {
        $this->billPostalCode = $billPostalCode;
        return $this;
    }
    /**
     * Gets billEmail
     *
     * @return string
     */
    public function getBillEmail()
    {
        return $this->billEmail;
    }

    /**
     * Sets billEmail
     *
     * @param string $billEmail
     * @return OverseasPayRequestV10Request
     */
    public function setBillEmail($billEmail)
    {
        $this->billEmail = $billEmail;
        return $this;
    }
    /**
     * Gets frontendCallbackUrl
     *
     * @return string
     */
    public function getFrontendCallbackUrl()
    {
        return $this->frontendCallbackUrl;
    }

    /**
     * Sets frontendCallbackUrl
     *
     * @param string $frontendCallbackUrl
     * @return OverseasPayRequestV10Request
     */
    public function setFrontendCallbackUrl($frontendCallbackUrl)
    {
        $this->frontendCallbackUrl = $frontendCallbackUrl;
        return $this;
    }
    /**
     * Gets deviceInfo
     *
     * @return string
     */
    public function getDeviceInfo()
    {
        return $this->deviceInfo;
    }

    /**
     * Sets deviceInfo
     *
     * @param string $deviceInfo
     * @return OverseasPayRequestV10Request
     */
    public function setDeviceInfo($deviceInfo)
    {
        $this->deviceInfo = $deviceInfo;
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
     * @return OverseasPayRequestV10Request
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
        return $this;
    }
    /**
     * Gets payPlatform
     *
     * @return string
     */
    public function getPayPlatform()
    {
        return $this->payPlatform;
    }

    /**
     * Sets payPlatform
     *
     * @param string $payPlatform
     * @return OverseasPayRequestV10Request
     */
    public function setPayPlatform($payPlatform)
    {
        $this->payPlatform = $payPlatform;
        return $this;
    }
    /**
     * Gets workPhone
     *
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * Sets workPhone
     *
     * @param string $workPhone
     * @return OverseasPayRequestV10Request
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;
        return $this;
    }
    /**
     * Gets orderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Sets orderType
     *
     * @param string $orderType
     * @return OverseasPayRequestV10Request
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'overseas_pay_request_v1_0';
    }


}
