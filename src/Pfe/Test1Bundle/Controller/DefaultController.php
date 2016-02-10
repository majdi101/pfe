<?php

namespace Pfe\Test1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PfeTest1Bundle:Default:index.html.twig');
    }
}
