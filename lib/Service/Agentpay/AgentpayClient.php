<?php


namespace Yeepay\Yop\Sdk\Service\Agentpay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Agentpay\Model as Model;

class AgentpayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AgentpayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\IntentRegisterRequest $request
     * @return Model\IntentRegisterResponse
     * @throws YopClientException
     */
    public function intentRegister(Model\IntentRegisterRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\IntentRegisterRequestMarshaller::getInstance(),
            Model\IntentRegisterResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\IntentRegisterV1Request $request
     * @return Model\IntentRegisterV1Response
     * @throws YopClientException
     */
    public function intent_register_v1(Model\IntentRegisterV1Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\IntentRegisterV1RequestMarshaller::getInstance(),
            Model\IntentRegisterV1ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
