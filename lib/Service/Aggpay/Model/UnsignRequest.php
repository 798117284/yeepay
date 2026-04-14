<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class UnsignRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var string
     */
    private $unSignRemark;

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
     * @return UnsignRequest
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
     * @return UnsignRequest
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
     * @return UnsignRequest
     */
    public function setAgreementId($agreementId)
    {
        $this->agreementId = $agreementId;
        return $this;
    }
    /**
     * Gets unSignRemark
     *
     * @return string
     */
    public function getUnSignRemark()
    {
        return $this->unSignRemark;
    }

    /**
     * Sets unSignRemark
     *
     * @param string $unSignRemark
     * @return UnsignRequest
     */
    public function setUnSignRemark($unSignRemark)
    {
        $this->unSignRemark = $unSignRemark;
        return $this;
    }

    public static function getOperationId()
    {
        return 'unsign';
    }


}
