<?php

namespace Entity;

class Pokemon 
{
  public int $id_pokemon;
  public ?string $name;
  public ?float $height;
  public ?float $weight;
  public ?string $summary;
  public ?string $img_src;

  // public function __construct(array $data = [])
  // {
  //   parent::__construct($data);
  // }
}
