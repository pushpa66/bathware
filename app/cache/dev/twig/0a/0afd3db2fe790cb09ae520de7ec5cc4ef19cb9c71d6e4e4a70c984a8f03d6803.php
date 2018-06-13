<?php

/* components/navbar.html.twig */
class __TwigTemplate_bde58d762285a3dff2f56ea036f07b744fa7fc32d7795eb6f01fccb2927e7f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <ul class=\"nav navbar-nav\" id=\"navbar\">
            <li class=\"\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> sanitary.lk</a>
                </div>
            </li>
            <li class=\"dropdown ";
        // line 9
        if ($this->getAttribute(($context["active"] ?? null), "ceramic", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["active"] ?? $this->getContext($context, "active")), "ceramic", array(), "array"), "html", null, true);
            echo " ";
        }
        echo "\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Ceramic <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_ceramic");
        echo "\">All</a></li>
                    <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_ceramic_wc");
        echo "\">WC</a></li>
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_ceramic_wash_basin");
        echo "\">Wash Basin</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_ceramic_urinal");
        echo "\">Urinal</a></li>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_ceramic_bath_tub");
        echo "\">Bath Tub</a></li>
                </ul>
            </li>
            <li class=\"dropdown ";
        // line 18
        if ($this->getAttribute(($context["active"] ?? null), "plumbing-accessories", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["active"] ?? $this->getContext($context, "active")), "plumbing-accessories", array(), "array"), "html", null, true);
            echo " ";
        }
        echo "\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Plumbing Accessories <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_plumbing_accessories");
        echo "\">All</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_plumbing_accessories_flexible_hose");
        echo "\">Flexible Hose</a></li>
                    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_plumbing_accessories_angle_valve");
        echo "\">Angle Valve</a></li>
                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_plumbing_accessories_bottle_tap");
        echo "\">Bottle Tap</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_plumbing_accessories_pillar_tap");
        echo "\">Pillar Tap</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_plumbing_accessories_bib_tap");
        echo "\">Bib Tap</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_plumbing_accessories_two_way_tap");
        echo "\">Two Way Tap</a></li>
                </ul>
            </li>
            <li class=\"dropdown ";
        // line 29
        if ($this->getAttribute(($context["active"] ?? null), "bath-accessories", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["active"] ?? $this->getContext($context, "active")), "bath-accessories", array(), "array"), "html", null, true);
            echo " ";
        }
        echo "\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Bath Accessories <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_bath_accessories");
        echo "\">All</a></li>
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_bath_accessories_towel_rack");
        echo "\">Towel Rack</a></li>
                    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_bath_accessories_soup_holder");
        echo "\">Soap Holder</a></li>
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_bath_accessories_mirror");
        echo "\">Mirror</a></li>
                </ul>
            </li>
            <li class=\"dropdown ";
        // line 37
        if ($this->getAttribute(($context["active"] ?? null), "kitchen-gully", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["active"] ?? $this->getContext($context, "active")), "kitchen-gully", array(), "array"), "html", null, true);
            echo " ";
        }
        echo "\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Kitchen Gully <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_kitchen_gully");
        echo "\">All</a></li>
                    <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_kitchen_gully_shower_channel");
        echo "\">Shower Channel </a></li>
                    <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_kitchen_gully_floor_drain");
        echo "\">Floor Drain </a></li>
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_kitchen_gully_kitchen_bench_drain");
        echo "\">Kitchen Bench Drain </a></li>
                </ul>
            </li>
            <li class=\"";
        // line 45
        if ($this->getAttribute(($context["active"] ?? null), "cart", array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["active"] ?? $this->getContext($context, "active")), "cart", array(), "array"), "html", null, true);
            echo "  ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\">Cart</a></li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
        </ul>
    </div>
</nav>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 45,  153 => 42,  149 => 41,  145 => 40,  141 => 39,  132 => 37,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  105 => 29,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  66 => 18,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  35 => 9,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <ul class=\"nav navbar-nav\" id=\"navbar\">
            <li class=\"\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\"><span class=\"glyphicon glyphicon-user\"></span> sanitary.lk</a>
                </div>
            </li>
            <li class=\"dropdown {% if active['ceramic'] is defined %} {{ active['ceramic'] }} {% endif %}\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Ceramic <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('products_ceramic') }}\">All</a></li>
                    <li><a href=\"{{ path('products_ceramic_wc') }}\">WC</a></li>
                    <li><a href=\"{{ path('products_ceramic_wash_basin') }}\">Wash Basin</a></li>
                    <li><a href=\"{{ path('products_ceramic_urinal') }}\">Urinal</a></li>
                    <li><a href=\"{{ path('products_ceramic_bath_tub') }}\">Bath Tub</a></li>
                </ul>
            </li>
            <li class=\"dropdown {% if active['plumbing-accessories'] is defined %} {{ active['plumbing-accessories'] }} {% endif %}\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Plumbing Accessories <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('products_plumbing_accessories') }}\">All</a></li>
                    <li><a href=\"{{ path('products_plumbing_accessories_flexible_hose') }}\">Flexible Hose</a></li>
                    <li><a href=\"{{ path('products_plumbing_accessories_angle_valve') }}\">Angle Valve</a></li>
                    <li><a href=\"{{ path('products_plumbing_accessories_bottle_tap') }}\">Bottle Tap</a></li>
                    <li><a href=\"{{ path('products_plumbing_accessories_pillar_tap') }}\">Pillar Tap</a></li>
                    <li><a href=\"{{ path('products_plumbing_accessories_bib_tap') }}\">Bib Tap</a></li>
                    <li><a href=\"{{ path('products_plumbing_accessories_two_way_tap') }}\">Two Way Tap</a></li>
                </ul>
            </li>
            <li class=\"dropdown {% if  active['bath-accessories'] is defined %} {{ active['bath-accessories'] }} {% endif %}\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Bath Accessories <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('products_bath_accessories') }}\">All</a></li>
                    <li><a href=\"{{ path('products_bath_accessories_towel_rack') }}\">Towel Rack</a></li>
                    <li><a href=\"{{ path('products_bath_accessories_soup_holder') }}\">Soap Holder</a></li>
                    <li><a href=\"{{ path('products_bath_accessories_mirror') }}\">Mirror</a></li>
                </ul>
            </li>
            <li class=\"dropdown {% if  active['kitchen-gully'] is defined %} {{ active['kitchen-gully'] }} {% endif %}\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Kitchen Gully <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('products_kitchen_gully') }}\">All</a></li>
                    <li><a href=\"{{ path('products_kitchen_gully_shower_channel') }}\">Shower Channel </a></li>
                    <li><a href=\"{{ path('products_kitchen_gully_floor_drain') }}\">Floor Drain </a></li>
                    <li><a href=\"{{ path('products_kitchen_gully_kitchen_bench_drain') }}\">Kitchen Bench Drain </a></li>
                </ul>
            </li>
            <li class=\"{% if active['cart'] is defined %} {{ active['cart'] }}  {% endif %}\"><a href=\"{{ path('cart') }}\">Cart</a></li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
        </ul>
    </div>
</nav>



", "components/navbar.html.twig", "/var/www/html/sanitary.lk/app/Resources/views/components/navbar.html.twig");
    }
}
