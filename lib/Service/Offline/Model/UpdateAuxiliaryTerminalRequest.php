<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class UpdateAuxiliaryTerminalRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
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
    private $terminalName;
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
     * @return UpdateAuxiliaryTerminalRequest
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
     * @return UpdateAuxiliaryTerminalRequest
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
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
     * @return UpdateAuxiliaryTerminalRequest
     */
    public function setTerminalName($terminalName)
    {
        $this->terminalName = $terminalName;
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
     * @return UpdateAuxiliaryTerminalRequest
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
     * @return UpdateAuxiliaryTerminalRequest
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
     * @return UpdateAuxiliaryTerminalRequest
     */
    public function setIsReport($isReport)
    {
        $this->isReport = $isReport;
        return $this;
    }

    public static function getOperationId()
    {
        return 'updateAuxiliaryTerminal';
    }


}
