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

class KitchenGullyController extends Controller{
    /**
     * @Route("/products/kitchen-gully", name="products_kitchen_gully")
     */
    public function products_kitchen_gully(Request $request)
    {
        $active = array("kitchen-gully" => "active");
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
     * @Route("/products/kitchen-gully/shower-channel", name="products_kitchen_gully_shower_channel")
     */
    public function products_kitchen_gully_shower_channel(Request $request)
    {
        $active = array("kitchen-gully" => "active");
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
     * @Route("/products/kitchen-gully/floor-drain", name="products_kitchen_gully_floor_drain")
     */
    public function products_kitchen_gully_floor_drain(Request $request)
    {
        $active = array("kitchen-gully" => "active");
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
     * @Route("/products/kitchen-gully/kitchen-bench-drain", name="products_kitchen_gully_kitchen_bench_drain")
     */
    public function products_kitchen_gully_kitchen_bench_drain(Request $request)
    {
        $active = array("kitchen-gully" => "active");
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