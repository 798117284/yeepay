<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class QueryAuxiliaryTerminalRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var string
     */
    private $shop;
    /**
     * @var string
     */
    private $terminalNo;
    /**
     * @var string
     */
    private $customerTerminalNo;
    /**
     * @var string
     */
    private $serialNo;

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
     * @return QueryAuxiliaryTerminalRequest
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
     * @return QueryAuxiliaryTerminalRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets shop
     *
     * @return string
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Sets shop
     *
     * @param string $shop
     * @return QueryAuxiliaryTerminalRequest
     */
    public function setShop($shop)
    {
        $this->shop = $shop;
        return $this;
    }
    /**
     * Gets terminalNo
     *
     * @return string
     */
    public function getTerminalNo()
    {
        return $this->terminalNo;
    }

    /**
     * Sets terminalNo
     *
     * @param string $terminalNo
     * @return QueryAuxiliaryTerminalRequest
     */
    public function setTerminalNo($terminalNo)
    {
        $this->terminalNo = $terminalNo;
        return $this;
    }
    /**
     * Gets customerTerminalNo
     *
     * @return string
     */
    public function getCustomerTerminalNo()
    {
        return $this->customerTerminalNo;
    }

    /**
     * Sets customerTerminalNo
     *
     * @param string $customerTerminalNo
     * @return QueryAuxiliaryTerminalRequest
     */
    public function setCustomerTerminalNo($customerTerminalNo)
    {
        $this->customerTerminalNo = $customerTerminalNo;
        return $this;
    }
    /**
     * Gets serialNo
     *
     * @return string
     */
    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * Sets serialNo
     *
     * @param string $serialNo
     * @return QueryAuxiliaryTerminalRequest
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'queryAuxiliaryTerminal';
    }


}
