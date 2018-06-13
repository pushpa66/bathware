<?php

/* components/navbar.html.twig */
class __TwigTemplate_157b263e4dc62e6c7ddb2e5c79bf10e3df05eb0ebc05c6b399cc243796512288 extends Twig_Template
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
        <ul class=\"nav navbar-nav\">
            <li class=\"active\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> sanitary.lk</a>
                </div>
            </li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("items");
        echo "\">Category 1</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("items");
        echo "\">Category 2</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\">Cart</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products");
        echo "\">Products</a></li>
            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Category 3 <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Category 3-1</a></li>
                    <li><a href=\"#\">Category 3-2</a></li>
                    <li><a href=\"#\">Category 3-3</a></li>
                </ul>
            </li>
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
        return array (  47 => 12,  43 => 11,  39 => 10,  35 => 9,  29 => 6,  22 => 1,);
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
        <ul class=\"nav navbar-nav\">
            <li class=\"active\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\"><span class=\"glyphicon glyphicon-user\"></span> sanitary.lk</a>
                </div>
            </li>
            <li><a href=\"{{ path('items') }}\">Category 1</a></li>
            <li><a href=\"{{ path('items') }}\">Category 2</a></li>
            <li><a href=\"{{ path('cart') }}\">Cart</a></li>
            <li><a href=\"{{ path('products') }}\">Products</a></li>
            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Category 3 <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Category 3-1</a></li>
                    <li><a href=\"#\">Category 3-2</a></li>
                    <li><a href=\"#\">Category 3-3</a></li>
                </ul>
            </li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
        </ul>
    </div>
</nav>



", "components/navbar.html.twig", "/var/www/html/bathWare/app/Resources/views/components/navbar.html.twig");
    }
}
