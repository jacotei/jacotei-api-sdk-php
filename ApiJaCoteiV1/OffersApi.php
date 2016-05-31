<?php

namespace ApiJaCoteiV1;

class OffersApi {

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new ApiClient(); // create a new API client if not present
        $this->apiClient = Configuration::$apiClient;
      }
      else
        $this->apiClient = Configuration::$apiClient; // use the default one
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }
  }

  private $apiClient; // instance of the ApiClient

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * updateOffersUsingPOST
   *
   * MÃ©todo de atualizaÃ§Ã£o de ofertas
   *
   * @param OfferRequest $offers offerUpdateRequest (required)
   * @return OfferResponse
   */
   public function updateOffersUsingPOST($offers) {
      
      // verify the required parameter 'offers' is set
      if ($offers === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offers when calling updateOffersUsingPOST');
      }
      

      // parse inputs
      $resourcePath = "/offers";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

      
      
      
      
      // body params
      $_tempBody = null;
      if (isset($offers)) {
        $_tempBody = $offers;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('client_id', 'access_token');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'OfferResponse');
      return $responseObject;
  }
  
  /**
   * getOfferUsingGET
   *
   * Consulta de ofertas por sku
   *
   * @param string $sku sku (required)
   * @return Offer
   */
   public function getOfferUsingGET($sku) {
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling getOfferUsingGET');
      }
      

      // parse inputs
      $resourcePath = "/offers/{sku}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      // path params
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('client_id', 'access_token');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'Offer');
      return $responseObject;
  }
  

}
