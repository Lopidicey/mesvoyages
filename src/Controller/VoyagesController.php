<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class VoyagesController extends AbstractController {
    public function index(): Response{
        return $this->render("pages/voyages.html.twig");
    }
}

