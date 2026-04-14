<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class InfoModifyV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $customerRequestNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $mode;
    /**
     * @var string
     */
    private $invoiceType;
    /**
     * @var string
     */
    private $invoiceForm;
    /**
     * @var string
     */
    private $linkman;
    /**
     * @var string
     */
    private $linkmanPhone;
    /**
     * @var string
     */
    private $postalAddress;
    /**
     * @var string
     */
    private $postalCode;
    /**
     * @var string
     */
    private $taxpayerId;
    /**
     * @var string
     */
    private $invoicePhone;
    /**
     * @var string
     */
    private $invoiceAddress;
    /**
     * @var string
     */
    private $bankName;
    /**
     * @var string
     */
    private $accountNo;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $standardType;
    /**
     * @var string
     */
    private $unit;
    /**
     * @var int
     */
    private $quantity;
    /**
     * @var array|string
     */
    private $invoiceBusiness;

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
     * @return InfoModifyV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets customerRequestNo
     *
     * @return string
     */
    public function getCustomerRequestNo()
    {
        return $this->customerRequestNo;
    }

    /**
     * Sets customerRequestNo
     *
     * @param string $customerRequestNo
     * @return InfoModifyV10Request
     */
    public function setCustomerRequestNo($customerRequestNo)
    {
        $this->customerRequestNo = $customerRequestNo;
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
     * @return InfoModifyV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets mode
     *
     * @param string $mode
     * @return InfoModifyV10Request
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * Gets invoiceType
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    /**
     * Sets invoiceType
     *
     * @param string $invoiceType
     * @return InfoModifyV10Request
     */
    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }
    /**
     * Gets invoiceForm
     *
     * @return string
     */
    public function getInvoiceForm()
    {
        return $this->invoiceForm;
    }

    /**
     * Sets invoiceForm
     *
     * @param string $invoiceForm
     * @return InfoModifyV10Request
     */
    public function setInvoiceForm($invoiceForm)
    {
        $this->invoiceForm = $invoiceForm;
        return $this;
    }
    /**
     * Gets linkman
     *
     * @return string
     */
    public function getLinkman()
    {
        return $this->linkman;
    }

    /**
     * Sets linkman
     *
     * @param string $linkman
     * @return InfoModifyV10Request
     */
    public function setLinkman($linkman)
    {
        $this->linkman = $linkman;
        return $this;
    }
    /**
     * Gets linkmanPhone
     *
     * @return string
     */
    public function getLinkmanPhone()
    {
        return $this->linkmanPhone;
    }

    /**
     * Sets linkmanPhone
     *
     * @param string $linkmanPhone
     * @return InfoModifyV10Request
     */
    public function setLinkmanPhone($linkmanPhone)
    {
        $this->linkmanPhone = $linkmanPhone;
        return $this;
    }
    /**
     * Gets postalAddress
     *
     * @return string
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Sets postalAddress
     *
     * @param string $postalAddress
     * @return InfoModifyV10Request
     */
    public function setPostalAddress($postalAddress)
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }
    /**
     * Gets postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode
     * @return InfoModifyV10Request
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * Gets taxpayerId
     *
     * @return string
     */
    public function getTaxpayerId()
    {
        return $this->taxpayerId;
    }

    /**
     * Sets taxpayerId
     *
     * @param string $taxpayerId
     * @return InfoModifyV10Request
     */
    public function setTaxpayerId($taxpayerId)
    {
        $this->taxpayerId = $taxpayerId;
        return $this;
    }
    /**
     * Gets invoicePhone
     *
     * @return string
     */
    public function getInvoicePhone()
    {
        return $this->invoicePhone;
    }

    /**
     * Sets invoicePhone
     *
     * @param string $invoicePhone
     * @return InfoModifyV10Request
     */
    public function setInvoicePhone($invoicePhone)
    {
        $this->invoicePhone = $invoicePhone;
        return $this;
    }
    /**
     * Gets invoiceAddress
     *
     * @return string
     */
    public function getInvoiceAddress()
    {
        return $this->invoiceAddress;
    }

    /**
     * Sets invoiceAddress
     *
     * @param string $invoiceAddress
     * @return InfoModifyV10Request
     */
    public function setInvoiceAddress($invoiceAddress)
    {
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }
    /**
     * Gets bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Sets bankName
     *
     * @param string $bankName
     * @return InfoModifyV10Request
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }
    /**
     * Gets accountNo
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * Sets accountNo
     *
     * @param string $accountNo
     * @return InfoModifyV10Request
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        return $this;
    }
    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets email
     *
     * @param string $email
     * @return InfoModifyV10Request
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets remark
     *
     * @param string $remark
     * @return InfoModifyV10Request
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }
    /**
     * Gets standardType
     *
     * @return string
     */
    public function getStandardType()
    {
        return $this->standardType;
    }

    /**
     * Sets standardType
     *
     * @param string $standardType
     * @return InfoModifyV10Request
     */
    public function setStandardType($standardType)
    {
        $this->standardType = $standardType;
        return $this;
    }
    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets unit
     *
     * @param string $unit
     * @return InfoModifyV10Request
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }
    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets quantity
     *
     * @param int $quantity
     * @return InfoModifyV10Request
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Gets invoiceBusiness
     *
     * @return array|string
     */
    public function getInvoiceBusiness()
    {
        return $this->invoiceBusiness;
    }

    /**
     * Sets invoiceBusiness
     *
     * @param array|string $invoiceBusiness
     * @return InfoModifyV10Request
     */
    public function setInvoiceBusiness($invoiceBusiness)
    {
        $this->invoiceBusiness = $invoiceBusiness;
        return $this;
    }

    public static function getOperationId()
    {
        return 'info_modify_v1_0';
    }


}
