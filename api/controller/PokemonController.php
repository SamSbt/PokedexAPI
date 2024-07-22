<?php namespace Controller;

use Core\HttpResponse;

class PokemonController extends BaseController
{
    public function get() : array
    {
        if($this->id == 0){
            return ["result" => "See all Pokemons"];
        }
        return ["result"=> "See Pokemons with id = " . $this->id ];
    }

    public function post() : array
    {
        return ["result" => "Create a Pokemon"];
    }

    public function put() : array
    {
        HttpResponse::SendNotFound($this->id <= 0);
        return ["result"=> "Update Pokemon with id = " . $this->id ];
    }

    public function delete() : array
    {
        HttpResponse::SendNotFound($this->id <= 0);
        return ["result"=> "Delete Pokemon with id = " . $this->id ];
    }
}