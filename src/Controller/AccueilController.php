<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AccueilController {
    public function index(): Response{
        return new Response("Hello Moto !");
    }
}
