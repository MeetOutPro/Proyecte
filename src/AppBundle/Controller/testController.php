<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UserTemas;
use AppBundle\Form\UserTemasType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class testController extends Controller
{

    /**
     * @Route("/test", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $entity = new UserTemas();

        $form = $this->createForm(UserTemasType::class,$entity);

        $data = array(
            'form'  => $form->createView()
        );

        // replace this example code with whatever you need
        return $this->render('test/index.html.twig',$data);
    }
}
