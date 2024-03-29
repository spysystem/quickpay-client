<?php
/**
 * DefaultApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QuickPay
 *
 * QuickPay client to capture and refund payments
 *
 * OpenAPI spec version: v10
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DefaultApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://virtserver.swaggerhub.com/Spysystem/QuickPay/v10');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return DefaultApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation paymentsGet
     *
     * Get a list of all payments
     *
     * @param string $accept_version  (required)
     * @param string $date_year  (optional)
     * @param string $order_id  (optional)
     * @param string $state  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse200
     */
    public function paymentsGet($accept_version, $date_year = null, $order_id = null, $state = null)
    {
        list($response) = $this->paymentsGetWithHttpInfo($accept_version, $date_year, $order_id, $state);
        return $response;
    }

    /**
     * Operation paymentsGetWithHttpInfo
     *
     * Get a list of all payments
     *
     * @param string $accept_version  (required)
     * @param string $date_year  (optional)
     * @param string $order_id  (optional)
     * @param string $state  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentsGetWithHttpInfo($accept_version, $date_year = null, $order_id = null, $state = null)
    {
        // verify the required parameter 'accept_version' is set
        if ($accept_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $accept_version when calling paymentsGet');
        }
        // parse inputs
        $resourcePath = "/payments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($date_year !== null) {
            $queryParams['date[year]'] = $this->apiClient->getSerializer()->toQueryValue($date_year);
        }
        // query params
        if ($order_id !== null) {
            $queryParams['order_id'] = $this->apiClient->getSerializer()->toQueryValue($order_id);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = $this->apiClient->getSerializer()->toQueryValue($state);
        }
        // header params
        if ($accept_version !== null) {
            $headerParams['Accept-Version'] = $this->apiClient->getSerializer()->toHeaderValue($accept_version);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse200',
                '/payments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation paymentsIdCapturePost
     *
     * 
     *
     * @param string $accept_version  (required)
     * @param int $id The id of the Payment to capture (required)
     * @param bool $synchronized Disables asynchronious behaviour and returns the transaction with completed operation (ex. see GET /payments/{id}). MUST be used as a query parameter “?synchronized” (value not required) (optional)
     * @param float $amount Amount (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PaymentModel
     */
    public function paymentsIdCapturePost($accept_version, $id, $synchronized = null, $amount = null)
    {
        list($response) = $this->paymentsIdCapturePostWithHttpInfo($accept_version, $id, $synchronized, $amount);
        return $response;
    }

    /**
     * Operation paymentsIdCapturePostWithHttpInfo
     *
     * 
     *
     * @param string $accept_version  (required)
     * @param int $id The id of the Payment to capture (required)
     * @param bool $synchronized Disables asynchronious behaviour and returns the transaction with completed operation (ex. see GET /payments/{id}). MUST be used as a query parameter “?synchronized” (value not required) (optional)
     * @param float $amount Amount (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PaymentModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentsIdCapturePostWithHttpInfo($accept_version, $id, $synchronized = null, $amount = null)
    {
        // verify the required parameter 'accept_version' is set
        if ($accept_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $accept_version when calling paymentsIdCapturePost');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling paymentsIdCapturePost');
        }
        // parse inputs
        $resourcePath = "/payments/{id}/capture";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($synchronized !== null) {
            $queryParams['synchronized'] = $this->apiClient->getSerializer()->toQueryValue($synchronized);
        }
        // header params
        if ($accept_version !== null) {
            $headerParams['Accept-Version'] = $this->apiClient->getSerializer()->toHeaderValue($accept_version);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($amount !== null) {
            $formParams['amount'] = $this->apiClient->getSerializer()->toFormValue($amount);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\PaymentModel',
                '/payments/{id}/capture'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PaymentModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PaymentModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation paymentsIdGet
     *
     * Retrieves the details of a Payment.
     *
     * @param string $accept_version  (required)
     * @param int $id The id of the Payment to retrieve (required)
     * @param int $operations_size Maximum number of operations to retrieve (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PaymentModel
     */
    public function paymentsIdGet($accept_version, $id, $operations_size = null)
    {
        list($response) = $this->paymentsIdGetWithHttpInfo($accept_version, $id, $operations_size);
        return $response;
    }

    /**
     * Operation paymentsIdGetWithHttpInfo
     *
     * Retrieves the details of a Payment.
     *
     * @param string $accept_version  (required)
     * @param int $id The id of the Payment to retrieve (required)
     * @param int $operations_size Maximum number of operations to retrieve (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PaymentModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentsIdGetWithHttpInfo($accept_version, $id, $operations_size = null)
    {
        // verify the required parameter 'accept_version' is set
        if ($accept_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $accept_version when calling paymentsIdGet');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling paymentsIdGet');
        }
        // parse inputs
        $resourcePath = "/payments/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($operations_size !== null) {
            $queryParams['operations_size'] = $this->apiClient->getSerializer()->toQueryValue($operations_size);
        }
        // header params
        if ($accept_version !== null) {
            $headerParams['Accept-Version'] = $this->apiClient->getSerializer()->toHeaderValue($accept_version);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\PaymentModel',
                '/payments/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PaymentModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PaymentModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation paymentsIdRefundPost
     *
     * 
     *
     * @param string $accept_version  (required)
     * @param int $id The id of the Payment to refund (required)
     * @param bool $synchronized Disables asynchronious behaviour and returns the transaction with completed operation (ex. see GET /payments/{id}). MUST be used as a query parameter “?synchronized” (value not required) (optional)
     * @param float $amount Amount (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PaymentModel
     */
    public function paymentsIdRefundPost($accept_version, $id, $synchronized = null, $amount = null)
    {
        list($response) = $this->paymentsIdRefundPostWithHttpInfo($accept_version, $id, $synchronized, $amount);
        return $response;
    }

    /**
     * Operation paymentsIdRefundPostWithHttpInfo
     *
     * 
     *
     * @param string $accept_version  (required)
     * @param int $id The id of the Payment to refund (required)
     * @param bool $synchronized Disables asynchronious behaviour and returns the transaction with completed operation (ex. see GET /payments/{id}). MUST be used as a query parameter “?synchronized” (value not required) (optional)
     * @param float $amount Amount (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PaymentModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentsIdRefundPostWithHttpInfo($accept_version, $id, $synchronized = null, $amount = null)
    {
        // verify the required parameter 'accept_version' is set
        if ($accept_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $accept_version when calling paymentsIdRefundPost');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling paymentsIdRefundPost');
        }
        // parse inputs
        $resourcePath = "/payments/{id}/refund";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($synchronized !== null) {
            $queryParams['synchronized'] = $this->apiClient->getSerializer()->toQueryValue($synchronized);
        }
        // header params
        if ($accept_version !== null) {
            $headerParams['Accept-Version'] = $this->apiClient->getSerializer()->toHeaderValue($accept_version);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($amount !== null) {
            $formParams['amount'] = $this->apiClient->getSerializer()->toFormValue($amount);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\PaymentModel',
                '/payments/{id}/refund'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PaymentModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PaymentModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
