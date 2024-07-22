<?php

namespace Controller;

use Controller\BaseController;
use Core\HttpResponse;

class PokemonController extends BaseController
{
  public function get(): array
  {
    if ($this->id == 0) {
      return ["result" => "Read all Pokemons"];
    }
    return ["result" => "Read a Pokemon with id = " . $this->id];
  }
  public function post(): array
  {
    return ["result" => "Create a Pokemon"];
  }
  // public function get(): array | Article | null
  // {
  //   $articleRepository = new ArticleRepository();
  //   if ($this->id <= 0) {
  //     $articles = $articleRepository->getAll();
  //     return $articles;
  //   }
  //   $article = $articleRepository->getOneById($this->id);
  //   return $article;
  // }
  // public function post(): array
  // {
  //   $articleRepository = new ArticleRepository();
  //   $insertedArticle = $articleRepository->insert();
  //   return ["result" => $insertedArticle];
  // }
  public function put(): array
  {
    HttpResponse::SendNotFound($this->id <= 0);
    return ["result" => "Update Article with id = " . $this->id];
  }
  public function delete(): array
  {
    HttpResponse::SendNotFound($this->id <= 0);
    return ["result" => "Delete Article with id = " . $this->id];
  }
}
