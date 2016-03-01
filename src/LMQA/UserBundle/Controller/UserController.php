<?php

namespace LMQA\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;//added para usar objetos Response

class UserController extends Controller
{
    public function indexAction()
    {
        //return $this->render('LMQAUserBundle:Default:index.html.twig', array('name' => $name));
        return new Response('Bienvenido a mi modulo de usuarios');
    }
}
