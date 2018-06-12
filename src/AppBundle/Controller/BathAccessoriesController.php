<?php
/**
 * Created by PhpStorm.
 * User: pushpe
 * Date: 6/12/18
 * Time: 11:07 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BathAccessoriesController extends Controller{
    /**
     * @Route("/products/bath-accessories", name="products_bath_accessories")
     */
    public function products_bath_accessories(Request $request)
    {
        $active = array("bath-accessories" => "active");
        $tabs = array("NOKEN", "ANNWA", "AGMECO");
        $data1 = array("1","2","3");
        $tabsData = array($tabs[0] => $data1, $tabs[1] => $data1, $tabs[2] => $data1);

        // replace this example code with whatever you need
        return $this->render('pages/tabView.html.twig', array(
            "tabs" => $tabs,
            "tabsData" => $tabsData,
            "active" => $active
        ));
    }

    /**
     * @Route("/products/bath-accessories/towel-rack", name="products_bath_accessories_towel_rack")
     */
    public function products_bath_accessories_towel_rack(Request $request)
    {
        $active = array("bath-accessories" => "active");
        $tabs = array("NOKEN", "ANNWA", "AGMECO");
        $data1 = array("1","2","3");
        $tabsData = array($tabs[0] => $data1, $tabs[1] => $data1, $tabs[2] => $data1);

        // replace this example code with whatever you need
        return $this->render('pages/tabView.html.twig', array(
            "tabs" => $tabs,
            "tabsData" => $tabsData,
            "active" => $active
        ));
    }

    /**
     * @Route("/products/bath-accessories/soup-holder", name="products_bath_accessories_soup_holder")
     */
    public function products_bath_accessories_soup_holder(Request $request)
    {
        $active = array("bath-accessories" => "active");
        $tabs = array("NOKEN", "ANNWA", "AGMECO");
        $data1 = array("1","2","3");
        $tabsData = array($tabs[0] => $data1, $tabs[1] => $data1, $tabs[2] => $data1);

        // replace this example code with whatever you need
        return $this->render('pages/tabView.html.twig', array(
            "tabs" => $tabs,
            "tabsData" => $tabsData,
            "active" => $active
        ));
    }

    /**
     * @Route("/products/bath-accessories/mirror", name="products_bath_accessories_mirror")
     */
    public function products_bath_accessories_mirror(Request $request)
    {
        $active = array("bath-accessories" => "active");
        $tabs = array("NOKEN", "ANNWA", "AGMECO");
        $data1 = array("1","2","3");
        $tabsData = array($tabs[0] => $data1, $tabs[1] => $data1, $tabs[2] => $data1);

        // replace this example code with whatever you need
        return $this->render('pages/tabView.html.twig', array(
            "tabs" => $tabs,
            "tabsData" => $tabsData,
            "active" => $active
        ));
    }

}