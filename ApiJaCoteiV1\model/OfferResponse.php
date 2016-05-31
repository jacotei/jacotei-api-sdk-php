<?php


namespace ApiJaCoteiV1\model;

use \ArrayAccess;

class OfferResponse implements ArrayAccess {
  static $swaggerTypes = array(
      'accepted_offers_count' => 'int',
      'total_offers_count' => 'int',
      'offers_rejected' => 'array[OfferRejected]'
  );

  static $attributeMap = array(
      'accepted_offers_count' => 'acceptedOffersCount',
      'total_offers_count' => 'totalOffersCount',
      'offers_rejected' => 'offersRejected'
  );

  
  /**
  * quantidade de ofertas aceitas
  */
  public $accepted_offers_count; /* int */
  /**
  * quantidade total de ofertas enviadas
  */
  public $total_offers_count; /* int */
  /**
  * lista de ofertas rejeitadas
  */
  public $offers_rejected; /* array[OfferRejected] */

  public function __construct(array $data = null) {
    $this->accepted_offers_count = $data["accepted_offers_count"];
    $this->total_offers_count = $data["total_offers_count"];
    $this->offers_rejected = $data["offers_rejected"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}
