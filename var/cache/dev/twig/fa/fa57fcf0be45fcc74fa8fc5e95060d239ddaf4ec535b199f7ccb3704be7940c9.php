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

/* navbar.html.twig */
class __TwigTemplate_10dcbc7282d35de7e308979ac80d34f88ff5867cb56f960e1109feb8372d8e49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "

<nav class=\"navbar navbar-expand-lg bg-body-tertiary bg-dark\">
  <div class=\"container-fluid \">
    <a class=\"navbar-brand text-light\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        echo "\">
      <img src=\"https://www.rivieragroupon.com/img/logo01.png\" alt=\"logo\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item m-2\">
          <a class=\"nav-link text-light active\" aria-current=\"page\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        echo "\">Home</a>
        </li>
        <li class=\"nav-item m-2\">
          <a class=\"nav-link text-light\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
        echo "\">Create New Event</a>
        </li>
        <form action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        echo "\" method=\"get\">
          <select class=\"bg-dark text-light p-2 me-2 border-3 border-warning-subtle rounded-2\"name=\"type\">
              <option value=\"\">All Events</option>
              <option value=\"music\">music</option>
              <option value=\"sport\">sport</option>
              <option value=\"movie\">movie</option>
              <option value=\"theater\">theater</option>
            
          </select>
          <input class=\"bg-dark text-light p-2 border-3 border-warning-subtle rounded-2 \" type=\"submit\" value=\"Filter\">
      </form>
      
      </ul>
      <section class=\"search-bar\">
          <form action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        echo "\" method=\"get\">
              <input class=\"border-3 border-warning rounded-2 bg-dark text-light\"type=\"text\" name=\"type\" placeholder=\"Search event type...\">
              <button class=\"btn btn-warning\"type=\"submit\">Search</button>
          </form>
      </section>
    </div>
  </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  72 => 19,  67 => 17,  61 => 14,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<nav class=\"navbar navbar-expand-lg bg-body-tertiary bg-dark\">
  <div class=\"container-fluid \">
    <a class=\"navbar-brand text-light\" href=\"{{ path('app_event_index') }}\">
      <img src=\"https://www.rivieragroupon.com/img/logo01.png\" alt=\"logo\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item m-2\">
          <a class=\"nav-link text-light active\" aria-current=\"page\" href=\"{{ path('app_event_index') }}\">Home</a>
        </li>
        <li class=\"nav-item m-2\">
          <a class=\"nav-link text-light\" href=\"{{ path('app_event_new') }}\">Create New Event</a>
        </li>
        <form action=\"{{ path('app_event_index') }}\" method=\"get\">
          <select class=\"bg-dark text-light p-2 me-2 border-3 border-warning-subtle rounded-2\"name=\"type\">
              <option value=\"\">All Events</option>
              <option value=\"music\">music</option>
              <option value=\"sport\">sport</option>
              <option value=\"movie\">movie</option>
              <option value=\"theater\">theater</option>
            
          </select>
          <input class=\"bg-dark text-light p-2 border-3 border-warning-subtle rounded-2 \" type=\"submit\" value=\"Filter\">
      </form>
      
      </ul>
      <section class=\"search-bar\">
          <form action=\"{{ path('app_event_index') }}\" method=\"get\">
              <input class=\"border-3 border-warning rounded-2 bg-dark text-light\"type=\"text\" name=\"type\" placeholder=\"Search event type...\">
              <button class=\"btn btn-warning\"type=\"submit\">Search</button>
          </form>
      </section>
    </div>
  </div>
</nav>
", "navbar.html.twig", "C:\\Users\\elect\\OneDrive\\Desktop\\BE19_CR6_bigEventsAdamAli\\templates\\navbar.html.twig");
    }
}
