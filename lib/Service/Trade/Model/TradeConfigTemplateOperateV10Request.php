<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class TradeConfigTemplateOperateV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return TradeConfigTemplateOperateV10Request
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
     * @return TradeConfigTemplateOperateV10Request
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
     * @return TradeConfigTemplateOperateV10Request
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
     * @return TradeConfigTemplateOperateV10Request
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
     * @return TradeConfigTemplateOperateV10Request
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
     * @return TradeConfigTemplateOperateV10Request
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
     * @return TradeConfigTemplateOperateV10Request
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
     * @return TradeConfigTemplateOperateV10Request
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
     * @return TradeConfigTemplateOperateV10Request
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
     * @return TradeConfigTemplateOperateV10Request
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
     * @return TradeConfigTemplateOperateV10Request
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
     * @return TradeConfigTemplateOperateV10Request
     */
    public function setPreAuthProcessType($preAuthProcessType)
    {
        $this->preAuthProcessType = $preAuthProcessType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'trade_config_template_operate_v1_0';
    }


}
