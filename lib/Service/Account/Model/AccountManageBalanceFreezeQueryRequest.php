<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageBalanceFreezeQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $requestNo;
    /**
     * @var string
     */
    private $orderFlowNo;

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
     * @return AccountManageBalanceFreezeQueryRequest
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
     * @return AccountManageBalanceFreezeQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return AccountManageBalanceFreezeQueryRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets orderFlowNo
     *
     * @return string
     */
    public function getOrderFlowNo()
    {
        return $this->orderFlowNo;
    }

    /**
     * Sets orderFlowNo
     *
     * @param string $orderFlowNo
     * @return AccountManageBalanceFreezeQueryRequest
     */
    public function setOrderFlowNo($orderFlowNo)
    {
        $this->orderFlowNo = $orderFlowNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountManageBalanceFreezeQuery';
    }


}
