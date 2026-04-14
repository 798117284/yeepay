<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class BalanceQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $operatePeriod;
    /**
     * @var \DateTime
     */
    private $endTime;

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
     * @return BalanceQueryV10Request
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
     * @return BalanceQueryV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets operatePeriod
     *
     * @return string
     */
    public function getOperatePeriod()
    {
        return $this->operatePeriod;
    }

    /**
     * Sets operatePeriod
     *
     * @param string $operatePeriod
     * @return BalanceQueryV10Request
     */
    public function setOperatePeriod($operatePeriod)
    {
        $this->operatePeriod = $operatePeriod;
        return $this;
    }
    /**
     * Gets endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets endTime
     *
     * @param \DateTime $endTime
     * @return BalanceQueryV10Request
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'balance_query_v1_0';
    }


}
