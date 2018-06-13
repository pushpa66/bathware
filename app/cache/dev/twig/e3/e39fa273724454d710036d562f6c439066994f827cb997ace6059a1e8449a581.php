<?php

/* components/carousel.html.twig */
class __TwigTemplate_66a42e29fda4f0e224286867758a0721789a688c1767cc16b72458ebd0cb72c2 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/carousel.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/image1.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" style=\"width:100%;\">
                <div class=\"carousel-caption\">
                    <h3>Image Title</h3>
                    <p>Description</p>
                </div>
            </div>

            <div class=\"item\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/image2.jpg"), "html", null, true);
        echo "\" alt=\"Chicago\" style=\"width:100%;\">
                <div class=\"carousel-caption\">
                    <h3>Image Title</h3>
                    <p>Description</p>
                </div>
            </div>

            <div class=\"item\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/image3.jpg"), "html", null, true);
        echo "\" alt=\"New york\" style=\"width:100%;\">
                <div class=\"carousel-caption\">
                    <h3>Image Title</h3>
                    <p>Description</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 29,  47 => 21,  36 => 13,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"{{ asset('images/image1.jpg')}}\" alt=\"Los Angeles\" style=\"width:100%;\">
                <div class=\"carousel-caption\">
                    <h3>Image Title</h3>
                    <p>Description</p>
                </div>
            </div>

            <div class=\"item\">
                <img src=\"{{ asset('images/image2.jpg') }}\" alt=\"Chicago\" style=\"width:100%;\">
                <div class=\"carousel-caption\">
                    <h3>Image Title</h3>
                    <p>Description</p>
                </div>
            </div>

            <div class=\"item\">
                <img src=\"{{ asset('images/image3.jpg') }}\" alt=\"New york\" style=\"width:100%;\">
                <div class=\"carousel-caption\">
                    <h3>Image Title</h3>
                    <p>Description</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>

", "components/carousel.html.twig", "/var/www/html/bathWare/app/Resources/views/components/carousel.html.twig");
    }
}
