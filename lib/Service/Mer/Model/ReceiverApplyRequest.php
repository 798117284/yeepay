<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class ReceiverApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $receiverName;
    /**
     * @var string
     */
    private $label;
    /**
     * @var string
     */
    private $licenceNo;
    /**
     * @var string
     */
    private $mobile;
    /**
     * @var string
     */
    private $legalName;
    /**
     * @var string
     */
    private $legalLicenceNo;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $bankCardNo;
    /**
     * @var string
     */
    private $settlementProduct;
    /**
     * @var string
     */
    private $settlementDate;

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
     * @return ReceiverApplyRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return ReceiverApplyRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return ReceiverApplyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets type
     *
     * @param string $type
     * @return ReceiverApplyRequest
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Gets receiverName
     *
     * @return string
     */
    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * Sets receiverName
     *
     * @param string $receiverName
     * @return ReceiverApplyRequest
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName = $receiverName;
        return $this;
    }
    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets label
     *
     * @param string $label
     * @return ReceiverApplyRequest
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Gets licenceNo
     *
     * @return string
     */
    public function getLicenceNo()
    {
        return $this->licenceNo;
    }

    /**
     * Sets licenceNo
     *
     * @param string $licenceNo
     * @return ReceiverApplyRequest
     */
    public function setLicenceNo($licenceNo)
    {
        $this->licenceNo = $licenceNo;
        return $this;
    }
    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets mobile
     *
     * @param string $mobile
     * @return ReceiverApplyRequest
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Gets legalName
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * Sets legalName
     *
     * @param string $legalName
     * @return ReceiverApplyRequest
     */
    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
        return $this;
    }
    /**
     * Gets legalLicenceNo
     *
     * @return string
     */
    public function getLegalLicenceNo()
    {
        return $this->legalLicenceNo;
    }

    /**
     * Sets legalLicenceNo
     *
     * @param string $legalLicenceNo
     * @return ReceiverApplyRequest
     */
    public function setLegalLicenceNo($legalLicenceNo)
    {
        $this->legalLicenceNo = $legalLicenceNo;
        return $this;
    }
    /**
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode
     * @return ReceiverApplyRequest
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo
     * @return ReceiverApplyRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }
    /**
     * Gets settlementProduct
     *
     * @return string
     */
    public function getSettlementProduct()
    {
        return $this->settlementProduct;
    }

    /**
     * Sets settlementProduct
     *
     * @param string $settlementProduct
     * @return ReceiverApplyRequest
     */
    public function setSettlementProduct($settlementProduct)
    {
        $this->settlementProduct = $settlementProduct;
        return $this;
    }
    /**
     * Gets settlementDate
     *
     * @return string
     */
    public function getSettlementDate()
    {
        return $this->settlementDate;
    }

    /**
     * Sets settlementDate
     *
     * @param string $settlementDate
     * @return ReceiverApplyRequest
     */
    public function setSettlementDate($settlementDate)
    {
        $this->settlementDate = $settlementDate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'receiverApply';
    }


}
