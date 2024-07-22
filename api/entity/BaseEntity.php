<?php

namespace Entity;

class BaseEntity
{
  public function __construct(array $data = [])
  {
    foreach ($data as $key => $value) {
      // Vérifie si la propriété existe dans la classe
      if (property_exists($this, $key)) {
        $this->$key = $value;
      }
    }
  }
}
