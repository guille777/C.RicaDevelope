<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/proyectos", name="proyectos")
     */
    public function proyectosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/proyectos.html.twig');
    }

      /**
     * @Route("/primeroDaw", name="primeroDaw")
     */
    public function primeroDawAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/primeroDaw.html.twig');
    }
}
