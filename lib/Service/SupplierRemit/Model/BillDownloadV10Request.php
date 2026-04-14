<?php

namespace Yeepay\Yop\Sdk\Service\SupplierRemit\Model;


class BillDownloadV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $remitDate;

    /**
     * Gets remitDate
     *
     * @return string
     */
    public function getRemitDate()
    {
        return $this->remitDate;
    }

    /**
     * Sets remitDate
     *
     * @param string $remitDate
     * @return BillDownloadV10Request
     */
    public function setRemitDate($remitDate)
    {
        $this->remitDate = $remitDate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bill_download_v1_0';
    }


}
