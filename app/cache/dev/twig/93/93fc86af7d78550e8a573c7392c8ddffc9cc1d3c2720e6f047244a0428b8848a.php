<?php

/* pages/tabView.html.twig */
class __TwigTemplate_4ec8cf95a101a35c368d9695a31fedc7e60c1d9e00272e8f2d867e5c9f316c47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/tabView.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascriptsHead' => array($this, 'block_javascriptsHead'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/tabView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("pages/tabView.html.twig", "pages/tabView.html.twig", 5, "1208642228")->display($context);
        // line 8
        echo "    <div class=\"container\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? $this->getContext($context, "tabs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 11
            echo "                <li class=\"tablinks\" id=\"tablinks-";
            echo twig_escape_filter($this->env, $context["tab"], "html", null, true);
            echo "\"><a onclick=\"loadItems(event, '";
            echo twig_escape_filter($this->env, $context["tab"], "html", null, true);
            echo "')\" href=\"#\">";
            echo twig_escape_filter($this->env, $context["tab"], "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>
    </div>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabsData"] ?? $this->getContext($context, "tabsData")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["tabData"]) {
            // line 17
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"tabcontent\">
            ";
            // line 18
            $this->loadTemplate("pages/tabView.html.twig", "pages/tabView.html.twig", 18, "1785940762")->display($context);
            // line 20
            echo "        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tabData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <script>
        \$(document).ready(function() {
            loadItemsInitial('";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tabs"] ?? $this->getContext($context, "tabs")), 0, array(), "array"), "html", null, true);
        echo "');
        });

        function loadItemsInitial(divID) {
            var tab;
            document.getElementById(divID).style.display = \"block\";
            tab = document.getElementById(\"tablinks-\"+divID);
            tab.className += \" active\";

        }

        function loadItems(evt, divID) {
            var i, tabcontent, tablinks, tab;
            tabcontent = document.getElementsByClassName(\"tabcontent\");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = \"none\";
            }
            tablinks = document.getElementsByClassName(\"tablinks\");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
            }
            document.getElementById(divID).style.display = \"block\";
            tab = document.getElementById(\"tablinks-\"+divID);
            tab.className += \" active\";
        }
    </script>

    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 14px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 94
        echo "    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link rel=\"stylesheet\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/products.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 98
    public function block_javascriptsHead($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsHead"));

        // line 99
        echo "    <script src=\"https://code.jquery.com/jquery-1.11.1.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/tabView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 103,  224 => 102,  216 => 99,  210 => 98,  201 => 95,  198 => 94,  192 => 93,  118 => 25,  113 => 22,  98 => 20,  96 => 18,  91 => 17,  74 => 16,  69 => 13,  56 => 11,  52 => 10,  48 => 8,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
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

{% block body %}

    {% embed \"components/navbar.html.twig\" %}

    {% endembed %}
    <div class=\"container\">
        <ul class=\"nav nav-tabs\">
            {% for tab in tabs %}
                <li class=\"tablinks\" id=\"tablinks-{{ tab }}\"><a onclick=\"loadItems(event, '{{ tab }}')\" href=\"#\">{{ tab }}</a></li>
            {% endfor %}
        </ul>
    </div>

    {% for key, tabData in tabsData %}
        <div id=\"{{ key }}\" class=\"tabcontent\">
            {% embed \"components/products.html.twig\" %}
            {% endembed %}
        </div>
    {% endfor %}

    <script>
        \$(document).ready(function() {
            loadItemsInitial('{{ tabs[0] }}');
        });

        function loadItemsInitial(divID) {
            var tab;
            document.getElementById(divID).style.display = \"block\";
            tab = document.getElementById(\"tablinks-\"+divID);
            tab.className += \" active\";

        }

        function loadItems(evt, divID) {
            var i, tabcontent, tablinks, tab;
            tabcontent = document.getElementsByClassName(\"tabcontent\");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = \"none\";
            }
            tablinks = document.getElementsByClassName(\"tablinks\");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
            }
            document.getElementById(divID).style.display = \"block\";
            tab = document.getElementById(\"tablinks-\"+divID);
            tab.className += \" active\";
        }
    </script>

    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 14px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>

{% endblock %}

{% block stylesheets %}
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/products.css') }}\">
{% endblock %}

{% block javascriptsHead %}
    <script src=\"https://code.jquery.com/jquery-1.11.1.min.js\"></script>
{% endblock %}

{% block javascripts %}
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
{% endblock %}", "pages/tabView.html.twig", "/var/www/html/sanitary.lk/app/Resources/views/pages/tabView.html.twig");
    }
}


/* pages/tabView.html.twig */
class __TwigTemplate_4ec8cf95a101a35c368d9695a31fedc7e60c1d9e00272e8f2d867e5c9f316c47_1208642228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("components/navbar.html.twig", "pages/tabView.html.twig", 5);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/tabView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/tabView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 5,  230 => 103,  224 => 102,  216 => 99,  210 => 98,  201 => 95,  198 => 94,  192 => 93,  118 => 25,  113 => 22,  98 => 20,  96 => 18,  91 => 17,  74 => 16,  69 => 13,  56 => 11,  52 => 10,  48 => 8,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
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

{% block body %}

    {% embed \"components/navbar.html.twig\" %}

    {% endembed %}
    <div class=\"container\">
        <ul class=\"nav nav-tabs\">
            {% for tab in tabs %}
                <li class=\"tablinks\" id=\"tablinks-{{ tab }}\"><a onclick=\"loadItems(event, '{{ tab }}')\" href=\"#\">{{ tab }}</a></li>
            {% endfor %}
        </ul>
    </div>

    {% for key, tabData in tabsData %}
        <div id=\"{{ key }}\" class=\"tabcontent\">
            {% embed \"components/products.html.twig\" %}
            {% endembed %}
        </div>
    {% endfor %}

    <script>
        \$(document).ready(function() {
            loadItemsInitial('{{ tabs[0] }}');
        });

        function loadItemsInitial(divID) {
            var tab;
            document.getElementById(divID).style.display = \"block\";
            tab = document.getElementById(\"tablinks-\"+divID);
            tab.className += \" active\";

        }

        function loadItems(evt, divID) {
            var i, tabcontent, tablinks, tab;
            tabcontent = document.getElementsByClassName(\"tabcontent\");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = \"none\";
            }
            tablinks = document.getElementsByClassName(\"tablinks\");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
            }
            document.getElementById(divID).style.display = \"block\";
            tab = document.getElementById(\"tablinks-\"+divID);
            tab.className += \" active\";
        }
    </script>

    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 14px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>

{% endblock %}

{% block stylesheets %}
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/products.css') }}\">
{% endblock %}

{% block javascriptsHead %}
    <script src=\"https://code.jquery.com/jquery-1.11.1.min.js\"></script>
{% endblock %}

{% block javascripts %}
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
{% endblock %}", "pages/tabView.html.twig", "/var/www/html/sanitary.lk/app/Resources/views/pages/tabView.html.twig");
    }
}


/* pages/tabView.html.twig */
class __TwigTemplate_4ec8cf95a101a35c368d9695a31fedc7e60c1d9e00272e8f2d867e5c9f316c47_1785940762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("components/products.html.twig", "pages/tabView.html.twig", 18);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "components/products.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/tabView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/tabView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 18,  378 => 5,  230 => 103,  224 => 102,  216 => 99,  210 => 98,  201 => 95,  198 => 94,  192 => 93,  118 => 25,  113 => 22,  98 => 20,  96 => 18,  91 => 17,  74 => 16,  69 => 13,  56 => 11,  52 => 10,  48 => 8,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
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

{% block body %}

    {% embed \"components/navbar.html.twig\" %}

    {% endembed %}
    <div class=\"container\">
        <ul class=\"nav nav-tabs\">
            {% for tab in tabs %}
                <li class=\"tablinks\" id=\"tablinks-{{ tab }}\"><a onclick=\"loadItems(event, '{{ tab }}')\" href=\"#\">{{ tab }}</a></li>
            {% endfor %}
        </ul>
    </div>

    {% for key, tabData in tabsData %}
        <div id=\"{{ key }}\" class=\"tabcontent\">
            {% embed \"components/products.html.twig\" %}
            {% endembed %}
        </div>
    {% endfor %}

    <script>
        \$(document).ready(function() {
            loadItemsInitial('{{ tabs[0] }}');
        });

        function loadItemsInitial(divID) {
            var tab;
            document.getElementById(divID).style.display = \"block\";
            tab = document.getElementById(\"tablinks-\"+divID);
            tab.className += \" active\";

        }

        function loadItems(evt, divID) {
            var i, tabcontent, tablinks, tab;
            tabcontent = document.getElementsByClassName(\"tabcontent\");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = \"none\";
            }
            tablinks = document.getElementsByClassName(\"tablinks\");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
            }
            document.getElementById(divID).style.display = \"block\";
            tab = document.getElementById(\"tablinks-\"+divID);
            tab.className += \" active\";
        }
    </script>

    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 14px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>

{% endblock %}

{% block stylesheets %}
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/products.css') }}\">
{% endblock %}

{% block javascriptsHead %}
    <script src=\"https://code.jquery.com/jquery-1.11.1.min.js\"></script>
{% endblock %}

{% block javascripts %}
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
{% endblock %}", "pages/tabView.html.twig", "/var/www/html/sanitary.lk/app/Resources/views/pages/tabView.html.twig");
    }
}
