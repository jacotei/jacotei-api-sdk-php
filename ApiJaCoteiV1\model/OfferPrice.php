<?php


namespace ApiJaCoteiV1\model;

use \ArrayAccess;

class OfferPrice implements ArrayAccess {
  static $swaggerTypes = array(
      'installment' => 'int',
      'installment_value' => 'double',
      'price' => 'double',
      'type' => 'string'
  );

  static $attributeMap = array(
      'installment' => 'installment',
      'installment_value' => 'installmentValue',
      'price' => 'price',
      'type' => 'type'
  );

  
  /**
  * Quantidade de parcelas
  */
  public $installment; /* int */
  /**
  * valor de cada parcela
  */
  public $installment_value; /* double */
  /**
  * preÃ§o total do produto
  */
  public $price; /* double */
  /**
  * Forma de pagamento
  */
  public $type; /* string */

  public function __construct(array $data = null) {
    $this->installment = $data["installment"];
    $this->installment_value = $data["installment_value"];
    $this->price = $data["price"];
    $this->type = $data["type"];
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
