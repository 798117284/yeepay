<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class SignQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $agreementId;

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
     * @return SignQueryV10Request
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
     * @return SignQueryV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets agreementId
     *
     * @return string
     */
    public function getAgreementId()
    {
        return $this->agreementId;
    }

    /**
     * Sets agreementId
     *
     * @param string $agreementId
     * @return SignQueryV10Request
     */
    public function setAgreementId($agreementId)
    {
        $this->agreementId = $agreementId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'sign_query_v1_0';
    }


}
