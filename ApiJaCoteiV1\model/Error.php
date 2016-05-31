<?php


namespace ApiJaCoteiV1\model;

use \ArrayAccess;

class Error implements ArrayAccess {
  static $swaggerTypes = array(
      'code' => 'int',
      'message' => 'string'
  );

  static $attributeMap = array(
      'code' => 'code',
      'message' => 'message'
  );

  
  /**
  * Codigo do erro
  */
  public $code; /* int */
  /**
  * Mensagem de erro
  */
  public $message; /* string */

  public function __construct(array $data = null) {
    $this->code = $data["code"];
    $this->message = $data["message"];
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
