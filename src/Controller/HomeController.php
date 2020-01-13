<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {


    /**
     * @Route("/", name="homepage")
     */
    public function home()
    {
        $prenoms = ["Alex" => 31, "Bryan" => 12, "Carl" => 55] ;

        return $this->render(
               'home.html.twig',
               ['title' => "Site en construction",
               'age' => 12,
               'tableau' => $prenoms]
        );
    }

    /**
     * @Route("/hello/{prenom}", name="hello")
     * @Route("/hello")
     */
    public function hello($prenom = toto)
    {
        return new Response("Bonjour ". $prenom);
    }
}



?>