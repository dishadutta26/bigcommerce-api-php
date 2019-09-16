<?php
/**
 * WishlistsApi
 *
 * @package  BigCommerce\Api
 */

/**
 * Wishlist API
 *
 * The Wishlist API allows a developer to create and manage customer Wishlists.
 *
 * OpenAPI spec version: 1.0
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

class WishlistsApi
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
    * @return WishlistsApi
    */
    public function setApiClient(\BigCommerce\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addWishlistItems
     * Add Wishlist Item
     *
     *
     * @param int $wishlist_id ID of the Wishlist (required)
     * @param \BigCommerce\Api\Model\WishlistAddItemsRequest $body  (optional)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\WishlistResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function addWishlistItems($wishlist_id, $body, array $params = [])
    {
        list($response) = $this->addWishlistItemsWithHttpInfo($wishlist_id,  $body, $params);
        return $response;
    }


    /**
     * Operation addWishlistItemsWithHttpInfo
     *
     * @see self::addWishlistItems()
     * @param int $wishlist_id ID of the Wishlist (required)
     * @param \BigCommerce\Api\Model\WishlistAddItemsRequest $body  (optional)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\WishlistResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addWishlistItemsWithHttpInfo($wishlist_id,  $body, array $params = [])
    {
        
        // verify the required parameter 'wishlist_id' is set
        if (!isset($wishlist_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $wishlist_id when calling addWishlistItems');
        }
        
        

        // parse inputs
        $resourcePath = "/wishlists/{wishlist_id}/items";
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


        if (isset($wishlist_id)) {
            $resourcePath = str_replace(
                "{" . "wishlist_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($wishlist_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
        $_tempBody = $body;
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
                '\BigCommerce\Api\Model\WishlistResponse',
                '/wishlists/{wishlist_id}/items'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\WishlistResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\WishlistResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation createWishlist
     * Create a Wishlist
     *
     *
     * @param \BigCommerce\Api\Model\WishlistRequest $body  (required)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\WishlistResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function createWishlist($body, array $params = [])
    {
        list($response) = $this->createWishlistWithHttpInfo( $body, $params);
        return $response;
    }


    /**
     * Operation createWishlistWithHttpInfo
     *
     * @see self::createWishlist()
     * @param \BigCommerce\Api\Model\WishlistRequest $body  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\WishlistResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWishlistWithHttpInfo( $body, array $params = [])
    {
        
        // verify the required parameter 'body' is set
        if (!isset($body)) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createWishlist');
        }
        

        // parse inputs
        $resourcePath = "/wishlists";
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

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
        $_tempBody = $body;
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
                '\BigCommerce\Api\Model\WishlistResponse',
                '/wishlists'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\WishlistResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\WishlistResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation deleteWishlist
     * Delete a Wishlist
     *
     *
     * @param int $wishlist_id ID of the Wishlist (required)
     * @param array $params = []
     * @return null
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function deleteWishlist($wishlist_id, array $params = [])
    {
        list($response) = $this->deleteWishlistWithHttpInfo($wishlist_id, $params);
        return $response;
    }


    /**
     * Operation deleteWishlistWithHttpInfo
     *
     * @see self::deleteWishlist()
     * @param int $wishlist_id ID of the Wishlist (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWishlistWithHttpInfo($wishlist_id, array $params = [])
    {
        
        // verify the required parameter 'wishlist_id' is set
        if (!isset($wishlist_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $wishlist_id when calling deleteWishlist');
        }
        

        // parse inputs
        $resourcePath = "/wishlists/{wishlist_id}";
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


        if (isset($wishlist_id)) {
            $resourcePath = str_replace(
                "{" . "wishlist_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($wishlist_id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/wishlists/{wishlist_id}'
            );
            return [null, $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
            }

            throw $e;
        }
    }
    /**
     * Operation deleteWishlistItem
     * Delete Wishlist Item
     *
     *
     * @param int $wishlist_id ID of the Wishlist (required)
     * @param int $item_id  (required)
     * @param array $params = []
     * @return null
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function deleteWishlistItem($wishlist_id, $item_id, array $params = [])
    {
        list($response) = $this->deleteWishlistItemWithHttpInfo($wishlist_id, $item_id, $params);
        return $response;
    }


    /**
     * Operation deleteWishlistItemWithHttpInfo
     *
     * @see self::deleteWishlistItem()
     * @param int $wishlist_id ID of the Wishlist (required)
     * @param int $item_id  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWishlistItemWithHttpInfo($wishlist_id, $item_id, array $params = [])
    {
        
        // verify the required parameter 'wishlist_id' is set
        if (!isset($wishlist_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $wishlist_id when calling deleteWishlistItem');
        }
        
        // verify the required parameter 'item_id' is set
        if (!isset($item_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $item_id when calling deleteWishlistItem');
        }
        

        // parse inputs
        $resourcePath = "/wishlists/{wishlist_id}/items/{item_id}";
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


        if (isset($wishlist_id)) {
            $resourcePath = str_replace(
                "{" . "wishlist_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($wishlist_id),
                $resourcePath
            );
        }
        // path params


        if (isset($item_id)) {
            $resourcePath = str_replace(
                "{" . "item_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/wishlists/{wishlist_id}/items/{item_id}'
            );
            return [null, $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
            }

            throw $e;
        }
    }
    /**
     * Operation getWishlist
     * Get a Wishlist
     *
     *
     * @param int $wishlist_id ID of the Wishlist (required)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\WishlistResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function getWishlist($wishlist_id, array $params = [])
    {
        list($response) = $this->getWishlistWithHttpInfo($wishlist_id, $params);
        return $response;
    }


    /**
     * Operation getWishlistWithHttpInfo
     *
     * @see self::getWishlist()
     * @param int $wishlist_id ID of the Wishlist (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\WishlistResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWishlistWithHttpInfo($wishlist_id, array $params = [])
    {
        
        // verify the required parameter 'wishlist_id' is set
        if (!isset($wishlist_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $wishlist_id when calling getWishlist');
        }
        

        // parse inputs
        $resourcePath = "/wishlists/{wishlist_id}";
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


        if (isset($wishlist_id)) {
            $resourcePath = str_replace(
                "{" . "wishlist_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($wishlist_id),
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
                '\BigCommerce\Api\Model\WishlistResponse',
                '/wishlists/{wishlist_id}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\WishlistResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\WishlistResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation listWishlists
     * Get Wishlists
     *
     *
     * @param array $params = []
     *     - customer_id int All wishlists relating to the customer. (optional)
     *     - page int The page number of results per page. 1 is the default and starts from record 0. (optional)
     *     - limit int The numbers of items to return per page. Default is 50 and maximum is 250. (optional)
     * @return \BigCommerce\Api\Model\WishlistCollectionResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function listWishlists(array $params = [])
    {
        list($response) = $this->listWishlistsWithHttpInfo($params);
        return $response;
    }


    /**
     * Operation listWishlistsWithHttpInfo
     *
     * @see self::listWishlists()
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\WishlistCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listWishlistsWithHttpInfo(array $params = [])
    {
        

        // parse inputs
        $resourcePath = "/wishlists";
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
                '\BigCommerce\Api\Model\WishlistCollectionResponse',
                '/wishlists'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\WishlistCollectionResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\WishlistCollectionResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation updateWishlist
     * Update a Wishlist
     *
     *
     * @param int $wishlist_id ID of the Wishlist (required)
     * @param \BigCommerce\Api\Model\WishlistRequest $body  (required)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\WishlistResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function updateWishlist($wishlist_id, $body, array $params = [])
    {
        list($response) = $this->updateWishlistWithHttpInfo($wishlist_id,  $body, $params);
        return $response;
    }


    /**
     * Operation updateWishlistWithHttpInfo
     *
     * @see self::updateWishlist()
     * @param int $wishlist_id ID of the Wishlist (required)
     * @param \BigCommerce\Api\Model\WishlistRequest $body  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\WishlistResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWishlistWithHttpInfo($wishlist_id,  $body, array $params = [])
    {
        
        // verify the required parameter 'body' is set
        if (!isset($body)) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateWishlist');
        }
        
        // verify the required parameter 'wishlist_id' is set
        if (!isset($wishlist_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $wishlist_id when calling updateWishlist');
        }
        

        // parse inputs
        $resourcePath = "/wishlists/{wishlist_id}";
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


        if (isset($wishlist_id)) {
            $resourcePath = str_replace(
                "{" . "wishlist_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($wishlist_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
        $_tempBody = $body;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\Model\WishlistResponse',
                '/wishlists/{wishlist_id}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\WishlistResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\WishlistResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
}
