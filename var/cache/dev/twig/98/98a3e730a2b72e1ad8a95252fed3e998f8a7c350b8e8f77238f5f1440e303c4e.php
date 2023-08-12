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

/* event/show.html.twig */
class __TwigTemplate_a95477e4076d514de8e5ad56776c858546405f1dec81a034e84918d15dc2c541 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/show.html.twig", 1);
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

        echo "Event";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        $this->loadTemplate("navbar.html.twig", "event/show.html.twig", 7)->display($context);
        // line 8
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
        echo "\" class=\" m-3 btn btn-light mt-3\">Create New Event</a>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"card mt-5 p-3 border border-3 border-warning rounded-4 border-opacity-25 text-light\" style=\"width: 18rem;\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 12, $this->source); })()), "getImageLink", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 12, $this->source); })()), "getName", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
            <div class=\"card-body\">
              <h5 class=\"card-title text-light\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 14, $this->source); })()), "getName", [], "any", false, false, false, 14), "html", null, true);
        echo "</h5>
              <p class=\"card-text text-light\">Date: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 15, $this->source); })()), "getDate", [], "any", false, false, false, 15), "format", ["d-m-Y"], "method", false, false, false, 15), "html", null, true);
        echo " ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 15, $this->source); })()), "getStartTime", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 15, $this->source); })()), "getStartTime", [], "any", false, false, false, 15), "format", ["H:i"], "method", false, false, false, 15), "html", null, true))) : (print ("")));
        echo "</p>
            </div>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item text-light\">Description: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 18, $this->source); })()), "getDescription", [], "any", false, false, false, 18), "html", null, true);
        echo "</li>
              <li class=\"list-group-item text-light\">Capacity: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 19, $this->source); })()), "getCapacity", [], "any", false, false, false, 19), "html", null, true);
        echo "</li>
              <li class=\"list-group-item text-light\">Email: ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 20, $this->source); })()), "getContactEmail", [], "any", false, false, false, 20), "html", null, true);
        echo "</li>
              <li class=\"list-group-item text-light\">Phone: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 21, $this->source); })()), "getContactPhone", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
              <li class=\"list-group-item text-light\">Address: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 22, $this->source); })()), "getAddress", [], "any", false, false, false, 22), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 22, $this->source); })()), "getCityName", [], "any", false, false, false, 22), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 22, $this->source); })()), "getZipCode", [], "any", false, false, false, 22), "html", null, true);
        echo "</li>
              <li class=\"list-group-item text-light\">Event URL: <a class=\"text-light\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 23, $this->source); })()), "getEventUrl", [], "any", false, false, false, 23), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 23, $this->source); })()), "getEventUrl", [], "any", false, false, false, 23), "html", null, true);
        echo "</a></li>
              <li class=\"list-group-item text-light\">Type: ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 24, $this->source); })()), "getEventType", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
              
            </ul>
            <div class=\"card-body  rounded-bottom-4 d-flex justify-content-center align-items-center \">
              <div>
              <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\" class=\"btn btn-warning m-2\">Edit</a>
              </div>
              <div>
              <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\" class=\"btn btn-light m-2\">Details</a>
              </div>
  
              <div>
              <form method=\"post\" action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["eventItem"]) || array_key_exists("eventItem", $context) ? $context["eventItem"] : (function () { throw new RuntimeError('Variable "eventItem" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37))), "html", null, true);
        echo "\">
                  <button class=\"btn btn-dark align-self-center m-2\">Delete</button>
              </form>
              </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 37,  168 => 36,  161 => 32,  155 => 29,  147 => 24,  141 => 23,  133 => 22,  129 => 21,  125 => 20,  121 => 19,  117 => 18,  109 => 15,  105 => 14,  98 => 12,  90 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event{% endblock %}


{% block body %}
{% include 'navbar.html.twig' %}
<a href=\"{{ path('app_event_new') }}\" class=\" m-3 btn btn-light mt-3\">Create New Event</a>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"card mt-5 p-3 border border-3 border-warning rounded-4 border-opacity-25 text-light\" style=\"width: 18rem;\">
            <img src=\"{{ eventItem.getImageLink }}\" alt=\"{{ eventItem.getName }}\">
            <div class=\"card-body\">
              <h5 class=\"card-title text-light\">{{ eventItem.getName }}</h5>
              <p class=\"card-text text-light\">Date: {{ eventItem.getDate.format('d-m-Y') }} {{ eventItem.getStartTime ? eventItem.getStartTime.format('H:i') : '' }}</p>
            </div>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item text-light\">Description: {{ eventItem.getDescription }}</li>
              <li class=\"list-group-item text-light\">Capacity: {{ eventItem.getCapacity }}</li>
              <li class=\"list-group-item text-light\">Email: {{ eventItem.getContactEmail }}</li>
              <li class=\"list-group-item text-light\">Phone: {{ eventItem.getContactPhone }}</li>
              <li class=\"list-group-item text-light\">Address: {{ eventItem.getAddress }}, {{ eventItem.getCityName }}, {{ eventItem.getZipCode }}</li>
              <li class=\"list-group-item text-light\">Event URL: <a class=\"text-light\" href=\"{{ eventItem.getEventUrl }}\">{{ eventItem.getEventUrl }}</a></li>
              <li class=\"list-group-item text-light\">Type: {{ eventItem.getEventType }}</li>
              
            </ul>
            <div class=\"card-body  rounded-bottom-4 d-flex justify-content-center align-items-center \">
              <div>
              <a href=\"{{ path('app_event_edit', {'id': eventItem.id}) }}\" class=\"btn btn-warning m-2\">Edit</a>
              </div>
              <div>
              <a href=\"{{ path('app_event_show', {'id': eventItem.id}) }}\" class=\"btn btn-light m-2\">Details</a>
              </div>
  
              <div>
              <form method=\"post\" action=\"{{ path('app_event_delete', {'id': eventItem.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ eventItem.id) }}\">
                  <button class=\"btn btn-dark align-self-center m-2\">Delete</button>
              </form>
              </div>
    </div>
</div>
{% endblock %}
", "event/show.html.twig", "C:\\Users\\elect\\OneDrive\\Desktop\\BE19_CR6_bigEventsAdamAli\\templates\\event\\show.html.twig");
    }
}
