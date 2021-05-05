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

/* si/index.html.twig */
class __TwigTemplate_1b9ca13a78ac9f8edcab4ab1a978db15eb8e2dd640931b138d1d318875b76673 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "si/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "si/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "si/index.html.twig", 2);
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
        <div class=\"row\">
            <div class=\"col-2\"></div>
            <div class=\"col-8 d-flex justify-content-center\" style=\"background-color: white;border-style: none;border-radius: 31px;\">
                <p class=\"align-content-center\"><br><strong>Le secteur d'activité</strong><br><br> L’industrie pharmaceutique est un secteur très lucratif dans lequel le mouvement de fusion acquisition<br>est très fort. Les regroupements de laboratoires ces dernières
                    années ont donné naissance à des<br>entités gigantesques au sein desquelles le travail est longtemps resté organisé selon les anciennes<br>structures.<br><br> Des déboires divers récents autour de médicaments ou molécules
                    ayant entraîné des complications<br>médicales ont fait s'élever des voix contre une partie de l'activité des laboratoires : la visite médicale,<br>réputée être le lieu d' arrangements entre l'industrie et les praticiens, et
                    tout du moins un terrain<br>d'influence opaque.<br><br> <strong>L'entreprise</strong><br><br> Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy<br>(spécialisé dans le secteur des maladies
                    virales dont le SIDA et les hépatites) et le conglomérat<br>européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union<br>de trois petits laboratoires .<br><br> En 2009, les deux géants
                    pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur<br>industriel. L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris.<br><br>Le siège social de la multinationale est situé à Philadelphie,
                    Pennsylvanie, aux Etats-Unis.<br><br><strong><em>La France a été choisie comme témoin pour l'amélioration du suivi de l'activité de visite.</em></strong><br><br> <strong>Réorganisation</strong><br><br> Une conséquence de cette
                    fusion, est la recherche d'une optimisation de l’activité du groupe ainsi<br>constitué en réalisant des économies d’échelle dans la production et la distribution des médicaments<br>(en passant par une nécessaire restructuration
                    et vague de licenciement), tout en prenant le meilleur<br>des deux laboratoires sur les produits concurrents.<br><br> L'entreprise compte 480 visiteurs médicaux en France métropolitaine (Corse comprise), et 60 dans les<br>départements
                    et territoires d'outre-mer. Les territoires sont répartis en 6 secteurs géographiques<br>(Paris-Centre, Sud, Nord, Ouest, Est, DTOM Caraïbes-Amériques, DTOM Asie-Afrique).<br><br>Une vision partielle de cette organisation est présentée
                    ci-dessous.</p>
            </div>
            <div class=\"col-2\"></div>
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
        return "si/index.html.twig";
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
        <div class=\"row\">
            <div class=\"col-2\"></div>
            <div class=\"col-8 d-flex justify-content-center\" style=\"background-color: white;border-style: none;border-radius: 31px;\">
                <p class=\"align-content-center\"><br><strong>Le secteur d'activité</strong><br><br> L’industrie pharmaceutique est un secteur très lucratif dans lequel le mouvement de fusion acquisition<br>est très fort. Les regroupements de laboratoires ces dernières
                    années ont donné naissance à des<br>entités gigantesques au sein desquelles le travail est longtemps resté organisé selon les anciennes<br>structures.<br><br> Des déboires divers récents autour de médicaments ou molécules
                    ayant entraîné des complications<br>médicales ont fait s'élever des voix contre une partie de l'activité des laboratoires : la visite médicale,<br>réputée être le lieu d' arrangements entre l'industrie et les praticiens, et
                    tout du moins un terrain<br>d'influence opaque.<br><br> <strong>L'entreprise</strong><br><br> Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy<br>(spécialisé dans le secteur des maladies
                    virales dont le SIDA et les hépatites) et le conglomérat<br>européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union<br>de trois petits laboratoires .<br><br> En 2009, les deux géants
                    pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur<br>industriel. L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris.<br><br>Le siège social de la multinationale est situé à Philadelphie,
                    Pennsylvanie, aux Etats-Unis.<br><br><strong><em>La France a été choisie comme témoin pour l'amélioration du suivi de l'activité de visite.</em></strong><br><br> <strong>Réorganisation</strong><br><br> Une conséquence de cette
                    fusion, est la recherche d'une optimisation de l’activité du groupe ainsi<br>constitué en réalisant des économies d’échelle dans la production et la distribution des médicaments<br>(en passant par une nécessaire restructuration
                    et vague de licenciement), tout en prenant le meilleur<br>des deux laboratoires sur les produits concurrents.<br><br> L'entreprise compte 480 visiteurs médicaux en France métropolitaine (Corse comprise), et 60 dans les<br>départements
                    et territoires d'outre-mer. Les territoires sont répartis en 6 secteurs géographiques<br>(Paris-Centre, Sud, Nord, Ouest, Est, DTOM Caraïbes-Amériques, DTOM Asie-Afrique).<br><br>Une vision partielle de cette organisation est présentée
                    ci-dessous.</p>
            </div>
            <div class=\"col-2\"></div>
        </div>
        <div class=\"row\" style=\"height: 10vw\"></div>
    </section>
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/bootstrap/js/bootstrap.min.js\"></script>
{% endblock %}
", "si/index.html.twig", "/Users/Thibault/Desktop/GSBSymf/templates/si/index.html.twig");
    }
}
