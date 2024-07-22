<?php

use Entity\Pokemon;

class PokemonRepository extends BaseRepository
{
  public function getAllPokemons()
  {
    $conn = $this->connect();
    $sql = "SELECT * FROM pokemon";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $pokemons = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $pokemon = new Pokemon($row);
      $pokemons[] = $pokemon;
    }
    return $pokemons;
  }
  public function getPokemonById()
  {
    echo "Voici les 12 derniers pokemons entrés par ID.";
  }
}
