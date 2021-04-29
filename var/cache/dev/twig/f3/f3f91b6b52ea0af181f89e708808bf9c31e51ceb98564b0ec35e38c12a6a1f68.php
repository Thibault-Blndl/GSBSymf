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

/* header.html.twig */
class __TwigTemplate_093830796008ed97421d226b80b41d50a84ad3483e1a489e1be1a5f34f44af54 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar d-flex\">
    <div class=\"container\">
        <a class=\"navbar-brand logo\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
            <img src=\"img/logo.png\" style=\"width: 18%;height: 18%;\">
        </a>
        <button data-toggle=\"collapse\" class=\"navbar-toggler\" data-target=\"#navcol-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
        ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 13
            echo "            <h1> Gestion des frais de déplacements</h1>
        <ul class=\"nav navbar-nav ml-auto pr-5\">
            <li class=\"nav-item\">
                <a class=\"btn btn-outline-primary\" href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se Déconnecter</a>
            </li>
        </ul>
        ";
        } else {
            // line 20
            echo "            <ul class=\"nav navbar-nav ml-auto pr-5\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active pr-5\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("si");
            echo "\">Le SI</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link active pr-5\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseau");
            echo "\">Le Réseau</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"btn btn-outline-primary\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se Connecter</a>
                </li>


            </ul>
                ";
        }
        // line 34
        echo "        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  89 => 28,  83 => 25,  77 => 22,  73 => 20,  66 => 16,  61 => 13,  59 => 12,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar d-flex\">
    <div class=\"container\">
        <a class=\"navbar-brand logo\" href=\"{{ path('accueil') }}\">
            <img src=\"img/logo.png\" style=\"width: 18%;height: 18%;\">
        </a>
        <button data-toggle=\"collapse\" class=\"navbar-toggler\" data-target=\"#navcol-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
        {% if is_granted(\"ROLE_USER\") %}
            <h1> Gestion des frais de déplacements</h1>
        <ul class=\"nav navbar-nav ml-auto pr-5\">
            <li class=\"nav-item\">
                <a class=\"btn btn-outline-primary\" href=\"{{ path('app_logout') }}\">Se Déconnecter</a>
            </li>
        </ul>
        {% else %}
            <ul class=\"nav navbar-nav ml-auto pr-5\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active pr-5\" href=\"{{ path('si') }}\">Le SI</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link active pr-5\" href=\"{{ path('reseau') }}\">Le Réseau</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"btn btn-outline-primary\" href=\"{{ path ('app_login') }}\">Se Connecter</a>
                </li>


            </ul>
                {% endif %}
        </div>
    </div>
</nav>", "header.html.twig", "/Users/Thibault/Desktop/MissionGSBSymfony/templates/header.html.twig");
    }
}
