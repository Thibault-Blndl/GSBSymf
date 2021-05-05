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
class __TwigTemplate_32dbe0810be71ab29631fbe6b8bb5537bc4551c3c2420f534f6ba35ad00f6621 extends Template
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
        echo "<nav class=\"navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo.png"), "html", null, true);
        echo "\" width=\"71px\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
        ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 11
            echo "            <ul class=\"navbar-nav pr-5 pl-5\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">Mon Compte</a>
                </li>
            </ul>
            ";
            // line 16
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "getTypeUser", [], "method", false, false, false, 16), "id", [], "any", false, false, false, 16), 1))) {
                // line 17
                echo "                <ul class=\"navbar-nav pr-5\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"";
                // line 19
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_frais_index");
                echo "\">Mes Fiches de Frais</a>
                    </li>
                </ul>
            ";
            }
            // line 23
            echo "            <ul class=\"navbar-nav pr-5 ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"btn btn-outline-primary\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se Déconnecter</a>
                </li>
            </ul>
        ";
        } else {
            // line 29
            echo "            <ul class=\"navbar-nav pr-5 pl-5\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active pr-5\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("si");
            echo "\">Le SI</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link active pr-5\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseau");
            echo "\">Le Réseau</a>
                </li>
            </ul>
            <ul class =\"nav navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"btn btn-outline-primary\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se Connecter</a>
                </li>
            </ul>
        ";
        }
        // line 43
        echo "    </div>
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
        return array (  121 => 43,  114 => 39,  106 => 34,  100 => 31,  96 => 29,  89 => 25,  85 => 23,  78 => 19,  74 => 17,  72 => 16,  66 => 13,  62 => 11,  60 => 10,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar\">
    <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">
        <img src=\"{{ asset('assets/logo.png') }}\" width=\"71px\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
        {% if is_granted(\"ROLE_USER\") %}
            <ul class=\"navbar-nav pr-5 pl-5\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"{{ path('user_show', {'id': app.user.id}) }}\">Mon Compte</a>
                </li>
            </ul>
            {% if app.user.getTypeUser().id == 1 %}
                <ul class=\"navbar-nav pr-5\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"{{ path('fiche_frais_index') }}\">Mes Fiches de Frais</a>
                    </li>
                </ul>
            {% endif %}
            <ul class=\"navbar-nav pr-5 ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"btn btn-outline-primary\" href=\"{{ path('app_logout') }}\">Se Déconnecter</a>
                </li>
            </ul>
        {% else %}
            <ul class=\"navbar-nav pr-5 pl-5\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active pr-5\" href=\"{{ path('si') }}\">Le SI</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link active pr-5\" href=\"{{ path('reseau') }}\">Le Réseau</a>
                </li>
            </ul>
            <ul class =\"nav navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"btn btn-outline-primary\" href=\"{{ path ('app_login') }}\">Se Connecter</a>
                </li>
            </ul>
        {% endif %}
    </div>
</nav>", "header.html.twig", "/Users/Thibault/Desktop/GSBSymf/templates/header.html.twig");
    }
}
