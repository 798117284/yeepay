<?php


namespace Yeepay\Yop\Sdk\Service\Auth;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Auth\Model as Model;
use Yeepay\Yop\Sdk\Service\Auth\Model\Old as ModelOld;

class AuthClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AuthClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param ModelOld\ENTERPRISEAUTHRequest $request
     * @return ModelOld\ENTERPRISEAUTHResponse
     * @throws YopClientException
     */
    public function eNTERPRISE_AUTHOld(ModelOld\ENTERPRISEAUTHRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\ENTERPRISEAUTHRequestMarshaller::getInstance(),
            ModelOld\ENTERPRISEAUTHResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAuthRequest $request
     * @return Model\EnterpriseAuthResponse
     * @throws YopClientException
     */
    public function enterpriseAuth(Model\EnterpriseAuthRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAuthRequestMarshaller::getInstance(),
            Model\EnterpriseAuthResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FaceAuthRequest $request
     * @return Model\FaceAuthResponse
     * @throws YopClientException
     */
    public function faceAuth(Model\FaceAuthRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FaceAuthRequestMarshaller::getInstance(),
            Model\FaceAuthResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FaceAuthKycRequest $request
     * @return Model\FaceAuthKycResponse
     * @throws YopClientException
     */
    public function faceAuthKyc(Model\FaceAuthKycRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FaceAuthKycRequestMarshaller::getInstance(),
            Model\FaceAuthKycResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FaceAuthKycQueryRequest $request
     * @return Model\FaceAuthKycQueryResponse
     * @throws YopClientException
     */
    public function faceAuthKycQuery(Model\FaceAuthKycQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FaceAuthKycQueryRequestMarshaller::getInstance(),
            Model\FaceAuthKycQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FaceAuthResultQueryRequest $request
     * @return Model\FaceAuthResultQueryResponse
     * @throws YopClientException
     */
    public function faceAuthResultQuery(Model\FaceAuthResultQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FaceAuthResultQueryRequestMarshaller::getInstance(),
            Model\FaceAuthResultQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MultipleAuthRequest $request
     * @return Model\MultipleAuthResponse
     * @throws YopClientException
     */
    public function multipleAuth(Model\MultipleAuthRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MultipleAuthRequestMarshaller::getInstance(),
            Model\MultipleAuthResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PERSONALINFORMATIONAUTHRequest $request
     * @return Model\PERSONALINFORMATIONAUTHResponse
     * @throws YopClientException
     */
    public function pERSONAL_INFORMATION_AUTH(Model\PERSONALINFORMATIONAUTHRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PERSONALINFORMATIONAUTHRequestMarshaller::getInstance(),
            Model\PERSONALINFORMATIONAUTHResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PersonAuthRequest $request
     * @return Model\PersonAuthResponse
     * @throws YopClientException
     */
    public function personAuth(Model\PersonAuthRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PersonAuthRequestMarshaller::getInstance(),
            Model\PersonAuthResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PersonQueryRequest $request
     * @return Model\PersonQueryResponse
     * @throws YopClientException
     */
    public function personQuery(Model\PersonQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PersonQueryRequestMarshaller::getInstance(),
            Model\PersonQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
