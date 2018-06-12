<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PlumbingAccessoriesController extends Controller{
    /**
     * @Route("/products/plumbing-accessories", name="products_plumbing_accessories")
     */
    public function products_plumbing_accessories(Request $request)
    {
        $active = array("plumbing-accessories" => "active");
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
     * @Route("/products/plumbing-accessories/flexible-hose", name="products_plumbing_accessories_flexible_hose")
     */
    public function products_plumbing_accessories_flexible_hose(Request $request)
    {
        $active = array("plumbing-accessories" => "active");
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
     * @Route("/products/plumbing-accessories/angle-valve", name="products_plumbing_accessories_angle_valve")
     */
    public function products_plumbing_accessories_angle_valve(Request $request)
    {
        $active = array("plumbing-accessories" => "active");
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
     * @Route("/products/plumbing-accessories/bottle-tap", name="products_plumbing_accessories_bottle_tap")
     */
    public function products_plumbing_accessories_bottle_tap(Request $request)
    {
        $active = array("plumbing-accessories" => "active");
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
     * @Route("/products/plumbing-accessories/pillar-tap", name="products_plumbing_accessories_pillar_tap")
     */
    public function products_plumbing_accessories_pillar_tap(Request $request)
    {
        $active = array("plumbing-accessories" => "active");
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
     * @Route("/products/plumbing-accessories/bib-tap", name="products_plumbing_accessories_bib_tap")
     */
    public function products_plumbing_accessories_bib_tap(Request $request)
    {
        $active = array("plumbing-accessories" => "active");
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
     * @Route("/products/plumbing-accessories/two-way-tap", name="products_plumbing_accessories_two_way_tap")
     */
    public function products_plumbing_accessories_two_way_tap(Request $request)
    {
        $active = array("plumbing-accessories" => "active");
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