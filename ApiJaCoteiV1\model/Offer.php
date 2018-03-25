<?php


namespace ApiJaCoteiV1\model;

use \ArrayAccess;

class Offer implements ArrayAccess {
  static $swaggerTypes = array(
      'available' => 'boolean',
      'barcode' => 'string',
      'images' => 'array[string]',
      'categories' => 'array[string]',
      'isbn' => 'string',
      'link' => 'string',
      'prices' => 'array[OfferPrice]',
      'sku' => 'string',
      'title' => 'string'
  );

  static $attributeMap = array(
      'available' => 'available',
      'barcode' => 'barcode',
      'images' => 'images',
      'categories' => 'categories',
      'isbn' => 'isbn',
      'link' => 'link',
      'prices' => 'prices',
      'sku' => 'sku',
      'title' => 'title'
  );

  
  /**
  * Produto disponÃ­vel
  */
  public $available; /* boolean */
  /**
  * cÃ³digo de barras do produto da oferta
  */
  public $barcode; /* string */
  /**
  * Imagens dos produtos da oferta
  */
  public $images; /* array[string] */
  /**
  * Categorias dos produtos da oferta
  */
  public $categories; /* array[string] */
  /**
  * cÃ³digo de barras do livro
  */
  public $isbn; /* string */
  /**
  * link para a pÃ¡gina da oferta
  */
  public $link; /* string */
  /**
  * preÃ§os da oferta
  */
  public $prices; /* array[OfferPrice] */
  /**
  * CÃ³digo de identificaÃ§Ã£o da oferta
  */
  public $sku; /* string */
  /**
  * DescriÃ§Ã£o da oferta
  */
  public $title; /* string */

  public function __construct(array $data = null) {
    $this->available = $data["available"];
    $this->barcode = $data["barcode"];
    $this->images = $data["images"];
    $this->categories = $data["categories"];
    $this->isbn = $data["isbn"];
    $this->link = $data["link"];
    $this->prices = $data["prices"];
    $this->sku = $data["sku"];
    $this->title = $data["title"];
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
