<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class CreateQrcodeRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return CreateQrcodeRequest
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
     * @return CreateQrcodeRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'createQrcode';
    }


}
