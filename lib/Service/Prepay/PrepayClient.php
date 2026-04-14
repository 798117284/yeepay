<?php


namespace Yeepay\Yop\Sdk\Service\Prepay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Prepay\Model as Model;

class PrepayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * PrepayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\CompleteRequest $request
     * @return Model\CompleteResponse
     * @throws YopClientException
     */
    public function complete(Model\CompleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompleteRequestMarshaller::getInstance(),
            Model\CompleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CompleteRepealRequest $request
     * @return Model\CompleteRepealResponse
     * @throws YopClientException
     */
    public function completeRepeal(Model\CompleteRepealRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompleteRepealRequestMarshaller::getInstance(),
            Model\CompleteRepealResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PreauthCompleteRequest $request
     * @return Model\PreauthCompleteResponse
     * @throws YopClientException
     */
    public function preauthComplete(Model\PreauthCompleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PreauthCompleteRequestMarshaller::getInstance(),
            Model\PreauthCompleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PreauthCompleteRepealRequest $request
     * @return Model\PreauthCompleteRepealResponse
     * @throws YopClientException
     */
    public function preauthCompleteRepeal(Model\PreauthCompleteRepealRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PreauthCompleteRepealRequestMarshaller::getInstance(),
            Model\PreauthCompleteRepealResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PreauthRepealRequest $request
     * @return Model\PreauthRepealResponse
     * @throws YopClientException
     */
    public function preauthRepeal(Model\PreauthRepealRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PreauthRepealRequestMarshaller::getInstance(),
            Model\PreauthRepealResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PreauthCompleteRepealV10Request $request
     * @return Model\PreauthCompleteRepealV10Response
     * @throws YopClientException
     */
    public function preauth_complete_repeal_v1_0(Model\PreauthCompleteRepealV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PreauthCompleteRepealV10RequestMarshaller::getInstance(),
            Model\PreauthCompleteRepealV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PreauthCompleteV10Request $request
     * @return Model\PreauthCompleteV10Response
     * @throws YopClientException
     */
    public function preauth_complete_v1_0(Model\PreauthCompleteV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PreauthCompleteV10RequestMarshaller::getInstance(),
            Model\PreauthCompleteV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PreauthRepealV10Request $request
     * @return Model\PreauthRepealV10Response
     * @throws YopClientException
     */
    public function preauth_repeal_v1_0(Model\PreauthRepealV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PreauthRepealV10RequestMarshaller::getInstance(),
            Model\PreauthRepealV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PrepayCompleteRepealV10Request $request
     * @return Model\PrepayCompleteRepealV10Response
     * @throws YopClientException
     */
    public function prepay_complete_repeal_v1_0(Model\PrepayCompleteRepealV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PrepayCompleteRepealV10RequestMarshaller::getInstance(),
            Model\PrepayCompleteRepealV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PrepayCompleteV10Request $request
     * @return Model\PrepayCompleteV10Response
     * @throws YopClientException
     */
    public function prepay_complete_v1_0(Model\PrepayCompleteV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PrepayCompleteV10RequestMarshaller::getInstance(),
            Model\PrepayCompleteV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PrepayRepealV10Request $request
     * @return Model\PrepayRepealV10Response
     * @throws YopClientException
     */
    public function prepay_repeal_v1_0(Model\PrepayRepealV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PrepayRepealV10RequestMarshaller::getInstance(),
            Model\PrepayRepealV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RepealRequest $request
     * @return Model\RepealResponse
     * @throws YopClientException
     */
    public function repeal(Model\RepealRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RepealRequestMarshaller::getInstance(),
            Model\RepealResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
