<?php


namespace Yeepay\Yop\Sdk\Service\Settle;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Model\YosDownloadResponse;
use Yeepay\Yop\Sdk\Model\Transform\YosDownloadResponseUnMarshaller;
use Yeepay\Yop\Sdk\Service\Settle\Model as Model;

class SettleClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * SettleClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BalanceQueryRequest $request
     * @return Model\BalanceQueryResponse
     * @throws YopClientException
     */
    public function balanceQuery(Model\BalanceQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceQueryRequestMarshaller::getInstance(),
            Model\BalanceQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceQueryV10Request $request
     * @return Model\BalanceQueryV10Response
     * @throws YopClientException
     */
    public function balance_query_v1_0(Model\BalanceQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceQueryV10RequestMarshaller::getInstance(),
            Model\BalanceQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FileGetRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function fileGet(Model\FileGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FileGetRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FileGetV10Request $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function file_get_v1_0(Model\FileGetV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FileGetV10RequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptApplyRequest $request
     * @return Model\ReceiptApplyResponse
     * @throws YopClientException
     */
    public function receiptApply(Model\ReceiptApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptApplyRequestMarshaller::getInstance(),
            Model\ReceiptApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptGetRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function receiptGet(Model\ReceiptGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptGetRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordRetryRequest $request
     * @return Model\RecordRetryResponse
     * @throws YopClientException
     */
    public function recordRetry(Model\RecordRetryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordRetryRequestMarshaller::getInstance(),
            Model\RecordRetryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordRetryV10Request $request
     * @return Model\RecordRetryV10Response
     * @throws YopClientException
     */
    public function record_retry_v1_0(Model\RecordRetryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordRetryV10RequestMarshaller::getInstance(),
            Model\RecordRetryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordsOrderQueryRequest $request
     * @return Model\RecordsOrderQueryResponse
     * @throws YopClientException
     */
    public function recordsOrderQuery(Model\RecordsOrderQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordsOrderQueryRequestMarshaller::getInstance(),
            Model\RecordsOrderQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordsPageRequest $request
     * @return Model\RecordsPageResponse
     * @throws YopClientException
     */
    public function recordsPage(Model\RecordsPageRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordsPageRequestMarshaller::getInstance(),
            Model\RecordsPageResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordsQueryRequest $request
     * @return Model\RecordsQueryResponse
     * @throws YopClientException
     */
    public function recordsQuery(Model\RecordsQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordsQueryRequestMarshaller::getInstance(),
            Model\RecordsQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordsPageV10Request $request
     * @return Model\RecordsPageV10Response
     * @throws YopClientException
     */
    public function records_page_v1_0(Model\RecordsPageV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordsPageV10RequestMarshaller::getInstance(),
            Model\RecordsPageV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordsQueryV10Request $request
     * @return Model\RecordsQueryV10Response
     * @throws YopClientException
     */
    public function records_query_v1_0(Model\RecordsQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordsQueryV10RequestMarshaller::getInstance(),
            Model\RecordsQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SelfSettleApplyRequest $request
     * @return Model\SelfSettleApplyResponse
     * @throws YopClientException
     */
    public function selfSettleApply(Model\SelfSettleApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SelfSettleApplyRequestMarshaller::getInstance(),
            Model\SelfSettleApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SelfSettleApplyV10Request $request
     * @return Model\SelfSettleApplyV10Response
     * @throws YopClientException
     */
    public function self_settle_apply_v1_0(Model\SelfSettleApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SelfSettleApplyV10RequestMarshaller::getInstance(),
            Model\SelfSettleApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleCardAddRequest $request
     * @return Model\SettleCardAddResponse
     * @throws YopClientException
     */
    public function settleCardAdd(Model\SettleCardAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleCardAddRequestMarshaller::getInstance(),
            Model\SettleCardAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleCardModifyRequest $request
     * @return Model\SettleCardModifyResponse
     * @throws YopClientException
     */
    public function settleCardModify(Model\SettleCardModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleCardModifyRequestMarshaller::getInstance(),
            Model\SettleCardModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleWayModifyRatioRequest $request
     * @return Model\SettleWayModifyRatioResponse
     * @throws YopClientException
     */
    public function settleWayModifyRatio(Model\SettleWayModifyRatioRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleWayModifyRatioRequestMarshaller::getInstance(),
            Model\SettleWayModifyRatioResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleWayQueryRequest $request
     * @return Model\SettleWayQueryResponse
     * @throws YopClientException
     */
    public function settleWayQuery(Model\SettleWayQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleWayQueryRequestMarshaller::getInstance(),
            Model\SettleWayQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleCardAddV10Request $request
     * @return Model\SettleCardAddV10Response
     * @throws YopClientException
     */
    public function settle_card_add_v1_0(Model\SettleCardAddV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleCardAddV10RequestMarshaller::getInstance(),
            Model\SettleCardAddV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleCardModifyV10Request $request
     * @return Model\SettleCardModifyV10Response
     * @throws YopClientException
     */
    public function settle_card_modify_v1_0(Model\SettleCardModifyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleCardModifyV10RequestMarshaller::getInstance(),
            Model\SettleCardModifyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleReceiptApplyV10Request $request
     * @return Model\SettleReceiptApplyV10Response
     * @throws YopClientException
     */
    public function settle_receipt_apply_v1_0(Model\SettleReceiptApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleReceiptApplyV10RequestMarshaller::getInstance(),
            Model\SettleReceiptApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleReceiptGetV10Request $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function settle_receipt_get_v1_0(Model\SettleReceiptGetV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleReceiptGetV10RequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleRecodOrderQueryV10Request $request
     * @return Model\SettleRecodOrderQueryV10Response
     * @throws YopClientException
     */
    public function settle_recod_order_query_v1_0(Model\SettleRecodOrderQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleRecodOrderQueryV10RequestMarshaller::getInstance(),
            Model\SettleRecodOrderQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleWayModifyRatioV10Request $request
     * @return Model\SettleWayModifyRatioV10Response
     * @throws YopClientException
     */
    public function settle_way_modify_ratio_v1_0(Model\SettleWayModifyRatioV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleWayModifyRatioV10RequestMarshaller::getInstance(),
            Model\SettleWayModifyRatioV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleWayQueryV10Request $request
     * @return Model\SettleWayQueryV10Response
     * @throws YopClientException
     */
    public function settle_way_query_v1_0(Model\SettleWayQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleWayQueryV10RequestMarshaller::getInstance(),
            Model\SettleWayQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
