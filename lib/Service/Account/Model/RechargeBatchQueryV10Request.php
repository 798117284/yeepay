<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeBatchQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $queryStartDate;
    /**
     * @var string
     */
    private $queryEndDate;

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
     * @return RechargeBatchQueryV10Request
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
     * @return RechargeBatchQueryV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets queryStartDate
     *
     * @return string
     */
    public function getQueryStartDate()
    {
        return $this->queryStartDate;
    }

    /**
     * Sets queryStartDate
     *
     * @param string $queryStartDate
     * @return RechargeBatchQueryV10Request
     */
    public function setQueryStartDate($queryStartDate)
    {
        $this->queryStartDate = $queryStartDate;
        return $this;
    }
    /**
     * Gets queryEndDate
     *
     * @return string
     */
    public function getQueryEndDate()
    {
        return $this->queryEndDate;
    }

    /**
     * Sets queryEndDate
     *
     * @param string $queryEndDate
     * @return RechargeBatchQueryV10Request
     */
    public function setQueryEndDate($queryEndDate)
    {
        $this->queryEndDate = $queryEndDate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'recharge_batch_query_v1_0';
    }


}
