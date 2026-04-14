<?php

namespace Yeepay\Yop\Sdk\Service\Pos\Model;


class InstallPosWithProductTest1Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $customerNumber;
    /**
     * @var string
     */
    private $shopStr;
    /**
     * @var string
     */
    private $posStr;
    /**
     * @var string
     */
    private $productCode;
    /**
     * @var string
     */
    private $externalMcc;
    /**
     * @var string
     */
    private $customerType;
    /**
     * @var array|string
     */
    private $shopList;
    /**
     * @var array|string
     */
    private $posList;

    /**
     * Gets customerNumber
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * Sets customerNumber
     *
     * @param string $customerNumber
     * @return InstallPosWithProductTest1Request
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;
        return $this;
    }
    /**
     * Gets shopStr
     *
     * @return string
     */
    public function getShopStr()
    {
        return $this->shopStr;
    }

    /**
     * Sets shopStr
     *
     * @param string $shopStr
     * @return InstallPosWithProductTest1Request
     */
    public function setShopStr($shopStr)
    {
        $this->shopStr = $shopStr;
        return $this;
    }
    /**
     * Gets posStr
     *
     * @return string
     */
    public function getPosStr()
    {
        return $this->posStr;
    }

    /**
     * Sets posStr
     *
     * @param string $posStr
     * @return InstallPosWithProductTest1Request
     */
    public function setPosStr($posStr)
    {
        $this->posStr = $posStr;
        return $this;
    }
    /**
     * Gets productCode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Sets productCode
     *
     * @param string $productCode
     * @return InstallPosWithProductTest1Request
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * Gets externalMcc
     *
     * @return string
     */
    public function getExternalMcc()
    {
        return $this->externalMcc;
    }

    /**
     * Sets externalMcc
     *
     * @param string $externalMcc
     * @return InstallPosWithProductTest1Request
     */
    public function setExternalMcc($externalMcc)
    {
        $this->externalMcc = $externalMcc;
        return $this;
    }
    /**
     * Gets customerType
     *
     * @return string
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Sets customerType
     *
     * @param string $customerType
     * @return InstallPosWithProductTest1Request
     */
    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;
        return $this;
    }
    /**
     * Gets shopList
     *
     * @return array|string
     */
    public function getShopList()
    {
        return $this->shopList;
    }

    /**
     * Sets shopList
     *
     * @param array|string $shopList
     * @return InstallPosWithProductTest1Request
     */
    public function setShopList($shopList)
    {
        $this->shopList = $shopList;
        return $this;
    }
    /**
     * Gets posList
     *
     * @return array|string
     */
    public function getPosList()
    {
        return $this->posList;
    }

    /**
     * Sets posList
     *
     * @param array|string $posList
     * @return InstallPosWithProductTest1Request
     */
    public function setPosList($posList)
    {
        $this->posList = $posList;
        return $this;
    }

    public static function getOperationId()
    {
        return 'installPosWithProductTest1';
    }


}
