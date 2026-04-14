<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class FeeQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
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
     * @return FeeQueryV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return FeeQueryV10Request
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
     * @return FeeQueryV10Request
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
     * @return FeeQueryV10Request
     */
    public function setChargingDateEnd($chargingDateEnd)
    {
        $this->chargingDateEnd = $chargingDateEnd;
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
     * @return FeeQueryV10Request
     */
    public function setInvoiceMajor($invoiceMajor)
    {
        $this->invoiceMajor = $invoiceMajor;
        return $this;
    }

    public static function getOperationId()
    {
        return 'fee_query_v1_0';
    }


}
