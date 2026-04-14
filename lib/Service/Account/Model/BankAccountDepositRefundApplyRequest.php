<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountDepositRefundApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return BankAccountDepositRefundApplyRequest
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bank_account_deposit_refund_apply';
    }


}
