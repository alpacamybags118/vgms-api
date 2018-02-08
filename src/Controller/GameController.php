<?php
namespace App\Controller;

use App\Model\Game;
use Symfony\Component\HttpFoundation\Response;

class GameController
{
    public function games()
    {
        $response = new Response();
        $game = new Game();
        $game->SetName("my game");
        $response->setContent(json_encode($game->GetName()));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}