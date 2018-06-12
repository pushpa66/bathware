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
        return $this->render('pages/homePage.html.twig');
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function cartAction(Request $request)
    {
        $active = array("cart" => "active");
        // replace this example code with whatever you need
        return $this->render('pages/cartPage.html.twig', array(
            "active" => $active
        ));
    }
}
