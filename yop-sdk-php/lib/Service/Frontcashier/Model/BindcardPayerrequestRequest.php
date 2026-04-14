<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardPayerrequestRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $merchantFlowId;
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
    private $bankCardNo;
    /**
     * @var string
     */
    private $cardType;
    /**
     * @var string
     */
    private $userName;
    /**
     * @var string
     */
    private $idCardNo;
    /**
     * @var string
     */
    private $idCardType;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var string
     */
    private $cvv2;
    /**
     * @var string
     */
    private $validthru;
    /**
     * @var string
     */
    private $riskParamExt;
    /**
     * @var int
     */
    private $orderValidate;
    /**
     * @var string
     */
    private $authType;
    /**
     * @var bool
     */
    private $empower;
    /**
     * @var string
     */
    private $authScene;
    /**
     * @var string
     */
    private $pageNotifyUrl;
    /**
     * @var string
     */
    private $bindCallBackUrl;
    /**
     * @var bool
     */
    private $sendSms;
    /**
     * @var string
     */
    private $smsTemplateId;
    /**
     * @var string
     */
    private $smsInfo;

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
     * @return BindcardPayerrequestRequest
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
     * @return BindcardPayerrequestRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
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
     * @return BindcardPayerrequestRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
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
     * @return BindcardPayerrequestRequest
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
     * @return BindcardPayerrequestRequest
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
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
     * @return BindcardPayerrequestRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }
    /**
     * Gets cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets cardType
     *
     * @param string $cardType
     * @return BindcardPayerrequestRequest
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
        return $this;
    }
    /**
     * Gets userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets userName
     *
     * @param string $userName
     * @return BindcardPayerrequestRequest
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }
    /**
     * Gets idCardNo
     *
     * @return string
     */
    public function getIdCardNo()
    {
        return $this->idCardNo;
    }

    /**
     * Sets idCardNo
     *
     * @param string $idCardNo
     * @return BindcardPayerrequestRequest
     */
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;
        return $this;
    }
    /**
     * Gets idCardType
     *
     * @return string
     */
    public function getIdCardType()
    {
        return $this->idCardType;
    }

    /**
     * Sets idCardType
     *
     * @param string $idCardType
     * @return BindcardPayerrequestRequest
     */
    public function setIdCardType($idCardType)
    {
        $this->idCardType = $idCardType;
        return $this;
    }
    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets phone
     *
     * @param string $phone
     * @return BindcardPayerrequestRequest
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * Gets cvv2
     *
     * @return string
     */
    public function getCvv2()
    {
        return $this->cvv2;
    }

    /**
     * Sets cvv2
     *
     * @param string $cvv2
     * @return BindcardPayerrequestRequest
     */
    public function setCvv2($cvv2)
    {
        $this->cvv2 = $cvv2;
        return $this;
    }
    /**
     * Gets validthru
     *
     * @return string
     */
    public function getValidthru()
    {
        return $this->validthru;
    }

    /**
     * Sets validthru
     *
     * @param string $validthru
     * @return BindcardPayerrequestRequest
     */
    public function setValidthru($validthru)
    {
        $this->validthru = $validthru;
        return $this;
    }
    /**
     * Gets riskParamExt
     *
     * @return string
     */
    public function getRiskParamExt()
    {
        return $this->riskParamExt;
    }

    /**
     * Sets riskParamExt
     *
     * @param string $riskParamExt
     * @return BindcardPayerrequestRequest
     */
    public function setRiskParamExt($riskParamExt)
    {
        $this->riskParamExt = $riskParamExt;
        return $this;
    }
    /**
     * Gets orderValidate
     *
     * @return int
     */
    public function getOrderValidate()
    {
        return $this->orderValidate;
    }

    /**
     * Sets orderValidate
     *
     * @param int $orderValidate
     * @return BindcardPayerrequestRequest
     */
    public function setOrderValidate($orderValidate)
    {
        $this->orderValidate = $orderValidate;
        return $this;
    }
    /**
     * Gets authType
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->authType;
    }

    /**
     * Sets authType
     *
     * @param string $authType
     * @return BindcardPayerrequestRequest
     */
    public function setAuthType($authType)
    {
        $this->authType = $authType;
        return $this;
    }
    /**
     * Gets empower
     *
     * @return bool
     */
    public function getEmpower()
    {
        return $this->empower;
    }

    /**
     * Sets empower
     *
     * @param bool $empower
     * @return BindcardPayerrequestRequest
     */
    public function setEmpower($empower)
    {
        $this->empower = $empower;
        return $this;
    }
    /**
     * Gets authScene
     *
     * @return string
     */
    public function getAuthScene()
    {
        return $this->authScene;
    }

    /**
     * Sets authScene
     *
     * @param string $authScene
     * @return BindcardPayerrequestRequest
     */
    public function setAuthScene($authScene)
    {
        $this->authScene = $authScene;
        return $this;
    }
    /**
     * Gets pageNotifyUrl
     *
     * @return string
     */
    public function getPageNotifyUrl()
    {
        return $this->pageNotifyUrl;
    }

    /**
     * Sets pageNotifyUrl
     *
     * @param string $pageNotifyUrl
     * @return BindcardPayerrequestRequest
     */
    public function setPageNotifyUrl($pageNotifyUrl)
    {
        $this->pageNotifyUrl = $pageNotifyUrl;
        return $this;
    }
    /**
     * Gets bindCallBackUrl
     *
     * @return string
     */
    public function getBindCallBackUrl()
    {
        return $this->bindCallBackUrl;
    }

    /**
     * Sets bindCallBackUrl
     *
     * @param string $bindCallBackUrl
     * @return BindcardPayerrequestRequest
     */
    public function setBindCallBackUrl($bindCallBackUrl)
    {
        $this->bindCallBackUrl = $bindCallBackUrl;
        return $this;
    }
    /**
     * Gets sendSms
     *
     * @return bool
     */
    public function getSendSms()
    {
        return $this->sendSms;
    }

    /**
     * Sets sendSms
     *
     * @param bool $sendSms
     * @return BindcardPayerrequestRequest
     */
    public function setSendSms($sendSms)
    {
        $this->sendSms = $sendSms;
        return $this;
    }
    /**
     * Gets smsTemplateId
     *
     * @return string
     */
    public function getSmsTemplateId()
    {
        return $this->smsTemplateId;
    }

    /**
     * Sets smsTemplateId
     *
     * @param string $smsTemplateId
     * @return BindcardPayerrequestRequest
     */
    public function setSmsTemplateId($smsTemplateId)
    {
        $this->smsTemplateId = $smsTemplateId;
        return $this;
    }
    /**
     * Gets smsInfo
     *
     * @return string
     */
    public function getSmsInfo()
    {
        return $this->smsInfo;
    }

    /**
     * Sets smsInfo
     *
     * @param string $smsInfo
     * @return BindcardPayerrequestRequest
     */
    public function setSmsInfo($smsInfo)
    {
        $this->smsInfo = $smsInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindcardPayerrequest';
    }


}
