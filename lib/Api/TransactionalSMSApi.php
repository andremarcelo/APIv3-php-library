<?php
/**
 * TransactionalSMSApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
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
 * TransactionalSMSApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionalSMSApi
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
     * @return TransactionalSMSApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getSmsEvents
     *
     * Get all the SMS activity (unaggregated events)
     *
     * @param int $limit Number of documents per page (optional, default to 50)
     * @param \DateTime $start_date Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $end_date Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $offset Index of the first document of the page (optional, default to 0)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; (optional)
     * @param string $phone_number Filter the report for a specific phone number (optional)
     * @param string $event Filter the report for specific events (optional)
     * @param string $tags Filter the report for specific tags passed as a serialized urlencoded array (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse20022
     */
    public function getSmsEvents($limit = '50', $start_date = null, $end_date = null, $offset = '0', $days = null, $phone_number = null, $event = null, $tags = null)
    {
        list($response) = $this->getSmsEventsWithHttpInfo($limit, $start_date, $end_date, $offset, $days, $phone_number, $event, $tags);
        return $response;
    }

    /**
     * Operation getSmsEventsWithHttpInfo
     *
     * Get all the SMS activity (unaggregated events)
     *
     * @param int $limit Number of documents per page (optional, default to 50)
     * @param \DateTime $start_date Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $end_date Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $offset Index of the first document of the page (optional, default to 0)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; (optional)
     * @param string $phone_number Filter the report for a specific phone number (optional)
     * @param string $event Filter the report for specific events (optional)
     * @param string $tags Filter the report for specific tags passed as a serialized urlencoded array (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse20022, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSmsEventsWithHttpInfo($limit = '50', $start_date = null, $end_date = null, $offset = '0', $days = null, $phone_number = null, $event = null, $tags = null)
    {
        if (!is_null($limit) && ($limit > 100)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TransactionalSMSApi.getSmsEvents, must be smaller than or equal to 100.');
        }

        // parse inputs
        $resourcePath = "/transactionalSMS/statistics/events";
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
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['startDate'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($days !== null) {
            $queryParams['days'] = $this->apiClient->getSerializer()->toQueryValue($days);
        }
        // query params
        if ($phone_number !== null) {
            $queryParams['phoneNumber'] = $this->apiClient->getSerializer()->toQueryValue($phone_number);
        }
        // query params
        if ($event !== null) {
            $queryParams['event'] = $this->apiClient->getSerializer()->toQueryValue($event);
        }
        // query params
        if ($tags !== null) {
            $queryParams['tags'] = $this->apiClient->getSerializer()->toQueryValue($tags);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse20022',
                '/transactionalSMS/statistics/events'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20022', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20022', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTransacAggregatedSmsReport
     *
     * Get your SMS activity aggregated over a period of time
     *
     * @param \DateTime $start_date Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $end_date Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with startDate and endDate (optional)
     * @param string $tag Filter on a tag (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse20023
     */
    public function getTransacAggregatedSmsReport($start_date = null, $end_date = null, $days = null, $tag = null)
    {
        list($response) = $this->getTransacAggregatedSmsReportWithHttpInfo($start_date, $end_date, $days, $tag);
        return $response;
    }

    /**
     * Operation getTransacAggregatedSmsReportWithHttpInfo
     *
     * Get your SMS activity aggregated over a period of time
     *
     * @param \DateTime $start_date Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $end_date Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with startDate and endDate (optional)
     * @param string $tag Filter on a tag (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse20023, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransacAggregatedSmsReportWithHttpInfo($start_date = null, $end_date = null, $days = null, $tag = null)
    {
        // parse inputs
        $resourcePath = "/transactionalSMS/statistics/aggregatedReport";
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
        if ($start_date !== null) {
            $queryParams['startDate'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($days !== null) {
            $queryParams['days'] = $this->apiClient->getSerializer()->toQueryValue($days);
        }
        // query params
        if ($tag !== null) {
            $queryParams['tag'] = $this->apiClient->getSerializer()->toQueryValue($tag);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse20023',
                '/transactionalSMS/statistics/aggregatedReport'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20023', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20023', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTransacSmsReport
     *
     * Get your SMS activity aggregated per day
     *
     * @param \DateTime $start_date Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $end_date Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; (optional)
     * @param string $tag Filter on a tag (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse20024
     */
    public function getTransacSmsReport($start_date = null, $end_date = null, $days = null, $tag = null)
    {
        list($response) = $this->getTransacSmsReportWithHttpInfo($start_date, $end_date, $days, $tag);
        return $response;
    }

    /**
     * Operation getTransacSmsReportWithHttpInfo
     *
     * Get your SMS activity aggregated per day
     *
     * @param \DateTime $start_date Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $end_date Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; (optional)
     * @param string $tag Filter on a tag (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse20024, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransacSmsReportWithHttpInfo($start_date = null, $end_date = null, $days = null, $tag = null)
    {
        // parse inputs
        $resourcePath = "/transactionalSMS/statistics/reports";
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
        if ($start_date !== null) {
            $queryParams['startDate'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($days !== null) {
            $queryParams['days'] = $this->apiClient->getSerializer()->toQueryValue($days);
        }
        // query params
        if ($tag !== null) {
            $queryParams['tag'] = $this->apiClient->getSerializer()->toQueryValue($tag);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse20024',
                '/transactionalSMS/statistics/reports'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20024', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20024', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sendTransacSms
     *
     * Send the SMS campaign to the specified mobile number
     *
     * @param \Swagger\Client\Model\SendTransacSms1 $send_transac_sms Values to send a transactional SMS (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2015
     */
    public function sendTransacSms($send_transac_sms)
    {
        list($response) = $this->sendTransacSmsWithHttpInfo($send_transac_sms);
        return $response;
    }

    /**
     * Operation sendTransacSmsWithHttpInfo
     *
     * Send the SMS campaign to the specified mobile number
     *
     * @param \Swagger\Client\Model\SendTransacSms1 $send_transac_sms Values to send a transactional SMS (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2015, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendTransacSmsWithHttpInfo($send_transac_sms)
    {
        // verify the required parameter 'send_transac_sms' is set
        if ($send_transac_sms === null) {
            throw new \InvalidArgumentException('Missing the required parameter $send_transac_sms when calling sendTransacSms');
        }
        // parse inputs
        $resourcePath = "/transactionalSMS/sms";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($send_transac_sms)) {
            $_tempBody = $send_transac_sms;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2015',
                '/transactionalSMS/sms'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2015', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2015', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}