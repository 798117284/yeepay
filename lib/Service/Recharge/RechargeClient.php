<?php


namespace Yeepay\Yop\Sdk\Service\Recharge;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Recharge\Model as Model;

class RechargeClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * RechargeClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BankAccountQueryRequest $request
     * @return Model\BankAccountQueryResponse
     * @throws YopClientException
     */
    public function bankAccountQuery(Model\BankAccountQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryRequestMarshaller::getInstance(),
            Model\BankAccountQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryV10Request $request
     * @return Model\BankAccountQueryV10Response
     * @throws YopClientException
     */
    public function bank_account_query_v1_0(Model\BankAccountQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryV10RequestMarshaller::getInstance(),
            Model\BankAccountQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
