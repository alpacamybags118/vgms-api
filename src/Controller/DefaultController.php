<?php
/**
 * Created by PhpStorm.
 * User: jsaky
 * Date: 11/17/2017
 * Time: 9:36 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response('<html><body>Hello World!</body></html>');
    }
}