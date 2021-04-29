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

/* accueil/index.html.twig */
class __TwigTemplate_e93498d282ca7bf4e42a3b5e4fce4c33687fcc2e76e3174aebdcbc3de9ba79e2 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 2);
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

        echo "BTS-SIO Accueil";
        
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
        echo "    <section>
        <div class=\"row pt-5\">
            <div class=\"col d-flex justify-content-center\">
                <br><br>
                <h1 class=\"pt-5 d-flex justify-content-center\" style=\"color: rgb(30,121,213);\"><strong>Bienvenue sur la page d'accueil sur site GSB</strong><br></h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-6 d-flex justify-content-center pt-5\">
                <br><br>
                <img src=\"assets/logo2.png\" style=\"border:solid 10px white\" class=\" d-flex justify-content-center\"/>
            </div>
            <div class=\"col-6 d-flex justify-content-center pt-5\">
                Le laboratoire GSB (Galaxy Swiss Bourdin) est une industrie pharmaceutique spécialisée dans les médicaments & les molécules ayant entrainées des complications médicales.<br>

                - C’est une société anonyme (SA).<br>
                - GSB a une finalité à but lucratif.<br>
                - Les acteurs internes sont des visiteurs qui sont internes à GSB<br>
                - Les acteurs externes sont la relation d’architecture client-serveur<br>
                - Nous faisons partie également des acteurs externes du GSB<br>
                - Les secteurs d’activités de GSB sont les hôpitaux & les officines (ex : pharmacies indépendantes)

                <div class=\"row\" style=\"height: 10vw\"></div>
            </div>
        </div>
    </section>
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/bootstrap/js/bootstrap.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}BTS-SIO Accueil{% endblock %}

{% block body %}
    <section>
        <div class=\"row pt-5\">
            <div class=\"col d-flex justify-content-center\">
                <br><br>
                <h1 class=\"pt-5 d-flex justify-content-center\" style=\"color: rgb(30,121,213);\"><strong>Bienvenue sur la page d'accueil sur site GSB</strong><br></h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-6 d-flex justify-content-center pt-5\">
                <br><br>
                <img src=\"assets/logo2.png\" style=\"border:solid 10px white\" class=\" d-flex justify-content-center\"/>
            </div>
            <div class=\"col-6 d-flex justify-content-center pt-5\">
                Le laboratoire GSB (Galaxy Swiss Bourdin) est une industrie pharmaceutique spécialisée dans les médicaments & les molécules ayant entrainées des complications médicales.<br>

                - C’est une société anonyme (SA).<br>
                - GSB a une finalité à but lucratif.<br>
                - Les acteurs internes sont des visiteurs qui sont internes à GSB<br>
                - Les acteurs externes sont la relation d’architecture client-serveur<br>
                - Nous faisons partie également des acteurs externes du GSB<br>
                - Les secteurs d’activités de GSB sont les hôpitaux & les officines (ex : pharmacies indépendantes)

                <div class=\"row\" style=\"height: 10vw\"></div>
            </div>
        </div>
    </section>
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/bootstrap/js/bootstrap.min.js\"></script>
{% endblock %}", "accueil/index.html.twig", "/Users/Thibault/Downloads/GSBSYMFONY SIMON COMPLET/templates/accueil/index.html.twig");
    }
}
