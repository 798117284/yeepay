<?php

namespace Yeepay\Yop\Sdk\Service\Pos\Model;


class UnSynBindPosRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $poscati;
    /**
     * @var string
     */
    private $customerNumber;

    /**
     * Gets poscati
     *
     * @return string
     */
    public function getPoscati()
    {
        return $this->poscati;
    }

    /**
     * Sets poscati
     *
     * @param string $poscati
     * @return UnSynBindPosRequest
     */
    public function setPoscati($poscati)
    {
        $this->poscati = $poscati;
        return $this;
    }
    /**
     * Gets customerNumber
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * Sets customerNumber
     *
     * @param string $customerNumber
     * @return UnSynBindPosRequest
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    public static function getOperationId()
    {
        return 'unSynBindPos';
    }


}
