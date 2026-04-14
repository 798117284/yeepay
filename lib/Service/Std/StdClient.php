<?php


namespace Yeepay\Yop\Sdk\Service\Std;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Model\YosDownloadResponse;
use Yeepay\Yop\Sdk\Model\Transform\YosDownloadResponseUnMarshaller;
use Yeepay\Yop\Sdk\Service\Std\Model as Model;

class StdClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * StdClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BillBillDownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billBillDownload(Model\BillBillDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillBillDownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillDivideReceiverDownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billDivideReceiverDownload(Model\BillDivideReceiverDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillDivideReceiverDownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillDividedaydownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billDividedaydownload(Model\BillDividedaydownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillDividedaydownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillApplyRequest $request
     * @return Model\BillFundbillApplyResponse
     * @throws YopClientException
     */
    public function billFundbillApply(Model\BillFundbillApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillApplyRequestMarshaller::getInstance(),
            Model\BillFundbillApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillDownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billFundbillDownload(Model\BillFundbillDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillDownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillEndbalanceApplyRequest $request
     * @return Model\BillFundbillEndbalanceApplyResponse
     * @throws YopClientException
     */
    public function billFundbillEndbalanceApply(Model\BillFundbillEndbalanceApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillEndbalanceApplyRequestMarshaller::getInstance(),
            Model\BillFundbillEndbalanceApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillFlowQueryRequest $request
     * @return Model\BillFundbillFlowQueryResponse
     * @throws YopClientException
     */
    public function billFundbillFlowQuery(Model\BillFundbillFlowQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillFlowQueryRequestMarshaller::getInstance(),
            Model\BillFundbillFlowQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillFlowSumRequest $request
     * @return Model\BillFundbillFlowSumResponse
     * @throws YopClientException
     */
    public function billFundbillFlowSum(Model\BillFundbillFlowSumRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillFlowSumRequestMarshaller::getInstance(),
            Model\BillFundbillFlowSumResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillSettlebillDownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billSettlebillDownload(Model\BillSettlebillDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillSettlebillDownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillTradedaydownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billTradedaydownload(Model\BillTradedaydownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillTradedaydownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillDivideReceiverDownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function bill_divide_receiver_download(Model\BillDivideReceiverDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillDivideReceiverDownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillApplyV10Request $request
     * @return Model\BillFundbillApplyV10Response
     * @throws YopClientException
     */
    public function bill_fundbill_apply_v1_0(Model\BillFundbillApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillApplyV10RequestMarshaller::getInstance(),
            Model\BillFundbillApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillFlowQueryV10Request $request
     * @return Model\BillFundbillFlowQueryV10Response
     * @throws YopClientException
     */
    public function bill_fundbill_flow_query_v1_0(Model\BillFundbillFlowQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillFlowQueryV10RequestMarshaller::getInstance(),
            Model\BillFundbillFlowQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillFlowSumV10Request $request
     * @return Model\BillFundbillFlowSumV10Response
     * @throws YopClientException
     */
    public function bill_fundbill_flow_sum_v1_0(Model\BillFundbillFlowSumV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillFlowSumV10RequestMarshaller::getInstance(),
            Model\BillFundbillFlowSumV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CertOrderRequest $request
     * @return Model\CertOrderResponse
     * @throws YopClientException
     */
    public function certOrder(Model\CertOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CertOrderRequestMarshaller::getInstance(),
            Model\CertOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EndBalanceQueryRequest $request
     * @return Model\EndBalanceQueryResponse
     * @throws YopClientException
     */
    public function endBalanceQuery(Model\EndBalanceQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EndBalanceQueryRequestMarshaller::getInstance(),
            Model\EndBalanceQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EndBalanceQueryV10Request $request
     * @return Model\EndBalanceQueryV10Response
     * @throws YopClientException
     */
    public function end_balance_query_v1_0(Model\EndBalanceQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EndBalanceQueryV10RequestMarshaller::getInstance(),
            Model\EndBalanceQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrcaBillDownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function orca_bill_download(Model\OrcaBillDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrcaBillDownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\VoucherAssetApplyRequest $request
     * @return Model\VoucherAssetApplyResponse
     * @throws YopClientException
     */
    public function voucherAssetApply(Model\VoucherAssetApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\VoucherAssetApplyRequestMarshaller::getInstance(),
            Model\VoucherAssetApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\VoucherDownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function voucherDownload(Model\VoucherDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\VoucherDownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
