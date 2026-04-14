<?php


namespace Yeepay\Yop\Sdk\Service\MonthDonate;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\MonthDonate\Model as Model;

class MonthDonateClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MonthDonateClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ChangeRequest $request
     * @return Model\ChangeResponse
     * @throws YopClientException
     */
    public function change(Model\ChangeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ChangeRequestMarshaller::getInstance(),
            Model\ChangeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CloseRequest $request
     * @return Model\CloseResponse
     * @throws YopClientException
     */
    public function close(Model\CloseRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CloseRequestMarshaller::getInstance(),
            Model\CloseResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreateUserRequest $request
     * @return Model\CreateUserResponse
     * @throws YopClientException
     */
    public function createUser(Model\CreateUserRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateUserRequestMarshaller::getInstance(),
            Model\CreateUserResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenRequest $request
     * @return Model\OpenResponse
     * @throws YopClientException
     */
    public function open(Model\OpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenRequestMarshaller::getInstance(),
            Model\OpenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryOrderInfoRequest $request
     * @return Model\QueryOrderInfoResponse
     * @throws YopClientException
     */
    public function queryOrderInfo(Model\QueryOrderInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryOrderInfoRequestMarshaller::getInstance(),
            Model\QueryOrderInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QuerySignInfoRequest $request
     * @return Model\QuerySignInfoResponse
     * @throws YopClientException
     */
    public function querySignInfo(Model\QuerySignInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QuerySignInfoRequestMarshaller::getInstance(),
            Model\QuerySignInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryUserInfoRequest $request
     * @return Model\QueryUserInfoResponse
     * @throws YopClientException
     */
    public function queryUserInfo(Model\QueryUserInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryUserInfoRequestMarshaller::getInstance(),
            Model\QueryUserInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
