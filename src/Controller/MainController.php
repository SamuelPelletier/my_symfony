<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 27/03/2019
 * Time: 14:47
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    /**
     * @Route("/",name="homepage")
     */
    public function homepage(): Response
    {
        return $this->render("main/homepage.html.twig", [
            "messages" => [
                ["contenu" => "hello"]
            ],
            "controller" => $this
        ]);
    }

}