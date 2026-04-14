<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class DownloadDepositNotifyReceiptRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var 
     */
    private $body;

    /**
     * Gets body
     *
     * @return 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets body
     *
     * @param  $body
     * @return DownloadDepositNotifyReceiptRequest
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public static function getOperationId()
    {
        return 'download_deposit_notify_receipt';
    }


}
