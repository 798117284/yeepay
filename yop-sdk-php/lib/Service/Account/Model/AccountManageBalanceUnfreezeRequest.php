<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageBalanceUnfreezeRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var string
     */
    private $orgRequestNo;
    /**
     * @var string
     */
    private $unFreezeAmount;

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
     * @return AccountManageBalanceUnfreezeRequest
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
     * @return AccountManageBalanceUnfreezeRequest
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
     * @return AccountManageBalanceUnfreezeRequest
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
     * @return AccountManageBalanceUnfreezeRequest
     */
    public function setOrderFlowNo($orderFlowNo)
    {
        $this->orderFlowNo = $orderFlowNo;
        return $this;
    }
    /**
     * Gets orgRequestNo
     *
     * @return string
     */
    public function getOrgRequestNo()
    {
        return $this->orgRequestNo;
    }

    /**
     * Sets orgRequestNo
     *
     * @param string $orgRequestNo
     * @return AccountManageBalanceUnfreezeRequest
     */
    public function setOrgRequestNo($orgRequestNo)
    {
        $this->orgRequestNo = $orgRequestNo;
        return $this;
    }
    /**
     * Gets unFreezeAmount
     *
     * @return string
     */
    public function getUnFreezeAmount()
    {
        return $this->unFreezeAmount;
    }

    /**
     * Sets unFreezeAmount
     *
     * @param string $unFreezeAmount
     * @return AccountManageBalanceUnfreezeRequest
     */
    public function setUnFreezeAmount($unFreezeAmount)
    {
        $this->unFreezeAmount = $unFreezeAmount;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountManageBalanceUnfreeze';
    }


}
