<?php

namespace Entity;

class Pokemon extends BaseEntity
{
  public int $id_pokemon;
  public ?string $name;
  public ?float $height;
  public ?float $weight;
  public ?string $summary;
  public ?string $img_src;

}
