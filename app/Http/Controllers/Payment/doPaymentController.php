<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

class doPaymentController extends Controller
{

    public function doPayment(Request $request)
    {
        // Initialize the Authorize.Net SDK
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName('3VKPQ99nyS');                 
        $merchantAuthentication->setTransactionKey('2W3aj48p6By8nAEj');
        $refId = 'ref' . time(); // Unique reference ID
        // Set the credit card details
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber('5424000000000015');
        $creditCard->setExpirationDate('2025-12'); // Format: YYYY-MM
        $creditCard->setCardCode('999'); // Card security code (CVV)
        // $creditCard->setCardName('John Doe'); // Cardholder name

        // Create a customer shipping address
        $customerShippingAddress = new AnetAPI\CustomerAddressType();
        $customerShippingAddress->setFirstName("James");
        $customerShippingAddress->setLastName("White");
        $customerShippingAddress->setCompany("Addresses R Us");
        $customerShippingAddress->setAddress(rand() . " North Spring Street");
        $customerShippingAddress->setCity("Toms River");
        $customerShippingAddress->setState("NJ");
        $customerShippingAddress->setZip("08753");
        $customerShippingAddress->setCountry("USA");
        $customerShippingAddress->setPhoneNumber("888-888-8888");
        $customerShippingAddress->setFaxNumber("999-999-9999");

        // Create the Bill To info for new payment type
        $billTo = new AnetAPI\CustomerAddressType();
        $billTo->setFirstName("Ellen");
        $billTo->setLastName("Johnson"); 
        $billTo->setCompany("Souveniropolis");
        $billTo->setAddress("14 Main Street");
        $billTo->setCity("Pecan Springs");
        $billTo->setState("TX");
        $billTo->setZip("44628");
        $billTo->setCountry("USA");
        $billTo->setPhoneNumber("888-888-8888");
        $billTo->setfaxNumber("999-999-9999");

        // Set the payment details
        $payment = new AnetAPI\PaymentType();
        $payment->setCreditCard($creditCard);

        // Create a new transaction request
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType('authCaptureTransaction');
        $transactionRequestType->setAmount('100.00'); // Set your desired amount
        $transactionRequestType->setPayment($payment);

        // Set other transaction details as needed...
        // For example:
        // $transactionRequestType->setOrder();

        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId($refId);
        $request->setTransactionRequest($transactionRequestType);

        // Send the request to Authorize.Net API
        $controller = new AnetController\CreateTransactionController($request);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);

        // Process the response
        if (($response != null) && ($response->getMessages()->getResultCode() == 'Ok')) {
            // Transaction successful
            $transactionResponse = $response->getTransactionResponse();

            if ($transactionResponse != null && $transactionResponse->getResponseCode() == '1') {
                $responseArray = array(
                    "status" => "ok",
                    "Transaction_ID" => $transactionResponse->getTransId(),
                    "Transaction_Response_Code" => $transactionResponse->getResponseCode(),
                    "Message_Code" => $transactionResponse->getMessages()[0]->getCode(),
                    "Auth_Code" => $transactionResponse->getAuthCode(),
                );

                return response()->json($responseArray);
            }
        } 
        else {

            $responseArray = array(
                "status" => "failed",
                "Message_Code" => $response->getMessages()->getMessage()[0]->getCode(),
                "Message_Text" => $response->getMessages()->getMessage()[0]->getText(),
            );

            return response()->json($responseArray);
        }
    }
}




















// $curl = curl_init();
// curl_setopt_array($curl, array(
//     CURLOPT_URL => 'https://apitest.authorize.net/xml/v1/request.api',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_ENCODING => '',
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 0,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => 'POST',
//     CURLOPT_POSTFIELDS => '{
//         "createTransactionRequest": {
//             "merchantAuthentication": {
//                 "name":"3VKPQ99nyS",
//                  "transactionKey": "2W3aj48p6By8nAEj"
//             },
//             "refId": "' . $refId . '",
//             "transactionRequest":{
//                 "transactionType": "authCaptureTransaction",
//                 "amount": "100",
//                 "payment":{
//                     "creditCard": {
//                         "cardNumber": "5424000000000015",
//                         "expirationDate": "2025-12",
//                         "cardCode": "999"
//                     }
//                 },   

//                 "customer": {
//                     "id": "' . $user_id . '"
//                 },


//                 "transactionSettings": {
//                     "setting": {
//                         "settingName": "testRequest",
//                         "settingValue": "false"
//                     }
//                 },
//                 "userFields": {
//                     "userField": [
//                         {
//                             "name": "MerchantDefinedFieldName1",
//                             "value": "MerchantDefinedFieldValue1"
//                         },
//                         {
//                             "name": "favorite_color",
//                             "value": "blue"
//                         }
//                     ]
//                 },
//                 "processingOptions": {
//                 "isSubsequentAuth": "true"
//                 },
//                 "subsequentAuthInformation": {
//                 "originalNetworkTransId": "123456789NNNH",
//                 "originalAuthAmount": "4.00",
//                 "reason": "resubmission"
//                 },
//                 "authorizationIndicatorType": {
//                 "authorizationIndicator": "final"
//             }
//             }
//         }
//     }',
//     CURLOPT_HTTPHEADER => array(
//         'Content-Type: application/json'
//     ),
// ));


// $getresponse = curl_exec($curl);
// curl_close($curl);
// //dd($getresponse);
