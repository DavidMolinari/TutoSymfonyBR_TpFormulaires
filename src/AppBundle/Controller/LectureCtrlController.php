<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LectureCtrlController extends Controller
{
    /**
     * @Route("/index/{nom}")
     */
    public function indexAction($nom)
    {
        return $this->render('AppBundle:LectureCtrl:index.html.twig', array(
            // ...
        ));
    }

}
