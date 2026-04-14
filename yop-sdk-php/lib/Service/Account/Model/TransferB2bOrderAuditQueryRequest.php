<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferB2bOrderAuditQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $fromMerchantNo;
    /**
     * @var string
     */
    private $auditMethod;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $orderNo;

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
     * @return TransferB2bOrderAuditQueryRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets fromMerchantNo
     *
     * @return string
     */
    public function getFromMerchantNo()
    {
        return $this->fromMerchantNo;
    }

    /**
     * Sets fromMerchantNo
     *
     * @param string $fromMerchantNo
     * @return TransferB2bOrderAuditQueryRequest
     */
    public function setFromMerchantNo($fromMerchantNo)
    {
        $this->fromMerchantNo = $fromMerchantNo;
        return $this;
    }
    /**
     * Gets auditMethod
     *
     * @return string
     */
    public function getAuditMethod()
    {
        return $this->auditMethod;
    }

    /**
     * Sets auditMethod
     *
     * @param string $auditMethod
     * @return TransferB2bOrderAuditQueryRequest
     */
    public function setAuditMethod($auditMethod)
    {
        $this->auditMethod = $auditMethod;
        return $this;
    }
    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return TransferB2bOrderAuditQueryRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Sets orderNo
     *
     * @param string $orderNo
     * @return TransferB2bOrderAuditQueryRequest
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'transfer_b2b_order_audit_query';
    }


}
