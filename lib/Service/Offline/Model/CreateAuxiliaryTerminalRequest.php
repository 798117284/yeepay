<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class CreateAuxiliaryTerminalRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $serialNo;
    /**
     * @var string
     */
    private $shopNo;
    /**
     * @var string
     */
    private $terminalName;
    /**
     * @var string
     */
    private $terminalType;
    /**
     * @var string
     */
    private $customerTerminalNo;
    /**
     * @var string
     */
    private $terminalAddress;
    /**
     * @var bool
     */
    private $isReport;

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
     * @return CreateAuxiliaryTerminalRequest
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
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
        return $this;
    }
    /**
     * Gets shopNo
     *
     * @return string
     */
    public function getShopNo()
    {
        return $this->shopNo;
    }

    /**
     * Sets shopNo
     *
     * @param string $shopNo
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
        return $this;
    }
    /**
     * Gets terminalName
     *
     * @return string
     */
    public function getTerminalName()
    {
        return $this->terminalName;
    }

    /**
     * Sets terminalName
     *
     * @param string $terminalName
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setTerminalName($terminalName)
    {
        $this->terminalName = $terminalName;
        return $this;
    }
    /**
     * Gets terminalType
     *
     * @return string
     */
    public function getTerminalType()
    {
        return $this->terminalType;
    }

    /**
     * Sets terminalType
     *
     * @param string $terminalType
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
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
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setCustomerTerminalNo($customerTerminalNo)
    {
        $this->customerTerminalNo = $customerTerminalNo;
        return $this;
    }
    /**
     * Gets terminalAddress
     *
     * @return string
     */
    public function getTerminalAddress()
    {
        return $this->terminalAddress;
    }

    /**
     * Sets terminalAddress
     *
     * @param string $terminalAddress
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setTerminalAddress($terminalAddress)
    {
        $this->terminalAddress = $terminalAddress;
        return $this;
    }
    /**
     * Gets isReport
     *
     * @return bool
     */
    public function getIsReport()
    {
        return $this->isReport;
    }

    /**
     * Sets isReport
     *
     * @param bool $isReport
     * @return CreateAuxiliaryTerminalRequest
     */
    public function setIsReport($isReport)
    {
        $this->isReport = $isReport;
        return $this;
    }

    public static function getOperationId()
    {
        return 'createAuxiliaryTerminal';
    }


}
