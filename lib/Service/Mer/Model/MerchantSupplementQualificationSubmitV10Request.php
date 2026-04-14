<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantSupplementQualificationSubmitV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $qualifications;

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
     * @return MerchantSupplementQualificationSubmitV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets qualifications
     *
     * @return string
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * Sets qualifications
     *
     * @param string $qualifications
     * @return MerchantSupplementQualificationSubmitV10Request
     */
    public function setQualifications($qualifications)
    {
        $this->qualifications = $qualifications;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchant_supplement_qualification_submit_v1_0';
    }


}
