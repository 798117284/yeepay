<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class UnionAccountRechargePayerQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $identityType;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $certificateType;
    /**
     * @var string
     */
    private $certificateNo;

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
     * @return UnionAccountRechargePayerQueryRequest
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
     * @return UnionAccountRechargePayerQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets identityType
     *
     * @return string
     */
    public function getIdentityType()
    {
        return $this->identityType;
    }

    /**
     * Sets identityType
     *
     * @param string $identityType
     * @return UnionAccountRechargePayerQueryRequest
     */
    public function setIdentityType($identityType)
    {
        $this->identityType = $identityType;
        return $this;
    }
    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name
     *
     * @param string $name
     * @return UnionAccountRechargePayerQueryRequest
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets certificateType
     *
     * @return string
     */
    public function getCertificateType()
    {
        return $this->certificateType;
    }

    /**
     * Sets certificateType
     *
     * @param string $certificateType
     * @return UnionAccountRechargePayerQueryRequest
     */
    public function setCertificateType($certificateType)
    {
        $this->certificateType = $certificateType;
        return $this;
    }
    /**
     * Gets certificateNo
     *
     * @return string
     */
    public function getCertificateNo()
    {
        return $this->certificateNo;
    }

    /**
     * Sets certificateNo
     *
     * @param string $certificateNo
     * @return UnionAccountRechargePayerQueryRequest
     */
    public function setCertificateNo($certificateNo)
    {
        $this->certificateNo = $certificateNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'union_account_recharge_payer_query';
    }


}
