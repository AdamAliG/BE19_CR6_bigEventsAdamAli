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

/* homepage.html.twig */
class __TwigTemplate_e54feaf99bd860c9b65ec99238524deb38cd18486a5698dae31ebe6b0bad3568 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Event Tracker";
        
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
        echo "
<header>
    
</header>


";
        // line 13
        $this->loadTemplate("navbar.html.twig", "homepage.html.twig", 13)->display($context);
        // line 14
        echo "<div id=\"carouselExample\" class=\"carousel slide\">
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <img src=\"https://img.freepik.com/premium-vector/music-festival-poster-with-musical-instruments-opened-black-piano-design-promotion-invitation-concert-banner-classical-music-template-design-flyer-creative-style-vector-illustration_345238-589.jpg?w=2000\" class=\"d-block w-100\" alt=\"...\">
      </div>
   
      <div class=\"carousel-item\">
        <img src=\"https://www.towertheatre.org/CC%20Holiday%20magic%201280%20x%20480.jpg\" class=\"d-block w-100\" alt=\"...\">
      </div>
    </div>
    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Previous</span>
    </button>
    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Next</span>
    </button>
  </div>
  <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
        echo "\" class=\"btn btn-light m-3\">Create New Event</a>
<section class=\"event-listings\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eventItem"]) {
            // line 38
            echo "   
    <div class=\"card mt-5 p-3 border border-3 border-warning rounded-4 border-opacity-25 text-light m-2\" style=\"width: 18rem;\">
        <img class=\" rounded-top-4\"src=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventItem"], "getImageLink", [], "any", false, false, false, 40), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventItem"], "getName", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
        <div class=\"card-body\">
          <h5 class=\"card-title text-light\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventItem"], "getName", [], "any", false, false, false, 42), "html", null, true);
            echo "</h5>
          <p class=\"card-text text-light\">Date: ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventItem"], "getDate", [], "any", false, false, false, 43), "format", ["d-m-Y"], "method", false, false, false, 43), "html", null, true);
            echo " ";
            ((twig_get_attribute($this->env, $this->source, $context["eventItem"], "getStartTime", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventItem"], "getStartTime", [], "any", false, false, false, 43), "format", ["H:i"], "method", false, false, false, 43), "html", null, true))) : (print ("")));
            echo "</p>
        </div>
        <ul class=\"list-group list-group-flush\">
          <li class=\"list-group-item text-light\">Description: ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventItem"], "getDescription", [], "any", false, false, false, 46), "html", null, true);
            echo "</li>
          <li class=\"list-group-item text-light\">Email: ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventItem"], "getContactEmail", [], "any", false, false, false, 47), "html", null, true);
            echo "</li>
          <li class=\"list-group-item text-light\">Phone: ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventItem"], "getContactPhone", [], "any", false, false, false, 48), "html", null, true);
            echo "</li>
          <li class=\"list-group-item text-light\">type: ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventItem"], "eventType", [], "any", false, false, false, 49), "html", null, true);
            echo "</li>
          
        </ul>
        <div class=\"card-body  rounded-bottom-4 d-flex justify-content-center align-items-center \">
            <div>
            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["eventItem"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"btn btn-warning m-2\">Edit</a>
            </div>
            <div>
            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["eventItem"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"btn btn-light m-2\">Details</a>
            </div>

            <div>
            <form method=\"post\" action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["eventItem"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["eventItem"], "id", [], "any", false, false, false, 62))), "html", null, true);
            echo "\">
                <button class=\"btn btn-dark align-self-center m-2\">Delete</button>
            </form>
            </div>
        </div>
      </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</div>
</div>
</section>

<footer>
    
</footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 69,  190 => 62,  186 => 61,  179 => 57,  173 => 54,  165 => 49,  161 => 48,  157 => 47,  153 => 46,  145 => 43,  141 => 42,  134 => 40,  130 => 38,  126 => 37,  119 => 33,  98 => 14,  96 => 13,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Event Tracker{% endblock %}

{% block body %}

<header>
    
</header>


{% include 'navbar.html.twig' %}
<div id=\"carouselExample\" class=\"carousel slide\">
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <img src=\"https://img.freepik.com/premium-vector/music-festival-poster-with-musical-instruments-opened-black-piano-design-promotion-invitation-concert-banner-classical-music-template-design-flyer-creative-style-vector-illustration_345238-589.jpg?w=2000\" class=\"d-block w-100\" alt=\"...\">
      </div>
   
      <div class=\"carousel-item\">
        <img src=\"https://www.towertheatre.org/CC%20Holiday%20magic%201280%20x%20480.jpg\" class=\"d-block w-100\" alt=\"...\">
      </div>
    </div>
    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Previous</span>
    </button>
    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Next</span>
    </button>
  </div>
  <a href=\"{{ path('app_event_new') }}\" class=\"btn btn-light m-3\">Create New Event</a>
<section class=\"event-listings\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
    {% for eventItem in events %}
   
    <div class=\"card mt-5 p-3 border border-3 border-warning rounded-4 border-opacity-25 text-light m-2\" style=\"width: 18rem;\">
        <img class=\" rounded-top-4\"src=\"{{ eventItem.getImageLink }}\" alt=\"{{ eventItem.getName }}\">
        <div class=\"card-body\">
          <h5 class=\"card-title text-light\">{{ eventItem.getName }}</h5>
          <p class=\"card-text text-light\">Date: {{ eventItem.getDate.format('d-m-Y') }} {{ eventItem.getStartTime ? eventItem.getStartTime.format('H:i') : '' }}</p>
        </div>
        <ul class=\"list-group list-group-flush\">
          <li class=\"list-group-item text-light\">Description: {{ eventItem.getDescription }}</li>
          <li class=\"list-group-item text-light\">Email: {{ eventItem.getContactEmail }}</li>
          <li class=\"list-group-item text-light\">Phone: {{ eventItem.getContactPhone }}</li>
          <li class=\"list-group-item text-light\">type: {{ eventItem.eventType }}</li>
          
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
{% endfor %}
</div>
</div>
</section>

<footer>
    
</footer>

{% endblock %}
", "homepage.html.twig", "C:\\Users\\elect\\OneDrive\\Desktop\\BE19_CR6_bigEventsAdamAli\\templates\\homepage.html.twig");
    }
}
