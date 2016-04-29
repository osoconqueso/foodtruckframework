<?php

namespace FoodTruckBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FoodTruckBundle:Default:index.html.twig');
    }

    public function jessicaAction(){

        die('I am jessica');
    }
}
