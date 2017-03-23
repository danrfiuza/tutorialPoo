<?php
class Record
{
 protected $data;

  public function __set($prop,$value)
  {
    $this->data[$prop] = $value;
  }

  public function __get($prop)
  {
    return $this->data[$prop];
  }

  public function insert()
  {

  }
}
