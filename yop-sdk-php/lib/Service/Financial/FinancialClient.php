<?php


namespace Yeepay\Yop\Sdk\Service\Financial;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Financial\Model as Model;

class FinancialClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * FinancialClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AccountBalacneQueryRequest $request
     * @return Model\AccountBalacneQueryResponse
     * @throws YopClientException
     */
    public function accountBalacneQuery(Model\AccountBalacneQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountBalacneQueryRequestMarshaller::getInstance(),
            Model\AccountBalacneQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FundBalanceQueryRequest $request
     * @return Model\FundBalanceQueryResponse
     * @throws YopClientException
     */
    public function fundBalanceQuery(Model\FundBalanceQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FundBalanceQueryRequestMarshaller::getInstance(),
            Model\FundBalanceQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FundRemitRequest $request
     * @return Model\FundRemitResponse
     * @throws YopClientException
     */
    public function fundRemit(Model\FundRemitRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FundRemitRequestMarshaller::getInstance(),
            Model\FundRemitResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FundRemitQueryRequest $request
     * @return Model\FundRemitQueryResponse
     * @throws YopClientException
     */
    public function fundRemitQuery(Model\FundRemitQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FundRemitQueryRequestMarshaller::getInstance(),
            Model\FundRemitQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FundRemitRequestRequest $request
     * @return Model\FundRemitRequestResponse
     * @throws YopClientException
     */
    public function fundRemitRequest(Model\FundRemitRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FundRemitRequestRequestMarshaller::getInstance(),
            Model\FundRemitRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FundRemitRequestQueryRequest $request
     * @return Model\FundRemitRequestQueryResponse
     * @throws YopClientException
     */
    public function fundRemitRequestQuery(Model\FundRemitRequestQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FundRemitRequestQueryRequestMarshaller::getInstance(),
            Model\FundRemitRequestQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FundTransferQueryRequest $request
     * @return Model\FundTransferQueryResponse
     * @throws YopClientException
     */
    public function fundTransferQuery(Model\FundTransferQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FundTransferQueryRequestMarshaller::getInstance(),
            Model\FundTransferQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FundTransferRequestRequest $request
     * @return Model\FundTransferRequestResponse
     * @throws YopClientException
     */
    public function fundTransferRequest(Model\FundTransferRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FundTransferRequestRequestMarshaller::getInstance(),
            Model\FundTransferRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FundTransferRequest0Request $request
     * @return Model\FundTransferRequest0Response
     * @throws YopClientException
     */
    public function fundTransferRequest_0(Model\FundTransferRequest0Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FundTransferRequest0RequestMarshaller::getInstance(),
            Model\FundTransferRequest0ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FundTransferReuestQueryRequest $request
     * @return Model\FundTransferReuestQueryResponse
     * @throws YopClientException
     */
    public function fundTransferReuestQuery(Model\FundTransferReuestQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FundTransferReuestQueryRequestMarshaller::getInstance(),
            Model\FundTransferReuestQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetReceiptRequest $request
     * @return Model\GetReceiptResponse
     * @throws YopClientException
     */
    public function getReceipt(Model\GetReceiptRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetReceiptRequestMarshaller::getInstance(),
            Model\GetReceiptResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenAccountQueryRequest $request
     * @return Model\OpenAccountQueryResponse
     * @throws YopClientException
     */
    public function openAccountQuery(Model\OpenAccountQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenAccountQueryRequestMarshaller::getInstance(),
            Model\OpenAccountQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenAccountRequestRequest $request
     * @return Model\OpenAccountRequestResponse
     * @throws YopClientException
     */
    public function openAccountRequest(Model\OpenAccountRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenAccountRequestRequestMarshaller::getInstance(),
            Model\OpenAccountRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenAccountRequestQueryRequest $request
     * @return Model\OpenAccountRequestQueryResponse
     * @throws YopClientException
     */
    public function openAccountRequestQuery(Model\OpenAccountRequestQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenAccountRequestQueryRequestMarshaller::getInstance(),
            Model\OpenAccountRequestQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenAccountRequest0Request $request
     * @return Model\OpenAccountRequest0Response
     * @throws YopClientException
     */
    public function openAccountRequest_0(Model\OpenAccountRequest0Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenAccountRequest0RequestMarshaller::getInstance(),
            Model\OpenAccountRequest0ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptGetRequest $request
     * @return Model\ReceiptGetResponse
     * @throws YopClientException
     */
    public function receiptGet(Model\ReceiptGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptGetRequestMarshaller::getInstance(),
            Model\ReceiptGetResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
