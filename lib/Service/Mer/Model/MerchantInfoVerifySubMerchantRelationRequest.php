<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantInfoVerifySubMerchantRelationRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return MerchantInfoVerifySubMerchantRelationRequest
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
     * @return MerchantInfoVerifySubMerchantRelationRequest
     */
    public function setMerchantNoList($merchantNoList)
    {
        $this->merchantNoList = $merchantNoList;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantInfoVerifySubMerchantRelation';
    }


}
