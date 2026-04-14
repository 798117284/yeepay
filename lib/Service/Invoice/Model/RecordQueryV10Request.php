<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class RecordQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $customerRequestNo;

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
     * @return RecordQueryV10Request
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
     * @return RecordQueryV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets customerRequestNo
     *
     * @return string
     */
    public function getCustomerRequestNo()
    {
        return $this->customerRequestNo;
    }

    /**
     * Sets customerRequestNo
     *
     * @param string $customerRequestNo
     * @return RecordQueryV10Request
     */
    public function setCustomerRequestNo($customerRequestNo)
    {
        $this->customerRequestNo = $customerRequestNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'record_query_v1_0';
    }


}
