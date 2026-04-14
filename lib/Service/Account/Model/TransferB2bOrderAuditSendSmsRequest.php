<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferB2bOrderAuditSendSmsRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return TransferB2bOrderAuditSendSmsRequest
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public static function getOperationId()
    {
        return 'transfer_b2b_order_audit_send_sms';
    }


}
