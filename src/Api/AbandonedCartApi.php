<?php
/**
 * AbandonedCartApi
 *
 * @package  BigCommerce\Api
 */

/**
 * Data Model for BigCommerce's v3 Server-to-Server Abandoned  Cart API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v0.0.1
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

class AbandonedCartApi
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
    * @return AbandonedCartApi
    */
    public function setApiClient(\BigCommerce\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation recoverCart
     * 
     *
     *
     * @param string $token Unique token. (required)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\AbandonedCartResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function recoverCart($token, array $params = [])
    {
        list($response) = $this->recoverCartWithHttpInfo($token, $params);
        return $response;
    }


    /**
     * Operation recoverCartWithHttpInfo
     *
     * @see self::recoverCart()
     * @param string $token Unique token. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\AbandonedCartResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function recoverCartWithHttpInfo($token, array $params = [])
    {
        
        // verify the required parameter 'token' is set
        if (!isset($token)) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling recoverCart');
        }
        

        // parse inputs
        $resourcePath = "/abandoned_cart/{token}";
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


        if (isset($token)) {
            $resourcePath = str_replace(
                "{" . "token" . "}",
                $this->apiClient->getSerializer()->toPathValue($token),
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
                '\BigCommerce\Api\Model\AbandonedCartResponse',
                '/abandoned_cart/{token}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\AbandonedCartResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\AbandonedCartResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
}
