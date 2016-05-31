<?php


namespace ApiJaCoteiV1\model;

use \ArrayAccess;

class OfferRejected implements ArrayAccess {
  static $swaggerTypes = array(
      'offer' => 'Offer',
      'validation_errors' => 'array[Error]'
  );

  static $attributeMap = array(
      'offer' => 'offer',
      'validation_errors' => 'validationErrors'
  );

  
  public $offer; /* Offer */
  public $validation_errors; /* array[Error] */

  public function __construct(array $data = null) {
    $this->offer = $data["offer"];
    $this->validation_errors = $data["validation_errors"];
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
