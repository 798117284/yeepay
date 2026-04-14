<?php


namespace Yeepay\Yop\Sdk\Service\Divide;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Divide\Model as Model;

class DivideClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * DivideClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ApplyRequest $request
     * @return Model\ApplyResponse
     * @throws YopClientException
     */
    public function apply(Model\ApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ApplyRequestMarshaller::getInstance(),
            Model\ApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ApplyV10Request $request
     * @return Model\ApplyV10Response
     * @throws YopClientException
     */
    public function apply_v1_0(Model\ApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ApplyV10RequestMarshaller::getInstance(),
            Model\ApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BackRequest $request
     * @return Model\BackResponse
     * @throws YopClientException
     */
    public function back(Model\BackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackRequestMarshaller::getInstance(),
            Model\BackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BackApplyRequest $request
     * @return Model\BackApplyResponse
     * @throws YopClientException
     */
    public function backApply(Model\BackApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackApplyRequestMarshaller::getInstance(),
            Model\BackApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BackQueryRequest $request
     * @return Model\BackQueryResponse
     * @throws YopClientException
     */
    public function backQuery(Model\BackQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackQueryRequestMarshaller::getInstance(),
            Model\BackQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BackReceiptDownloadRequest $request
     * @return Model\BackReceiptDownloadResponse
     * @throws YopClientException
     */
    public function backReceiptDownload(Model\BackReceiptDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackReceiptDownloadRequestMarshaller::getInstance(),
            Model\BackReceiptDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BackQueryV10Request $request
     * @return Model\BackQueryV10Response
     * @throws YopClientException
     */
    public function back_query_v1_0(Model\BackQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackQueryV10RequestMarshaller::getInstance(),
            Model\BackQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BackReceiptDownloadV10Request $request
     * @return Model\BackReceiptDownloadV10Response
     * @throws YopClientException
     */
    public function back_receipt_download_v1_0(Model\BackReceiptDownloadV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackReceiptDownloadV10RequestMarshaller::getInstance(),
            Model\BackReceiptDownloadV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BackV10Request $request
     * @return Model\BackV10Response
     * @throws YopClientException
     */
    public function back_v1_0(Model\BackV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackV10RequestMarshaller::getInstance(),
            Model\BackV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceApplyRequest $request
     * @return Model\BalanceApplyResponse
     * @throws YopClientException
     */
    public function balanceApply(Model\BalanceApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceApplyRequestMarshaller::getInstance(),
            Model\BalanceApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceBackQueryRequest $request
     * @return Model\BalanceBackQueryResponse
     * @throws YopClientException
     */
    public function balanceBackQuery(Model\BalanceBackQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceBackQueryRequestMarshaller::getInstance(),
            Model\BalanceBackQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceBatchApplyRequest $request
     * @return Model\BalanceBatchApplyResponse
     * @throws YopClientException
     */
    public function balanceBatchApply(Model\BalanceBatchApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceBatchApplyRequestMarshaller::getInstance(),
            Model\BalanceBatchApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
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
     * @param Model\BalanceReceiptRequest $request
     * @return Model\BalanceReceiptResponse
     * @throws YopClientException
     */
    public function balanceReceipt(Model\BalanceReceiptRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceReceiptRequestMarshaller::getInstance(),
            Model\BalanceReceiptResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceApplyV10Request $request
     * @return Model\BalanceApplyV10Response
     * @throws YopClientException
     */
    public function balance_apply_v1_0(Model\BalanceApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceApplyV10RequestMarshaller::getInstance(),
            Model\BalanceApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceBatchApplyV10Request $request
     * @return Model\BalanceBatchApplyV10Response
     * @throws YopClientException
     */
    public function balance_batch_apply_v1_0(Model\BalanceBatchApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceBatchApplyV10RequestMarshaller::getInstance(),
            Model\BalanceBatchApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceDivideBackApplyV10Request $request
     * @return Model\BalanceDivideBackApplyV10Response
     * @throws YopClientException
     */
    public function balance_divide_back_apply_v1_0(Model\BalanceDivideBackApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceDivideBackApplyV10RequestMarshaller::getInstance(),
            Model\BalanceDivideBackApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceDivideBackQueryV10Request $request
     * @return Model\BalanceDivideBackQueryV10Response
     * @throws YopClientException
     */
    public function balance_divide_back_query_v1_0(Model\BalanceDivideBackQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceDivideBackQueryV10RequestMarshaller::getInstance(),
            Model\BalanceDivideBackQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceDivideBackReceiptV10Request $request
     * @return Model\BalanceDivideBackReceiptV10Response
     * @throws YopClientException
     */
    public function balance_divide_back_receipt_v1_0(Model\BalanceDivideBackReceiptV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceDivideBackReceiptV10RequestMarshaller::getInstance(),
            Model\BalanceDivideBackReceiptV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceDivideBatchBackApplyV10Request $request
     * @return Model\BalanceDivideBatchBackApplyV10Response
     * @throws YopClientException
     */
    public function balance_divide_batch_back_apply_v1_0(Model\BalanceDivideBatchBackApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceDivideBatchBackApplyV10RequestMarshaller::getInstance(),
            Model\BalanceDivideBatchBackApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceDivideReceiptV10Request $request
     * @return Model\BalanceDivideReceiptV10Response
     * @throws YopClientException
     */
    public function balance_divide_receipt_v1_0(Model\BalanceDivideReceiptV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceDivideReceiptV10RequestMarshaller::getInstance(),
            Model\BalanceDivideReceiptV10ResponseUnMarshaller::getInstance());
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
     * @param Model\BatchBackApplyRequest $request
     * @return Model\BatchBackApplyResponse
     * @throws YopClientException
     */
    public function batchBackApply(Model\BatchBackApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BatchBackApplyRequestMarshaller::getInstance(),
            Model\BatchBackApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BookTransferApplyRequest $request
     * @return Model\BookTransferApplyResponse
     * @throws YopClientException
     */
    public function bookTransferApply(Model\BookTransferApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BookTransferApplyRequestMarshaller::getInstance(),
            Model\BookTransferApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BookTransferQueryRequest $request
     * @return Model\BookTransferQueryResponse
     * @throws YopClientException
     */
    public function bookTransferQuery(Model\BookTransferQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BookTransferQueryRequestMarshaller::getInstance(),
            Model\BookTransferQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BookTransferUpApplyRequest $request
     * @return Model\BookTransferUpApplyResponse
     * @throws YopClientException
     */
    public function bookTransferUpApply(Model\BookTransferUpApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BookTransferUpApplyRequestMarshaller::getInstance(),
            Model\BookTransferUpApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BookTransferUpQueryRequest $request
     * @return Model\BookTransferUpQueryResponse
     * @throws YopClientException
     */
    public function bookTransferUpQuery(Model\BookTransferUpQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BookTransferUpQueryRequestMarshaller::getInstance(),
            Model\BookTransferUpQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BookTransferQueryV10Request $request
     * @return Model\BookTransferQueryV10Response
     * @throws YopClientException
     */
    public function book_transfer_query_v1_0(Model\BookTransferQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BookTransferQueryV10RequestMarshaller::getInstance(),
            Model\BookTransferQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BookTransferUpV10Request $request
     * @return Model\BookTransferUpV10Response
     * @throws YopClientException
     */
    public function book_transfer_up_v1_0(Model\BookTransferUpV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BookTransferUpV10RequestMarshaller::getInstance(),
            Model\BookTransferUpV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BookTransferUpV11Request $request
     * @return Model\BookTransferUpV11Response
     * @throws YopClientException
     */
    public function book_transfer_up_v1_1(Model\BookTransferUpV11Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BookTransferUpV11RequestMarshaller::getInstance(),
            Model\BookTransferUpV11ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BookTransferV10Request $request
     * @return Model\BookTransferV10Response
     * @throws YopClientException
     */
    public function book_transfer_v1_0(Model\BookTransferV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BookTransferV10RequestMarshaller::getInstance(),
            Model\BookTransferV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
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
     * @param Model\CompleteV10Request $request
     * @return Model\CompleteV10Response
     * @throws YopClientException
     */
    public function complete_v1_0(Model\CompleteV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompleteV10RequestMarshaller::getInstance(),
            Model\CompleteV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProtocolConfirmRequest $request
     * @return Model\ProtocolConfirmResponse
     * @throws YopClientException
     */
    public function protocolConfirm(Model\ProtocolConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProtocolConfirmRequestMarshaller::getInstance(),
            Model\ProtocolConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProtocolQueryRequest $request
     * @return Model\ProtocolQueryResponse
     * @throws YopClientException
     */
    public function protocolQuery(Model\ProtocolQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProtocolQueryRequestMarshaller::getInstance(),
            Model\ProtocolQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProtocolTrackingRequest $request
     * @return Model\ProtocolTrackingResponse
     * @throws YopClientException
     */
    public function protocolTracking(Model\ProtocolTrackingRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProtocolTrackingRequestMarshaller::getInstance(),
            Model\ProtocolTrackingResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProtocolApplyV10Request $request
     * @return Model\ProtocolApplyV10Response
     * @throws YopClientException
     */
    public function protocol_apply_v1_0(Model\ProtocolApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProtocolApplyV10RequestMarshaller::getInstance(),
            Model\ProtocolApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProtocolConfirmV10Request $request
     * @return Model\ProtocolConfirmV10Response
     * @throws YopClientException
     */
    public function protocol_confirm_v1_0(Model\ProtocolConfirmV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProtocolConfirmV10RequestMarshaller::getInstance(),
            Model\ProtocolConfirmV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProtocolQueryV10Request $request
     * @return Model\ProtocolQueryV10Response
     * @throws YopClientException
     */
    public function protocol_query_v1_0(Model\ProtocolQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProtocolQueryV10RequestMarshaller::getInstance(),
            Model\ProtocolQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProtocolTrackingV10Request $request
     * @return Model\ProtocolTrackingV10Response
     * @throws YopClientException
     */
    public function protocol_tracking_v1_0(Model\ProtocolTrackingV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProtocolTrackingV10RequestMarshaller::getInstance(),
            Model\ProtocolTrackingV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PtotocolApplyRequest $request
     * @return Model\PtotocolApplyResponse
     * @throws YopClientException
     */
    public function ptotocolApply(Model\PtotocolApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PtotocolApplyRequestMarshaller::getInstance(),
            Model\PtotocolApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryRequest $request
     * @return Model\QueryResponse
     * @throws YopClientException
     */
    public function query(Model\QueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryRequestMarshaller::getInstance(),
            Model\QueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryPageRequest $request
     * @return Model\QueryPageResponse
     * @throws YopClientException
     */
    public function queryPage(Model\QueryPageRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryPageRequestMarshaller::getInstance(),
            Model\QueryPageResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryPageV10Request $request
     * @return Model\QueryPageV10Response
     * @throws YopClientException
     */
    public function queryPage_v1_0(Model\QueryPageV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryPageV10RequestMarshaller::getInstance(),
            Model\QueryPageV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryV10Request $request
     * @return Model\QueryV10Response
     * @throws YopClientException
     */
    public function query_v1_0(Model\QueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryV10RequestMarshaller::getInstance(),
            Model\QueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptDivideBackRequest $request
     * @return Model\ReceiptDivideBackResponse
     * @throws YopClientException
     */
    public function receiptDivideBack(Model\ReceiptDivideBackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptDivideBackRequestMarshaller::getInstance(),
            Model\ReceiptDivideBackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptDownloadRequest $request
     * @return Model\ReceiptDownloadResponse
     * @throws YopClientException
     */
    public function receiptDownload(Model\ReceiptDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptDownloadRequestMarshaller::getInstance(),
            Model\ReceiptDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptDownloadV10Request $request
     * @return Model\ReceiptDownloadV10Response
     * @throws YopClientException
     */
    public function receipt_download_v1_0(Model\ReceiptDownloadV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptDownloadV10RequestMarshaller::getInstance(),
            Model\ReceiptDownloadV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YeeDivideRuleAddRequest $request
     * @return Model\YeeDivideRuleAddResponse
     * @throws YopClientException
     */
    public function yeeDivideRuleAdd(Model\YeeDivideRuleAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YeeDivideRuleAddRequestMarshaller::getInstance(),
            Model\YeeDivideRuleAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YeeDivideRuleDelRequest $request
     * @return Model\YeeDivideRuleDelResponse
     * @throws YopClientException
     */
    public function yeeDivideRuleDel(Model\YeeDivideRuleDelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YeeDivideRuleDelRequestMarshaller::getInstance(),
            Model\YeeDivideRuleDelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YeeDivideRuleQueryRequest $request
     * @return Model\YeeDivideRuleQueryResponse
     * @throws YopClientException
     */
    public function yeeDivideRuleQuery(Model\YeeDivideRuleQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YeeDivideRuleQueryRequestMarshaller::getInstance(),
            Model\YeeDivideRuleQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YeeDivideRuleUpdateRequest $request
     * @return Model\YeeDivideRuleUpdateResponse
     * @throws YopClientException
     */
    public function yeeDivideRuleUpdate(Model\YeeDivideRuleUpdateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YeeDivideRuleUpdateRequestMarshaller::getInstance(),
            Model\YeeDivideRuleUpdateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YeeDivideRuleAddV10Request $request
     * @return Model\YeeDivideRuleAddV10Response
     * @throws YopClientException
     */
    public function yee_divide_rule_add_v1_0(Model\YeeDivideRuleAddV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YeeDivideRuleAddV10RequestMarshaller::getInstance(),
            Model\YeeDivideRuleAddV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YeeDivideRuleDelV10Request $request
     * @return Model\YeeDivideRuleDelV10Response
     * @throws YopClientException
     */
    public function yee_divide_rule_del_v1_0(Model\YeeDivideRuleDelV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YeeDivideRuleDelV10RequestMarshaller::getInstance(),
            Model\YeeDivideRuleDelV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YeeDivideRuleQueryV10Request $request
     * @return Model\YeeDivideRuleQueryV10Response
     * @throws YopClientException
     */
    public function yee_divide_rule_query_v1_0(Model\YeeDivideRuleQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YeeDivideRuleQueryV10RequestMarshaller::getInstance(),
            Model\YeeDivideRuleQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YeeDivideRuleUpdateV10Request $request
     * @return Model\YeeDivideRuleUpdateV10Response
     * @throws YopClientException
     */
    public function yee_divide_rule_update_v1_0(Model\YeeDivideRuleUpdateV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YeeDivideRuleUpdateV10RequestMarshaller::getInstance(),
            Model\YeeDivideRuleUpdateV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
