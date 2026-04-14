<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class ConfigTemplateOperateRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $merchantRange;
    /**
     * @var string
     */
    private $operateType;
    /**
     * @var string
     */
    private $divideFlag;
    /**
     * @var string
     */
    private $payNotifyUrl;
    /**
     * @var string
     */
    private $csNotifyUrl;
    /**
     * @var string
     */
    private $refundNotifyUrl;
    /**
     * @var string
     */
    private $ledgerNoNotifyUrl;
    /**
     * @var string
     */
    private $failNotify;
    /**
     * @var string
     */
    private $timeOutNotify;
    /**
     * @var string
     */
    private $preAuthProcessType;

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
     * @return ConfigTemplateOperateRequest
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
     * @return ConfigTemplateOperateRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets merchantRange
     *
     * @return string
     */
    public function getMerchantRange()
    {
        return $this->merchantRange;
    }

    /**
     * Sets merchantRange
     *
     * @param string $merchantRange
     * @return ConfigTemplateOperateRequest
     */
    public function setMerchantRange($merchantRange)
    {
        $this->merchantRange = $merchantRange;
        return $this;
    }
    /**
     * Gets operateType
     *
     * @return string
     */
    public function getOperateType()
    {
        return $this->operateType;
    }

    /**
     * Sets operateType
     *
     * @param string $operateType
     * @return ConfigTemplateOperateRequest
     */
    public function setOperateType($operateType)
    {
        $this->operateType = $operateType;
        return $this;
    }
    /**
     * Gets divideFlag
     *
     * @return string
     */
    public function getDivideFlag()
    {
        return $this->divideFlag;
    }

    /**
     * Sets divideFlag
     *
     * @param string $divideFlag
     * @return ConfigTemplateOperateRequest
     */
    public function setDivideFlag($divideFlag)
    {
        $this->divideFlag = $divideFlag;
        return $this;
    }
    /**
     * Gets payNotifyUrl
     *
     * @return string
     */
    public function getPayNotifyUrl()
    {
        return $this->payNotifyUrl;
    }

    /**
     * Sets payNotifyUrl
     *
     * @param string $payNotifyUrl
     * @return ConfigTemplateOperateRequest
     */
    public function setPayNotifyUrl($payNotifyUrl)
    {
        $this->payNotifyUrl = $payNotifyUrl;
        return $this;
    }
    /**
     * Gets csNotifyUrl
     *
     * @return string
     */
    public function getCsNotifyUrl()
    {
        return $this->csNotifyUrl;
    }

    /**
     * Sets csNotifyUrl
     *
     * @param string $csNotifyUrl
     * @return ConfigTemplateOperateRequest
     */
    public function setCsNotifyUrl($csNotifyUrl)
    {
        $this->csNotifyUrl = $csNotifyUrl;
        return $this;
    }
    /**
     * Gets refundNotifyUrl
     *
     * @return string
     */
    public function getRefundNotifyUrl()
    {
        return $this->refundNotifyUrl;
    }

    /**
     * Sets refundNotifyUrl
     *
     * @param string $refundNotifyUrl
     * @return ConfigTemplateOperateRequest
     */
    public function setRefundNotifyUrl($refundNotifyUrl)
    {
        $this->refundNotifyUrl = $refundNotifyUrl;
        return $this;
    }
    /**
     * Gets ledgerNoNotifyUrl
     *
     * @return string
     */
    public function getLedgerNoNotifyUrl()
    {
        return $this->ledgerNoNotifyUrl;
    }

    /**
     * Sets ledgerNoNotifyUrl
     *
     * @param string $ledgerNoNotifyUrl
     * @return ConfigTemplateOperateRequest
     */
    public function setLedgerNoNotifyUrl($ledgerNoNotifyUrl)
    {
        $this->ledgerNoNotifyUrl = $ledgerNoNotifyUrl;
        return $this;
    }
    /**
     * Gets failNotify
     *
     * @return string
     */
    public function getFailNotify()
    {
        return $this->failNotify;
    }

    /**
     * Sets failNotify
     *
     * @param string $failNotify
     * @return ConfigTemplateOperateRequest
     */
    public function setFailNotify($failNotify)
    {
        $this->failNotify = $failNotify;
        return $this;
    }
    /**
     * Gets timeOutNotify
     *
     * @return string
     */
    public function getTimeOutNotify()
    {
        return $this->timeOutNotify;
    }

    /**
     * Sets timeOutNotify
     *
     * @param string $timeOutNotify
     * @return ConfigTemplateOperateRequest
     */
    public function setTimeOutNotify($timeOutNotify)
    {
        $this->timeOutNotify = $timeOutNotify;
        return $this;
    }
    /**
     * Gets preAuthProcessType
     *
     * @return string
     */
    public function getPreAuthProcessType()
    {
        return $this->preAuthProcessType;
    }

    /**
     * Sets preAuthProcessType
     *
     * @param string $preAuthProcessType
     * @return ConfigTemplateOperateRequest
     */
    public function setPreAuthProcessType($preAuthProcessType)
    {
        $this->preAuthProcessType = $preAuthProcessType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'configTemplateOperate';
    }


}
