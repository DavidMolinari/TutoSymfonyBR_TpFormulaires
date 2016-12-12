<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bdls\AppBundle\Entity\Employe;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LectureCtrlController extends Controller
{
    /**
     * @Route(path="/index/",
     *     name="lectureCtrl_index")
     */
    public function indexAction()
    {
        $employe = new Employe(1, "Dupont","Jean", new \DateTime('1988-12-25'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num','number')
            ->add('nom','text')
            ->add('prenom','text')
            ->add('dateNaissance','date')
            ->add('Enregistrer','submit')
            ->getForm();
        return $this->render('AppBundle:LectureCtrl:index.html.twig',array('leFormulaire'=>$formulaire->createView()));
    }

}
