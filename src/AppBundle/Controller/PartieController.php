<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PartieController extends Controller
{
    /**
     * @Route ("/mesparties", name="mesparties")
     */

    public function mespartiesAction(){
        return $this->render('@App/Default/mesparties.html.twig');
    }

}