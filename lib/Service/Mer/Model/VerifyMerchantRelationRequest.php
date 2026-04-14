<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class VerifyMerchantRelationRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var array|string
     */
    private $merchantNoList;

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
     * @return VerifyMerchantRelationRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets merchantNoList
     *
     * @return array|string
     */
    public function getMerchantNoList()
    {
        return $this->merchantNoList;
    }

    /**
     * Sets merchantNoList
     *
     * @param array|string $merchantNoList
     * @return VerifyMerchantRelationRequest
     */
    public function setMerchantNoList($merchantNoList)
    {
        $this->merchantNoList = $merchantNoList;
        return $this;
    }

    public static function getOperationId()
    {
        return 'verify_merchant_relation';
    }


}
