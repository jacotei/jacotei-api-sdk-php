<?php


namespace ApiJaCoteiV1\model;

use \ArrayAccess;

class OfferRequest implements ArrayAccess {
  static $swaggerTypes = array(
      'offers' => 'array[Offer]'
  );

  static $attributeMap = array(
      'offers' => 'offers'
  );

  
  /**
  * offers
  */
  public $offers; /* array[Offer] */

  public function __construct(array $data = null) {
    $this->offers = $data["offers"];
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
