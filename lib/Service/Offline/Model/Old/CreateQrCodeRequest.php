<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;


class CreateQrCodeRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var int
     */
    private $count;
    /**
     * @var string
     */
    private $parentMerchantNo;

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets count
     *
     * @param int $count
     * @return CreateQrCodeRequest
     */
    public function setCount($count)
    {
        $this->count = $count;
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
     * @return CreateQrCodeRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'createQrCode';
    }


}
