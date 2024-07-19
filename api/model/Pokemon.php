<?php namespace Model;

class Pokemon extends BaseModel
{
    public int $Id_Pokemon;
    public ?string $name;
    public ?int $weight;
    public ?int $height;
    public ?string $summary;
    public ?string $type;
}