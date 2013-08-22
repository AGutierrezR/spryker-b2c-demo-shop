<?php
use Guzzle\Http\Message\Header\HeaderInterface;

/**
 * Class Sao_Shared_Library_Legacy_Guzzle_Service_Command_Response_SalesLegacyItemPaid
 *
 * @author Daniel Tschinder
 */
class Sao_Shared_Library_Legacy_Guzzle_Service_Command_Response_SalesLegacyItemCanceled extends Sao_Shared_Library_Legacy_Guzzle_Service_Command_Response_Json
{

    /**
     * @see Sao_Shared_Library_Legacy_Guzzle_Service_Command_Response_Abstract::createTransferResponse
     */
    public function createTransferResponse()
    {
        /* @var $transfer Sao_Shared_Sales_Transfer_Order_Item_Legacy */
        $responseData = $this->getParsedResponse();
        $response = Generated_Shared_Library_TransferLoader::getResponseLegacy();

        if ($responseData['success']) {
            $transfer = $this->getTransferRequest()->getTransfer();
            $response->setTransfer($transfer);
            $response->setSuccess(true);
        } else {
            $response->setSuccess(false);
        }
        $this->transferResponse = $response;
    }
}
