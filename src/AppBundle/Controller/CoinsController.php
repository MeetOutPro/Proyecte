<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CoinsController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('coins/index.html.twig');
    }
}
