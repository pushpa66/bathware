<?php

/* pages/itemsPage.html.twig */
class __TwigTemplate_58097698343f6934ecf2a402d1c1bca8eedd4f945e1847459c70e4e8b5fac084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/itemsPage.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/itemsPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/items2.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    ";
        // line 10
        $this->loadTemplate("pages/itemsPage.html.twig", "pages/itemsPage.html.twig", 10, "1130231393")->display($context);
        // line 13
        echo "    ";
        $this->loadTemplate("pages/itemsPage.html.twig", "pages/itemsPage.html.twig", 13, "1507832189")->display($context);
        // line 16
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "    <script src=\"https://code.jquery.com/jquery-1.11.1.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/itemsPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  76 => 19,  68 => 16,  65 => 13,  63 => 10,  60 => 9,  54 => 8,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/items2.css') }}\">
{% endblock %}

{% block body %}

    {% embed \"components/navbar.html.twig\" %}

    {% endembed %}
    {% embed \"components/items.html.twig\" %}

    {% endembed %}

{% endblock %}

{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-1.11.1.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
{% endblock %}", "pages/itemsPage.html.twig", "/var/www/html/bathWare/app/Resources/views/pages/itemsPage.html.twig");
    }
}


/* pages/itemsPage.html.twig */
class __TwigTemplate_58097698343f6934ecf2a402d1c1bca8eedd4f945e1847459c70e4e8b5fac084_1130231393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("components/navbar.html.twig", "pages/itemsPage.html.twig", 10);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "components/navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/itemsPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/itemsPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 10,  82 => 20,  76 => 19,  68 => 16,  65 => 13,  63 => 10,  60 => 9,  54 => 8,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/items2.css') }}\">
{% endblock %}

{% block body %}

    {% embed \"components/navbar.html.twig\" %}

    {% endembed %}
    {% embed \"components/items.html.twig\" %}

    {% endembed %}

{% endblock %}

{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-1.11.1.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
{% endblock %}", "pages/itemsPage.html.twig", "/var/www/html/bathWare/app/Resources/views/pages/itemsPage.html.twig");
    }
}


/* pages/itemsPage.html.twig */
class __TwigTemplate_58097698343f6934ecf2a402d1c1bca8eedd4f945e1847459c70e4e8b5fac084_1507832189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("components/items.html.twig", "pages/itemsPage.html.twig", 13);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "components/items.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/itemsPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/itemsPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 13,  149 => 10,  82 => 20,  76 => 19,  68 => 16,  65 => 13,  63 => 10,  60 => 9,  54 => 8,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/items2.css') }}\">
{% endblock %}

{% block body %}

    {% embed \"components/navbar.html.twig\" %}

    {% endembed %}
    {% embed \"components/items.html.twig\" %}

    {% endembed %}

{% endblock %}

{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-1.11.1.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
{% endblock %}", "pages/itemsPage.html.twig", "/var/www/html/bathWare/app/Resources/views/pages/itemsPage.html.twig");
    }
}
