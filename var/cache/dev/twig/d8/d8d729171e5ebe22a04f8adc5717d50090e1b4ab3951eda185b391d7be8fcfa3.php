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

/* reseau/index.html.twig */
class __TwigTemplate_4b7336f008d5cdb156f9c976c01f6cb090037d2746c751c636c2d6f722507670 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reseau/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reseau/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reseau/index.html.twig", 2);
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

        echo "GSB - Gsb";
        
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
                <h1 class=\"pt-5 d-flex justify-content-center\" style=\"color: rgb(30,121,213);\"><strong>Description du laboratoire GSB</strong><br></h1>
            </div>
        </div>
        <div class=\"row\" style=\"background-color: white;border-style: none;border-radius: 31px;\">
            <div class=\"col-6 d-flex justify-content-center\">

                <p class=\"align-content-center pt-3\">Répartition des services Chaque   étage   dispose   d'une   baie   debrassage qui le relie par une fibre à labaie centrale de la salle serveurs. Toutes   les   salles   de   réunion   sontéquipées   d'un   point   d'accès   Wifipositionné   par   défaut   dans   le   VLAN\"Visiteurs\" qui autorise uniquement unaccès Internet. Les portables connectés en wifi à cepoint   d'accès   reçoivent   ainsi   uneadresse   IP   et   n'ont,   par   conséquentaccès qu'aux services DHCP et DNS.Le point d’accès peut être configuré àla demande pour être raccordé à unVLAN présent au niveau de l'étage.Chaque salle de réunion dispose d'unvidéoprojecteur,   d'enceintes   et   d'untableau numérique interactif. La salle \"Démonstration\" est destinée àl'accueil   des   organismes   de   santé(AFSSAPS   notamment)   et   despartenaires  scientifiques. Elle  disposede   paillasses   et   d'équipements   delaboratoire,   en   plus   d'une   salle   de réunion.
            </div></p>
            <div class=\"col-6 d-flex justify-content-center\">
                <img src=\"assets/schema.png\" class=\"p-2 img-fluid\">
            </div>
        </div>
        <div class=\"row\" style=\"height: 10vw\"></div>
    </section>
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/bootstrap/js/bootstrap.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reseau/index.html.twig";
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

{% block title %}GSB - Gsb{% endblock %}

{% block body %}
    <section>
        <div class=\"row pt-5\">
            <div class=\"col d-flex justify-content-center\">
                <br><br>
                <h1 class=\"pt-5 d-flex justify-content-center\" style=\"color: rgb(30,121,213);\"><strong>Description du laboratoire GSB</strong><br></h1>
            </div>
        </div>
        <div class=\"row\" style=\"background-color: white;border-style: none;border-radius: 31px;\">
            <div class=\"col-6 d-flex justify-content-center\">

                <p class=\"align-content-center pt-3\">Répartition des services Chaque   étage   dispose   d'une   baie   debrassage qui le relie par une fibre à labaie centrale de la salle serveurs. Toutes   les   salles   de   réunion   sontéquipées   d'un   point   d'accès   Wifipositionné   par   défaut   dans   le   VLAN\"Visiteurs\" qui autorise uniquement unaccès Internet. Les portables connectés en wifi à cepoint   d'accès   reçoivent   ainsi   uneadresse   IP   et   n'ont,   par   conséquentaccès qu'aux services DHCP et DNS.Le point d’accès peut être configuré àla demande pour être raccordé à unVLAN présent au niveau de l'étage.Chaque salle de réunion dispose d'unvidéoprojecteur,   d'enceintes   et   d'untableau numérique interactif. La salle \"Démonstration\" est destinée àl'accueil   des   organismes   de   santé(AFSSAPS   notamment)   et   despartenaires  scientifiques. Elle  disposede   paillasses   et   d'équipements   delaboratoire,   en   plus   d'une   salle   de réunion.
            </div></p>
            <div class=\"col-6 d-flex justify-content-center\">
                <img src=\"assets/schema.png\" class=\"p-2 img-fluid\">
            </div>
        </div>
        <div class=\"row\" style=\"height: 10vw\"></div>
    </section>
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/bootstrap/js/bootstrap.min.js\"></script>
{% endblock %}", "reseau/index.html.twig", "/Users/Thibault/Desktop/MissionGSBSymfony/templates/reseau/index.html.twig");
    }
}
