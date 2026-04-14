<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class ReceiverUpdateRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $receiverNo;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $bankCardNo;
    /**
     * @var string
     */
    private $label;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return ReceiverUpdateRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return ReceiverUpdateRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets receiverNo
     *
     * @return string
     */
    public function getReceiverNo()
    {
        return $this->receiverNo;
    }

    /**
     * Sets receiverNo
     *
     * @param string $receiverNo
     * @return ReceiverUpdateRequest
     */
    public function setReceiverNo($receiverNo)
    {
        $this->receiverNo = $receiverNo;
        return $this;
    }
    /**
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode
     * @return ReceiverUpdateRequest
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
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
     * @return ReceiverUpdateRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }
    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets label
     *
     * @param string $label
     * @return ReceiverUpdateRequest
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    public static function getOperationId()
    {
        return 'receiverUpdate';
    }


}
