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

/* accueil/logged.html.twig */
class __TwigTemplate_0457a78b0d737532eb4655ead3c7ba8cea69176897b7400cf0ce5c565f2880d2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/logged.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/logged.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/logged.html.twig", 2);
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

        echo "GSB Accueil ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 4, $this->source); })()), "getTypeUser", [], "method", false, false, false, 4), "html", null, true);
        
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
                <h1 class=\"pt-5 d-flex justify-content-center\" style=\"color: rgb(30,121,213);\"><strong>Bonjour ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "prenom", [], "any", false, false, false, 11), "html", null, true);
        echo ", bienvenue sur la page d'accueil</strong><br></h1>
            </div>
        </div>
        <div class=\"row pt-5\">
        ";
        // line 15
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 15, $this->source); })()), "getTypeUser", [], "method", false, false, false, 15), "id", [], "any", false, false, false, 15), 1))) {
            // line 16
            echo "            <div class=\"container text-justify w-50 bg-white pt-3 pb-1 shadow\" style =\"border-radius: 15px\">
                <p class=\"text-center\">Bienvenue dans votre application de gestion des frais de déplacements.</p>
                <p>Afin de couvrir les frais que vous avez engagés lors de vos déplacements professionnels, vous devez compléter des fiches de frais mensuelles.</p>
                <ul>
                    <li>Une fiche de frais court du 1er au dernier jour du mois;</li>
                    <li>Les fiches de frais sont créées automatiquement par l'application au fil de votre utilisation;</li>
                    <li>Vous complétez les fiches de frais à votre rythme;</li>
                    <li>Lorsqu'une fiche est totalement renseignée, vous devrez la \"signer\" afin qu'elle puisse être traitée par le service comptable;</li>
                    <li>L'impression d'une fiche n'est possible qu'après sa signature;</li>
                    <li>Une fiche non signée présente depuis 12 mois dans l'application est jugée invalide, il vous sera alors possible de la supprimer;</li>
                </ul>
                <p>Au moyen du bandeau gauche, vous avez accès aux fonctionalités du profil visiteur :</p>
                <ul>
                    <li>Gérer vos fiches de frais (modifier, signer, imprimer, supprimer)</li>
                    <li>Consulter votre compte</li>
                    <li>Se déconnecter</li>
                </ul>
            </div>
        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 34, $this->source); })()), "getTypeUser", [], "method", false, false, false, 34), "id", [], "any", false, false, false, 34), 2))) {
            // line 35
            echo "            COMPTABLE
        ";
        } else {
            // line 37
            echo "            ADMIN
        ";
        }
        // line 39
        echo "            <div class=\"row\" style=\"height: 10vw\"></div>
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
        return "accueil/logged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  130 => 37,  126 => 35,  124 => 34,  104 => 16,  102 => 15,  95 => 11,  89 => 7,  79 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}GSB Accueil {{ currentUser.getTypeUser() }}{% endblock %}

{% block body %}
    <section>
        <div class=\"row pt-5\">
            <div class=\"col d-flex justify-content-center\">
                <br><br>
                <h1 class=\"pt-5 d-flex justify-content-center\" style=\"color: rgb(30,121,213);\"><strong>Bonjour {{ app.user.prenom }}, bienvenue sur la page d'accueil</strong><br></h1>
            </div>
        </div>
        <div class=\"row pt-5\">
        {% if currentUser.getTypeUser().id == 1 %}
            <div class=\"container text-justify w-50 bg-white pt-3 pb-1 shadow\" style =\"border-radius: 15px\">
                <p class=\"text-center\">Bienvenue dans votre application de gestion des frais de déplacements.</p>
                <p>Afin de couvrir les frais que vous avez engagés lors de vos déplacements professionnels, vous devez compléter des fiches de frais mensuelles.</p>
                <ul>
                    <li>Une fiche de frais court du 1er au dernier jour du mois;</li>
                    <li>Les fiches de frais sont créées automatiquement par l'application au fil de votre utilisation;</li>
                    <li>Vous complétez les fiches de frais à votre rythme;</li>
                    <li>Lorsqu'une fiche est totalement renseignée, vous devrez la \"signer\" afin qu'elle puisse être traitée par le service comptable;</li>
                    <li>L'impression d'une fiche n'est possible qu'après sa signature;</li>
                    <li>Une fiche non signée présente depuis 12 mois dans l'application est jugée invalide, il vous sera alors possible de la supprimer;</li>
                </ul>
                <p>Au moyen du bandeau gauche, vous avez accès aux fonctionalités du profil visiteur :</p>
                <ul>
                    <li>Gérer vos fiches de frais (modifier, signer, imprimer, supprimer)</li>
                    <li>Consulter votre compte</li>
                    <li>Se déconnecter</li>
                </ul>
            </div>
        {% elseif currentUser.getTypeUser().id == 2 %}
            COMPTABLE
        {% else %}
            ADMIN
        {% endif %}
            <div class=\"row\" style=\"height: 10vw\"></div>
            </div>
    </section>
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/bootstrap/js/bootstrap.min.js\"></script>
{% endblock %}", "accueil/logged.html.twig", "/Users/Thibault/Desktop/GSBSymf/templates/accueil/logged.html.twig");
    }
}
