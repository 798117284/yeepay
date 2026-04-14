<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ReceiptGatherV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $counterpartyNo;
    /**
     * @var string
     */
    private $orderNos;
    /**
     * @var string
     */
    private $bizDate;

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
     * @return ReceiptGatherV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets remark
     *
     * @param string $remark
     * @return ReceiptGatherV10Request
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }
    /**
     * Gets counterpartyNo
     *
     * @return string
     */
    public function getCounterpartyNo()
    {
        return $this->counterpartyNo;
    }

    /**
     * Sets counterpartyNo
     *
     * @param string $counterpartyNo
     * @return ReceiptGatherV10Request
     */
    public function setCounterpartyNo($counterpartyNo)
    {
        $this->counterpartyNo = $counterpartyNo;
        return $this;
    }
    /**
     * Gets orderNos
     *
     * @return string
     */
    public function getOrderNos()
    {
        return $this->orderNos;
    }

    /**
     * Sets orderNos
     *
     * @param string $orderNos
     * @return ReceiptGatherV10Request
     */
    public function setOrderNos($orderNos)
    {
        $this->orderNos = $orderNos;
        return $this;
    }
    /**
     * Gets bizDate
     *
     * @return string
     */
    public function getBizDate()
    {
        return $this->bizDate;
    }

    /**
     * Sets bizDate
     *
     * @param string $bizDate
     * @return ReceiptGatherV10Request
     */
    public function setBizDate($bizDate)
    {
        $this->bizDate = $bizDate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'receipt_gather_v1_0';
    }


}
