<?php

namespace LMQA\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;//added para usar objetos Response

class UserController extends Controller
{
    public function indexAction()
    {
        //return $this->render('LMQAUserBundle:Default:index.html.twig', array('name' => $name));
        $em = $this->getDoctrine()->getManager();
        
        $users= $em->getRepository('LMQAUserBundle:User')->findAll();// read en entity User
        
        //renderizando la vista, el html
        //el bundle : sub directorio : archivo plantilla
        // arma la ruta /User/index.html.twig  y lo busca en //Resources/views/
        return $this->render('LMQAUserBundle:User:index.html.twig', 
                                array('users' => $users)); /* escribiendo 'users' desde la plantilla se puede acceder */
    }
}
