<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class InstallmentPayRequestV11Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var float
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var string
     */
    private $fundProcessType;
    /**
     * @var string
     */
    private $bankId;
    /**
     * @var string
     */
    private $expireTime;
    /**
     * @var string
     */
    private $goodsName;
    /**
     * @var int
     */
    private $numOfInstallment;
    /**
     * @var string
     */
    private $riskInfo;
    /**
     * @var string
     */
    private $redirectUrl;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $csUrl;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $pid;
    /**
     * @var string
     */
    private $trxChnnel;

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
     * @return InstallmentPayRequestV11Request
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
     * @return InstallmentPayRequestV11Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount
     * @return InstallmentPayRequestV11Request
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId
     *
     * @param string $orderId
     * @return InstallmentPayRequestV11Request
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets fundProcessType
     *
     * @return string
     */
    public function getFundProcessType()
    {
        return $this->fundProcessType;
    }

    /**
     * Sets fundProcessType
     *
     * @param string $fundProcessType
     * @return InstallmentPayRequestV11Request
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
        return $this;
    }
    /**
     * Gets bankId
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->bankId;
    }

    /**
     * Sets bankId
     *
     * @param string $bankId
     * @return InstallmentPayRequestV11Request
     */
    public function setBankId($bankId)
    {
        $this->bankId = $bankId;
        return $this;
    }
    /**
     * Gets expireTime
     *
     * @return string
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * Sets expireTime
     *
     * @param string $expireTime
     * @return InstallmentPayRequestV11Request
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;
        return $this;
    }
    /**
     * Gets goodsName
     *
     * @return string
     */
    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * Sets goodsName
     *
     * @param string $goodsName
     * @return InstallmentPayRequestV11Request
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        return $this;
    }
    /**
     * Gets numOfInstallment
     *
     * @return int
     */
    public function getNumOfInstallment()
    {
        return $this->numOfInstallment;
    }

    /**
     * Sets numOfInstallment
     *
     * @param int $numOfInstallment
     * @return InstallmentPayRequestV11Request
     */
    public function setNumOfInstallment($numOfInstallment)
    {
        $this->numOfInstallment = $numOfInstallment;
        return $this;
    }
    /**
     * Gets riskInfo
     *
     * @return string
     */
    public function getRiskInfo()
    {
        return $this->riskInfo;
    }

    /**
     * Sets riskInfo
     *
     * @param string $riskInfo
     * @return InstallmentPayRequestV11Request
     */
    public function setRiskInfo($riskInfo)
    {
        $this->riskInfo = $riskInfo;
        return $this;
    }
    /**
     * Gets redirectUrl
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * Sets redirectUrl
     *
     * @param string $redirectUrl
     * @return InstallmentPayRequestV11Request
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return InstallmentPayRequestV11Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets csUrl
     *
     * @return string
     */
    public function getCsUrl()
    {
        return $this->csUrl;
    }

    /**
     * Sets csUrl
     *
     * @param string $csUrl
     * @return InstallmentPayRequestV11Request
     */
    public function setCsUrl($csUrl)
    {
        $this->csUrl = $csUrl;
        return $this;
    }
    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets memo
     *
     * @param string $memo
     * @return InstallmentPayRequestV11Request
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * Gets pid
     *
     * @return string
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Sets pid
     *
     * @param string $pid
     * @return InstallmentPayRequestV11Request
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
        return $this;
    }
    /**
     * Gets trxChnnel
     *
     * @return string
     */
    public function getTrxChnnel()
    {
        return $this->trxChnnel;
    }

    /**
     * Sets trxChnnel
     *
     * @param string $trxChnnel
     * @return InstallmentPayRequestV11Request
     */
    public function setTrxChnnel($trxChnnel)
    {
        $this->trxChnnel = $trxChnnel;
        return $this;
    }

    public static function getOperationId()
    {
        return 'installmentPayRequestV1_1';
    }


}
