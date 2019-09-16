<?php
/**
 * OrdersApi
 *
 * @package  BigCommerce\Api
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 Order Transactions API.
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\Api;

use \BigCommerce\Api\Configuration;
use \BigCommerce\Api\ApiClient;
use \BigCommerce\Api\ApiException;
use \BigCommerce\Api\ObjectSerializer;

class OrdersApi
{

    /**
     * API Client
     *
     * @var \BigCommerce\Api\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BigCommerce\Api\ApiClient $apiClient The api client to use
     */
    public function __construct(\BigCommerce\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
    * Get API client
    *
    * @return \BigCommerce\Api\ApiClient get the API client
    */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
    * Set the API client
    *
    * @param \BigCommerce\Api\ApiClient $apiClient set the API client
    *
    * @return OrdersApi
    */
    public function setApiClient(\BigCommerce\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createTransaction
     * 
     *
     *
     * @param int $order_id The ID of the &#x60;Order&#x60; to which the transactions belong. (required)
     * @param \BigCommerce\Api\Model\TransactionPost $transaction A BigCommerce &#x60;Transaction&#x60; object. (required)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\TransactionResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function createTransaction($order_id, $transaction, array $params = [])
    {
        list($response) = $this->createTransactionWithHttpInfo($order_id,  $transaction, $params);
        return $response;
    }


    /**
     * Operation createTransactionWithHttpInfo
     *
     * @see self::createTransaction()
     * @param int $order_id The ID of the &#x60;Order&#x60; to which the transactions belong. (required)
     * @param \BigCommerce\Api\Model\TransactionPost $transaction A BigCommerce &#x60;Transaction&#x60; object. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\TransactionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTransactionWithHttpInfo($order_id,  $transaction, array $params = [])
    {
        
        // verify the required parameter 'order_id' is set
        if (!isset($order_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling createTransaction');
        }
        
        // verify the required parameter 'transaction' is set
        if (!isset($transaction)) {
            throw new \InvalidArgumentException('Missing the required parameter $transaction when calling createTransaction');
        }
        

        // parse inputs
        $resourcePath = "/orders/{order_id}/transactions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($order_id)) {
            $resourcePath = str_replace(
                "{" . "order_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($transaction)) {
        $_tempBody = $transaction;
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
                '\BigCommerce\Api\Model\TransactionResponse',
                '/orders/{order_id}/transactions'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\TransactionResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\TransactionResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 204:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\NoContent', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\NotFound', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation getTransactions
     * 
     *
     *
     * @param int $order_id The ID of the &#x60;Order&#x60; to which the transactions belong. (required)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\TransactionCollectionResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function getTransactions($order_id, array $params = [])
    {
        list($response) = $this->getTransactionsWithHttpInfo($order_id, $params);
        return $response;
    }


    /**
     * Operation getTransactionsWithHttpInfo
     *
     * @see self::getTransactions()
     * @param int $order_id The ID of the &#x60;Order&#x60; to which the transactions belong. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\TransactionCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionsWithHttpInfo($order_id, array $params = [])
    {
        
        // verify the required parameter 'order_id' is set
        if (!isset($order_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getTransactions');
        }
        

        // parse inputs
        $resourcePath = "/orders/{order_id}/transactions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($order_id)) {
            $resourcePath = str_replace(
                "{" . "order_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
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
                '\BigCommerce\Api\Model\TransactionCollectionResponse',
                '/orders/{order_id}/transactions'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\TransactionCollectionResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\TransactionCollectionResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 204:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\NoContent', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\NotFound', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
}
