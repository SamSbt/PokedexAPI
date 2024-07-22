<?php namespace Repositories;
use PDO;
use Model\Pokemon;

class PokemonRepositories extends BaseRepository
{
    public function getPokemon($id){
        $sql = "SELECT * FROM pokemon WHERE id_pokemon = $id";
        $queryResponse = $this->preparedQuery($sql);
        $pokemons = $queryResponse->statement->fetchAll(PDO::FETCH_CLASS / PDO::FETCH_PROPS_LATE, "model\Pokemon");
        return $pokemons;
    }
}