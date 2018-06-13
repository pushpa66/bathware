<?php

/* components/cart.html.twig */
class __TwigTemplate_72d806bceddbc4d59c55d63dbab30b8bc5b1a9bb306a81c1a74dc1fce8ac50a8 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/cart.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <table id=\"cart\" class=\"table table-hover table-condensed\">
        <thead>
            <tr>
                <th style=\"width:50%\">Product</th>
                <th style=\"width:10%\">Price</th>
                <th style=\"width:8%\">Quantity</th>
                <th style=\"width:22%\" class=\"text-center\">Subtotal</th>
                <th style=\"width:10%\"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-th=\"Product\">
                    <div class=\"row\">
                        <div class=\"col-sm-2 hidden-xs\"><img src=\"http://placehold.it/100x100\" alt=\"...\" class=\"img-responsive\"/></div>
                        <div class=\"col-sm-10\">
                            <h4 class=\"nomargin\">Product 1</h4>
                            <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </td>
                <td data-th=\"Price\">\$1.99</td>
                <td data-th=\"Quantity\">
                    <input type=\"number\" class=\"form-control text-center\" value=\"1\">
                </td>
                <td data-th=\"Subtotal\" class=\"text-center\">1.99</td>
                <td class=\"actions\" data-th=\"\">
                    <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i></button>
                </td>
            </tr>
            <tr>
                <td data-th=\"Product\">
                    <div class=\"row\">
                        <div class=\"col-sm-2 hidden-xs\"><img src=\"http://placehold.it/100x100\" alt=\"...\" class=\"img-responsive\"/></div>
                        <div class=\"col-sm-10\">
                            <h4 class=\"nomargin\">Product 2</h4>
                            <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </td>
                <td data-th=\"Price\">\$1.99</td>
                <td data-th=\"Quantity\">
                    <input type=\"number\" class=\"form-control text-center\" value=\"1\">
                </td>
                <td data-th=\"Subtotal\" class=\"text-center\">1.99</td>
                <td class=\"actions\" data-th=\"\">
                    <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i></button>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr class=\"visible-xs\">
                <td class=\"text-center\"><strong>Total 3.98</strong></td>
            </tr>
            <tr>
                <td><a href=\"#\" class=\"btn btn-warning\"><i class=\"fa fa-angle-left\"></i> Continue Shopping</a></td>
                <td colspan=\"2\" class=\"hidden-xs\"></td>
                <td class=\"hidden-xs text-center\"><strong>Total \$3.98</strong></td>
                <td><a href=\"#\" class=\"btn btn-success btn-block\">Checkout <i class=\"fa fa-angle-right\"></i></a></td>
            </tr>
        </tfoot>
    </table>
</div>
<style>
    .table>tbody>tr>td, .table>tfoot>tr>td{
        vertical-align: middle;
    }
    @media screen and (max-width: 600px) {
        table#cart tbody td .form-control{
            width:20%;
            display: inline !important;
        }
        .actions .btn{
            width:36%;
            margin:1.5em 0;
        }

        .actions .btn-info{
            float:left;
        }
        .actions .btn-danger{
            float:right;
        }

        table#cart thead { display: none; }
        table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
        table#cart tbody tr td:first-child { background: #333; color: #fff; }
        table#cart tbody td:before {
            content: attr(data-th); font-weight: bold;
            display: inline-block; width: 8rem;
        }

        table#cart tfoot td{display:block; }
        table#cart tfoot td .btn{display:block;}

    }
</style>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/cart.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
    <table id=\"cart\" class=\"table table-hover table-condensed\">
        <thead>
            <tr>
                <th style=\"width:50%\">Product</th>
                <th style=\"width:10%\">Price</th>
                <th style=\"width:8%\">Quantity</th>
                <th style=\"width:22%\" class=\"text-center\">Subtotal</th>
                <th style=\"width:10%\"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-th=\"Product\">
                    <div class=\"row\">
                        <div class=\"col-sm-2 hidden-xs\"><img src=\"http://placehold.it/100x100\" alt=\"...\" class=\"img-responsive\"/></div>
                        <div class=\"col-sm-10\">
                            <h4 class=\"nomargin\">Product 1</h4>
                            <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </td>
                <td data-th=\"Price\">\$1.99</td>
                <td data-th=\"Quantity\">
                    <input type=\"number\" class=\"form-control text-center\" value=\"1\">
                </td>
                <td data-th=\"Subtotal\" class=\"text-center\">1.99</td>
                <td class=\"actions\" data-th=\"\">
                    <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i></button>
                </td>
            </tr>
            <tr>
                <td data-th=\"Product\">
                    <div class=\"row\">
                        <div class=\"col-sm-2 hidden-xs\"><img src=\"http://placehold.it/100x100\" alt=\"...\" class=\"img-responsive\"/></div>
                        <div class=\"col-sm-10\">
                            <h4 class=\"nomargin\">Product 2</h4>
                            <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </td>
                <td data-th=\"Price\">\$1.99</td>
                <td data-th=\"Quantity\">
                    <input type=\"number\" class=\"form-control text-center\" value=\"1\">
                </td>
                <td data-th=\"Subtotal\" class=\"text-center\">1.99</td>
                <td class=\"actions\" data-th=\"\">
                    <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i></button>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr class=\"visible-xs\">
                <td class=\"text-center\"><strong>Total 3.98</strong></td>
            </tr>
            <tr>
                <td><a href=\"#\" class=\"btn btn-warning\"><i class=\"fa fa-angle-left\"></i> Continue Shopping</a></td>
                <td colspan=\"2\" class=\"hidden-xs\"></td>
                <td class=\"hidden-xs text-center\"><strong>Total \$3.98</strong></td>
                <td><a href=\"#\" class=\"btn btn-success btn-block\">Checkout <i class=\"fa fa-angle-right\"></i></a></td>
            </tr>
        </tfoot>
    </table>
</div>
<style>
    .table>tbody>tr>td, .table>tfoot>tr>td{
        vertical-align: middle;
    }
    @media screen and (max-width: 600px) {
        table#cart tbody td .form-control{
            width:20%;
            display: inline !important;
        }
        .actions .btn{
            width:36%;
            margin:1.5em 0;
        }

        .actions .btn-info{
            float:left;
        }
        .actions .btn-danger{
            float:right;
        }

        table#cart thead { display: none; }
        table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
        table#cart tbody tr td:first-child { background: #333; color: #fff; }
        table#cart tbody td:before {
            content: attr(data-th); font-weight: bold;
            display: inline-block; width: 8rem;
        }

        table#cart tfoot td{display:block; }
        table#cart tfoot td .btn{display:block;}

    }
</style>", "components/cart.html.twig", "/var/www/html/bathWare/app/Resources/views/components/cart.html.twig");
    }
}
