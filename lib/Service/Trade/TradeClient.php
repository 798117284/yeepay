<?php


namespace Yeepay\Yop\Sdk\Service\Trade;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Trade\Model as Model;

class TradeClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * TradeClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AgentrefundRequest $request
     * @return Model\AgentrefundResponse
     * @throws YopClientException
     */
    public function agentrefund(Model\AgentrefundRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgentrefundRequestMarshaller::getInstance(),
            Model\AgentrefundResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgentrefundV10Request $request
     * @return Model\AgentrefundV10Response
     * @throws YopClientException
     */
    public function agentrefund_v1_0(Model\AgentrefundV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgentrefundV10RequestMarshaller::getInstance(),
            Model\AgentrefundV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BatchOrderRefundQueryV10Request $request
     * @return Model\BatchOrderRefundQueryV10Response
     * @throws YopClientException
     */
    public function batch_order_refund_query_v1_0(Model\BatchOrderRefundQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BatchOrderRefundQueryV10RequestMarshaller::getInstance(),
            Model\BatchOrderRefundQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BatchOrderRefundV10Request $request
     * @return Model\BatchOrderRefundV10Response
     * @throws YopClientException
     */
    public function batch_order_refund_v1_0(Model\BatchOrderRefundV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BatchOrderRefundV10RequestMarshaller::getInstance(),
            Model\BatchOrderRefundV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CombineRefundDownloadRequest $request
     * @return Model\CombineRefundDownloadResponse
     * @throws YopClientException
     */
    public function combineRefundDownload(Model\CombineRefundDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CombineRefundDownloadRequestMarshaller::getInstance(),
            Model\CombineRefundDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CombineRefundReceiptDownloadV10Request $request
     * @return Model\CombineRefundReceiptDownloadV10Response
     * @throws YopClientException
     */
    public function combine_refund_receipt_download_v1_0(Model\CombineRefundReceiptDownloadV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CombineRefundReceiptDownloadV10RequestMarshaller::getInstance(),
            Model\CombineRefundReceiptDownloadV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ConfigLimitAlertOperateRequest $request
     * @return Model\ConfigLimitAlertOperateResponse
     * @throws YopClientException
     */
    public function configLimitAlertOperate(Model\ConfigLimitAlertOperateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ConfigLimitAlertOperateRequestMarshaller::getInstance(),
            Model\ConfigLimitAlertOperateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ConfigLimitOperateRequest $request
     * @return Model\ConfigLimitOperateResponse
     * @throws YopClientException
     */
    public function configLimitOperate(Model\ConfigLimitOperateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ConfigLimitOperateRequestMarshaller::getInstance(),
            Model\ConfigLimitOperateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ConfigLimitQueryRequest $request
     * @return Model\ConfigLimitQueryResponse
     * @throws YopClientException
     */
    public function configLimitQuery(Model\ConfigLimitQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ConfigLimitQueryRequestMarshaller::getInstance(),
            Model\ConfigLimitQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ConfigTemplateDeleteRequest $request
     * @return Model\ConfigTemplateDeleteResponse
     * @throws YopClientException
     */
    public function configTemplateDelete(Model\ConfigTemplateDeleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ConfigTemplateDeleteRequestMarshaller::getInstance(),
            Model\ConfigTemplateDeleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ConfigTemplateOperateRequest $request
     * @return Model\ConfigTemplateOperateResponse
     * @throws YopClientException
     */
    public function configTemplateOperate(Model\ConfigTemplateOperateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ConfigTemplateOperateRequestMarshaller::getInstance(),
            Model\ConfigTemplateOperateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ConfigTemplateQueryRequest $request
     * @return Model\ConfigTemplateQueryResponse
     * @throws YopClientException
     */
    public function configTemplateQuery(Model\ConfigTemplateQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ConfigTemplateQueryRequestMarshaller::getInstance(),
            Model\ConfigTemplateQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\HuluOrderCreateRequest $request
     * @return Model\HuluOrderCreateResponse
     * @throws YopClientException
     */
    public function huluOrderCreate(Model\HuluOrderCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\HuluOrderCreateRequestMarshaller::getInstance(),
            Model\HuluOrderCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\HuluRefundCreateRequest $request
     * @return Model\HuluRefundCreateResponse
     * @throws YopClientException
     */
    public function huluRefundCreate(Model\HuluRefundCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\HuluRefundCreateRequestMarshaller::getInstance(),
            Model\HuluRefundCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\HuluOrderCreateRequest $request
     * @return Model\HuluOrderCreateResponse
     * @throws YopClientException
     */
    public function hulu_order_create(Model\HuluOrderCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\HuluOrderCreateRequestMarshaller::getInstance(),
            Model\HuluOrderCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\HuluRefundCreateRequest $request
     * @return Model\HuluRefundCreateResponse
     * @throws YopClientException
     */
    public function hulu_refund_create(Model\HuluRefundCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\HuluRefundCreateRequestMarshaller::getInstance(),
            Model\HuluRefundCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderRequest $request
     * @return Model\OrderResponse
     * @throws YopClientException
     */
    public function order(Model\OrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderRequestMarshaller::getInstance(),
            Model\OrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderCloseRequest $request
     * @return Model\OrderCloseResponse
     * @throws YopClientException
     */
    public function orderClose(Model\OrderCloseRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderCloseRequestMarshaller::getInstance(),
            Model\OrderCloseResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderCombineQueryRequest $request
     * @return Model\OrderCombineQueryResponse
     * @throws YopClientException
     */
    public function orderCombineQuery(Model\OrderCombineQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderCombineQueryRequestMarshaller::getInstance(),
            Model\OrderCombineQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderQueryRequest $request
     * @return Model\OrderQueryResponse
     * @throws YopClientException
     */
    public function orderQuery(Model\OrderQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderQueryRequestMarshaller::getInstance(),
            Model\OrderQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderCloseV10Request $request
     * @return Model\OrderCloseV10Response
     * @throws YopClientException
     */
    public function order_close_v1_0(Model\OrderCloseV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderCloseV10RequestMarshaller::getInstance(),
            Model\OrderCloseV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderCombineQueryV10Request $request
     * @return Model\OrderCombineQueryV10Response
     * @throws YopClientException
     */
    public function order_combine_query_v1_0(Model\OrderCombineQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderCombineQueryV10RequestMarshaller::getInstance(),
            Model\OrderCombineQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderQueryV10Request $request
     * @return Model\OrderQueryV10Response
     * @throws YopClientException
     */
    public function order_query_v1_0(Model\OrderQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderQueryV10RequestMarshaller::getInstance(),
            Model\OrderQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderV10Request $request
     * @return Model\OrderV10Response
     * @throws YopClientException
     */
    public function order_v1_0(Model\OrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderV10RequestMarshaller::getInstance(),
            Model\OrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptCombineDownloadRequest $request
     * @return Model\ReceiptCombineDownloadResponse
     * @throws YopClientException
     */
    public function receiptCombineDownload(Model\ReceiptCombineDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptCombineDownloadRequestMarshaller::getInstance(),
            Model\ReceiptCombineDownloadResponseUnMarshaller::getInstance());
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
     * @param Model\ReceiptCombineDownloadRequest $request
     * @return Model\ReceiptCombineDownloadResponse
     * @throws YopClientException
     */
    public function receipt_combine_download(Model\ReceiptCombineDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptCombineDownloadRequestMarshaller::getInstance(),
            Model\ReceiptCombineDownloadResponseUnMarshaller::getInstance());
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
     * @param Model\RefundRequest $request
     * @return Model\RefundResponse
     * @throws YopClientException
     */
    public function refund(Model\RefundRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundRequestMarshaller::getInstance(),
            Model\RefundResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundCombineRequest $request
     * @return Model\RefundCombineResponse
     * @throws YopClientException
     */
    public function refundCombine(Model\RefundCombineRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundCombineRequestMarshaller::getInstance(),
            Model\RefundCombineResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundCombineQueryRequest $request
     * @return Model\RefundCombineQueryResponse
     * @throws YopClientException
     */
    public function refundCombineQuery(Model\RefundCombineQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundCombineQueryRequestMarshaller::getInstance(),
            Model\RefundCombineQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundEndRequest $request
     * @return Model\RefundEndResponse
     * @throws YopClientException
     */
    public function refundEnd(Model\RefundEndRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundEndRequestMarshaller::getInstance(),
            Model\RefundEndResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundFastRequest $request
     * @return Model\RefundFastResponse
     * @throws YopClientException
     */
    public function refundFast(Model\RefundFastRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundFastRequestMarshaller::getInstance(),
            Model\RefundFastResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundQueryRequest $request
     * @return Model\RefundQueryResponse
     * @throws YopClientException
     */
    public function refundQuery(Model\RefundQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundQueryRequestMarshaller::getInstance(),
            Model\RefundQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundReceiptDownloadRequest $request
     * @return Model\RefundReceiptDownloadResponse
     * @throws YopClientException
     */
    public function refundReceiptDownload(Model\RefundReceiptDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundReceiptDownloadRequestMarshaller::getInstance(),
            Model\RefundReceiptDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundSupplyRequest $request
     * @return Model\RefundSupplyResponse
     * @throws YopClientException
     */
    public function refundSupply(Model\RefundSupplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundSupplyRequestMarshaller::getInstance(),
            Model\RefundSupplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundEndV10Request $request
     * @return Model\RefundEndV10Response
     * @throws YopClientException
     */
    public function refund_end_v1_0(Model\RefundEndV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundEndV10RequestMarshaller::getInstance(),
            Model\RefundEndV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundFastV10Request $request
     * @return Model\RefundFastV10Response
     * @throws YopClientException
     */
    public function refund_fast_v1_0(Model\RefundFastV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundFastV10RequestMarshaller::getInstance(),
            Model\RefundFastV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundQueryV10Request $request
     * @return Model\RefundQueryV10Response
     * @throws YopClientException
     */
    public function refund_query_v1_0(Model\RefundQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundQueryV10RequestMarshaller::getInstance(),
            Model\RefundQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundReceiptDownloadV10Request $request
     * @return Model\RefundReceiptDownloadV10Response
     * @throws YopClientException
     */
    public function refund_receipt_download_v1_0(Model\RefundReceiptDownloadV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundReceiptDownloadV10RequestMarshaller::getInstance(),
            Model\RefundReceiptDownloadV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundSupplyV10Request $request
     * @return Model\RefundSupplyV10Response
     * @throws YopClientException
     */
    public function refund_supply_v1_0(Model\RefundSupplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundSupplyV10RequestMarshaller::getInstance(),
            Model\RefundSupplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundV10Request $request
     * @return Model\RefundV10Response
     * @throws YopClientException
     */
    public function refund_v1_0(Model\RefundV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundV10RequestMarshaller::getInstance(),
            Model\RefundV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeConfigLimitAlertOperateV10Request $request
     * @return Model\TradeConfigLimitAlertOperateV10Response
     * @throws YopClientException
     */
    public function trade_config_limit_alert_operate_v1_0(Model\TradeConfigLimitAlertOperateV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeConfigLimitAlertOperateV10RequestMarshaller::getInstance(),
            Model\TradeConfigLimitAlertOperateV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeConfigLimitOperateV10Request $request
     * @return Model\TradeConfigLimitOperateV10Response
     * @throws YopClientException
     */
    public function trade_config_limit_operate_v1_0(Model\TradeConfigLimitOperateV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeConfigLimitOperateV10RequestMarshaller::getInstance(),
            Model\TradeConfigLimitOperateV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeConfigLimitQueryV10Request $request
     * @return Model\TradeConfigLimitQueryV10Response
     * @throws YopClientException
     */
    public function trade_config_limit_query_v1_0(Model\TradeConfigLimitQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeConfigLimitQueryV10RequestMarshaller::getInstance(),
            Model\TradeConfigLimitQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeConfigTemplateDeleteV10Request $request
     * @return Model\TradeConfigTemplateDeleteV10Response
     * @throws YopClientException
     */
    public function trade_config_template_delete_v1_0(Model\TradeConfigTemplateDeleteV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeConfigTemplateDeleteV10RequestMarshaller::getInstance(),
            Model\TradeConfigTemplateDeleteV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeConfigTemplateOperateV10Request $request
     * @return Model\TradeConfigTemplateOperateV10Response
     * @throws YopClientException
     */
    public function trade_config_template_operate_v1_0(Model\TradeConfigTemplateOperateV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeConfigTemplateOperateV10RequestMarshaller::getInstance(),
            Model\TradeConfigTemplateOperateV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeConfigTemplateQueryV10Request $request
     * @return Model\TradeConfigTemplateQueryV10Response
     * @throws YopClientException
     */
    public function trade_config_template_query_v1_0(Model\TradeConfigTemplateQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeConfigTemplateQueryV10RequestMarshaller::getInstance(),
            Model\TradeConfigTemplateQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
