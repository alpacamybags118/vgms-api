<?php
/**
 * Created by PhpStorm.
 * User: jsaky
 * Date: 11/17/2017
 * Time: 9:41 PM
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class GameController
{
    public function games()
    {
        $response = new Response();
        $response->setContent(json_encode(array(
            'data' => 123,
        )));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}