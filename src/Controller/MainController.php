<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 27/03/2019
 * Time: 14:47
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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

    /**
     * @Route("/contact",name="contact")
     */
    public function contact(): Response
    {
        $form = $this->createForm(TextType::class);
        return $this->render("main/contact.html.twig", [
            'contact_form' => $form->createView(),
        ]);
    }

}