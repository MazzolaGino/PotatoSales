<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* product/list.html.twig */
class __TwigTemplate_b7d6500063a4597a749579c54739d6e9f91c562f3b710b4c22dea7c18775f635 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Product Management";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $context["subHeaders"] = [];
        // line 6
        echo "    ";
        $context["username"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "session", [], "any", false, false, false, 6), "get", [0 => "username"], "method", false, false, false, 6);
        // line 7
        echo "    

    <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
      <h5 class=\"my-0 mr-md-auto font-weight-normal\">Potato Sales</h5>
      <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark active\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_new");
        echo "\">New Product</a>
        <a class=\"p-2 text-dark\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_list");
        echo "\">Sales</a>
      </nav>
      <b>Welcome ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</b> &nbsp;&nbsp; <a class=\"btn btn-outline-primary\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">Logout ?</a>
    </div>
    
    

    <div class=\"container\">
        <h1>Product List</h1>
        <table class=\"table table-hover table-dark\">
            <col>
            <colgroup span=\"4\"></colgroup>
            <tr>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 27
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["column"], "subHeaders", [], "array", true, true, false, 27)) {
                // line 28
                echo "                    <th colspan=\"4\" scope=\"colgroup\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "header", [], "array", false, false, false, 28), "html", null, true);
                echo "</th>
                    ";
                // line 29
                $context["subHeaders"] = twig_get_attribute($this->env, $this->source, $context["column"], "subHeaders", [], "array", false, false, false, 29);
                // line 30
                echo "                ";
            } else {
                // line 31
                echo "                    <th><a href='/product-list/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "field", [], "array", false, false, false, 31), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_sorting"]) || array_key_exists("column_sorting", $context) ? $context["column_sorting"] : (function () { throw new RuntimeError('Variable "column_sorting" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["column"], "field", [], "array", false, false, false, 31), [], "array", false, false, false, 31), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "header", [], "array", false, false, false, 31), "html", null, true);
                echo "</a></th>
                ";
            }
            // line 33
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </tr>
            <tr>
                <th></th>
                <th></th>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subHeaders"]) || array_key_exists("subHeaders", $context) ? $context["subHeaders"] : (function () { throw new RuntimeError('Variable "subHeaders" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sh"]) {
            // line 39
            echo "                    <th scope=\"col\"><a href='/product-list/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sh"], "field", [], "array", false, false, false, 39), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_sorting"]) || array_key_exists("column_sorting", $context) ? $context["column_sorting"] : (function () { throw new RuntimeError('Variable "column_sorting" does not exist.', 39, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["sh"], "field", [], "array", false, false, false, 39), [], "array", false, false, false, 39), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sh"], "header", [], "array", false, false, false, 39), "html", null, true);
            echo "</a></th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sh'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                <th></th>
            </tr>
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "                <tr>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productID", [], "array", false, false, false, 45), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productName", [], "array", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "salesQ1", [], "array", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "salesQ2", [], "array", false, false, false, 48), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "salesQ3", [], "array", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "salesQ4", [], "array", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "Total", [], "array", false, false, false, 51), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 54,  217 => 51,  213 => 50,  209 => 49,  205 => 48,  201 => 47,  197 => 46,  193 => 45,  190 => 44,  186 => 43,  182 => 41,  169 => 39,  165 => 38,  159 => 34,  153 => 33,  143 => 31,  140 => 30,  138 => 29,  133 => 28,  130 => 27,  126 => 26,  110 => 15,  105 => 13,  101 => 12,  94 => 7,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product Management{% endblock %}
{% block body %}
    {% set subHeaders = []%}
    {% set username = app.session.get('username') %}
    

    <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
      <h5 class=\"my-0 mr-md-auto font-weight-normal\">Potato Sales</h5>
      <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark active\" href=\"{{path('product_new')}}\">New Product</a>
        <a class=\"p-2 text-dark\" href=\"{{path('product_list')}}\">Sales</a>
      </nav>
      <b>Welcome {{ username }}</b> &nbsp;&nbsp; <a class=\"btn btn-outline-primary\" href=\"{{ path('logout')}}\">Logout ?</a>
    </div>
    
    

    <div class=\"container\">
        <h1>Product List</h1>
        <table class=\"table table-hover table-dark\">
            <col>
            <colgroup span=\"4\"></colgroup>
            <tr>
                {% for column in columns %}
                    {% if column['subHeaders'] is defined %}
                    <th colspan=\"4\" scope=\"colgroup\">{{column['header']}}</th>
                    {% set subHeaders = column['subHeaders'] %}
                {% else %}
                    <th><a href='/product-list/{{column['field']}}/{{column_sorting[column['field']]}}'>{{ column['header'] }}</a></th>
                {% endif %}
            {% endfor %}
            </tr>
            <tr>
                <th></th>
                <th></th>
                {% for sh in subHeaders %}
                    <th scope=\"col\"><a href='/product-list/{{sh['field']}}/{{column_sorting[sh['field']]}}'>{{ sh['header'] }}</a></th>
                {% endfor %}
                <th></th>
            </tr>
            {% for product in products %}
                <tr>
                    <td>{{product['productID']}}</td>
                    <td>{{product['productName']}}</td>
                    <td>{{product['salesQ1']}}</td>
                    <td>{{product['salesQ2']}}</td>
                    <td>{{product['salesQ3']}}</td>
                    <td>{{product['salesQ4']}}</td>
                    <td>{{product['Total']}}</td>
                </tr>
            {% endfor %}
        </table>
    </div>
{% endblock %}
", "product/list.html.twig", "C:\\Users\\Mazzola\\Documents\\GitHub\\PotatoSales\\patato_sales\\templates\\product\\list.html.twig");
    }
}
