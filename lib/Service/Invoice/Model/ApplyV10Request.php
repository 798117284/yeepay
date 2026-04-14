<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class ApplyV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $customerRequestNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var \DateTime
     */
    private $chargingDateStart;
    /**
     * @var \DateTime
     */
    private $chargingDateEnd;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $invoiceMajor;

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
     * @return ApplyV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets customerRequestNo
     *
     * @return string
     */
    public function getCustomerRequestNo()
    {
        return $this->customerRequestNo;
    }

    /**
     * Sets customerRequestNo
     *
     * @param string $customerRequestNo
     * @return ApplyV10Request
     */
    public function setCustomerRequestNo($customerRequestNo)
    {
        $this->customerRequestNo = $customerRequestNo;
        return $this;
    }
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
     * @return ApplyV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets chargingDateStart
     *
     * @return \DateTime
     */
    public function getChargingDateStart()
    {
        return $this->chargingDateStart;
    }

    /**
     * Sets chargingDateStart
     *
     * @param \DateTime $chargingDateStart
     * @return ApplyV10Request
     */
    public function setChargingDateStart($chargingDateStart)
    {
        $this->chargingDateStart = $chargingDateStart;
        return $this;
    }
    /**
     * Gets chargingDateEnd
     *
     * @return \DateTime
     */
    public function getChargingDateEnd()
    {
        return $this->chargingDateEnd;
    }

    /**
     * Sets chargingDateEnd
     *
     * @param \DateTime $chargingDateEnd
     * @return ApplyV10Request
     */
    public function setChargingDateEnd($chargingDateEnd)
    {
        $this->chargingDateEnd = $chargingDateEnd;
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
     * @return ApplyV10Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets invoiceMajor
     *
     * @return string
     */
    public function getInvoiceMajor()
    {
        return $this->invoiceMajor;
    }

    /**
     * Sets invoiceMajor
     *
     * @param string $invoiceMajor
     * @return ApplyV10Request
     */
    public function setInvoiceMajor($invoiceMajor)
    {
        $this->invoiceMajor = $invoiceMajor;
        return $this;
    }

    public static function getOperationId()
    {
        return 'apply_v1_0';
    }


}
