<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactoController extends AbstractController
{
    /**
     * @Route("/contacto/{codigo}", name="ficha_contacto")
     */
    public function ficha($codigo): Response
    {
        return new Response("Datos de contacto con código $codigo");
    }
}
