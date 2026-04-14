<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class OverseasPayAuthRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
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
    private $merchantNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $prodMsg;

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
     * @return OverseasPayAuthRequest
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
     * @return OverseasPayAuthRequest
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
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
     * @return OverseasPayAuthRequest
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
     * @return OverseasPayAuthRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets prodMsg
     *
     * @return string
     */
    public function getProdMsg()
    {
        return $this->prodMsg;
    }

    /**
     * Sets prodMsg
     *
     * @param string $prodMsg
     * @return OverseasPayAuthRequest
     */
    public function setProdMsg($prodMsg)
    {
        $this->prodMsg = $prodMsg;
        return $this;
    }

    public static function getOperationId()
    {
        return 'overseasPayAuth';
    }


}
