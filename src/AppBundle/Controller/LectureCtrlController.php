<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Employe;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LectureCtrlController extends Controller
{

    /**
     * @Route(path="/lectureCtrl/",
     *     name="lectureCtrl_index")
     */
    public function lectureCtrlAction()
    {
        $employe = new Employe(1, "Dupont","Jean", new \DateTime('1988-12-25'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num','number')
            ->add('nom','text')
            ->add('prenom','text')
            ->add('dateNaissance','date')
            ->add('Enregistrer','submit')
            ->getForm();
        return $this->render('AppBundle:LectureCtrl:lectureCtrl.html.twig',array('leFormulaire'=>$formulaire->createView()));
    }

    /**
     * @Route(path="/afficheEmpParam/",
     *     name="lectureCtrl_afficheEmpParam")
     */
    public function afficheEmpParamAction()
    {
        $employe = new Employe(1, "Dupont","Jean", new \DateTime('1988-12-25'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num','number')
            ->add('nom','text')
            ->add('prenom','text')
            ->add('dateNaissance','date')
            ->add('Enregistrer','submit')
            ->getForm();
        $sport='Rugby';
        $autos=array('Ferrari','Aston Martin', 'Porsche');
        return $this->render('AppBundle:LectureCtrl:afficheEmpParam.html.twig',array('leFormulaire'=>$formulaire->createView(),
            'sport'=>$sport,
            'autos'=>$autos));
    }

    /**
     * @Route(path="/afficheEmpTwig/",
     *     name="lectureCtrl_afficheEmpTwig")
     */
    public function afficheEmpTwigAction()
    {
        $request=$this->get('request');
        if ($request->getMethod()==='POST'){
            $a=0;
        }
        $employe = new Employe(1, "Dupont","Jean", new \DateTime('1988-12-25'));
        $employe->setPrenom("Jean");
        $employe->getDateNaissance(new \DateTime('today'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num','number')
            ->add('nom','text')
            ->add('prenom','text')
            ->add('dateNaissance','date')
            ->add('Enregistrer','submit')
            ->getForm();
        return $this->render('AppBundle:LectureCtrl:afficheEmpTwig.html.twig',
            array('uneEntree'=>'je viens du controller','leFormulaire'=>$formulaire->createView()));
    }
}
