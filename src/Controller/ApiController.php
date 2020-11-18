<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class ApiController extends AbstractController
{
     /**
     * @Route("/navpages", name="navpages", methods="GET")
     */
    public function navpages()
    {
        $pages = 
        [
            [
                "route" => "",
                "label" => "Accueil",
                "id" => 1
            ],
            [
                "route" => "mo+
                n-compte",
                "label" => "Mon Compte",
                "id" => 2
            ],
            [
                "route" => "a-propos",
                "label" => "A propos",
                "id" => 3
            ]
            
        ];
        return $this->json($pages, $status = 200, $pages, $context = []);
    }
}