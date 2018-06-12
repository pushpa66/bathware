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

class CeramicController extends Controller{
    /**
     * @Route("/products/ceramic", name="products_ceramic")
     */
    public function products_ceramic(Request $request)
    {
        $active = array("ceramic" => "active");
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
     * @Route("/products/ceramic/wc", name="products_ceramic_wc")
     */
    public function products_ceramic_wc(Request $request)
    {
        $active = array("ceramic" => "active");
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
     * @Route("/products/ceramic/wash-basin", name="products_ceramic_wash_basin")
     */
    public function products_ceramic_wash_basin(Request $request)
    {
        $active = array("ceramic" => "active");
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
     * @Route("/products/ceramic/urinal", name="products_ceramic_urinal")
     */
    public function products_ceramic_urinal(Request $request)
    {
        $active = array("ceramic" => "active");
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
     * @Route("/products/ceramic/bath-tub", name="products_ceramic_bath_tub")
     */
    public function products_ceramic_bath_tubs(Request $request)
    {
        $active = array("ceramic" => "active");
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