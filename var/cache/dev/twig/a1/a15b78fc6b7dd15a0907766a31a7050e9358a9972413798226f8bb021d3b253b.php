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

/* fiche_frais/show.html.twig */
class __TwigTemplate_7e4c164f27c6b76d54b55ac90af32ea13e83cc33e8afc9de2d5782bd3cf89c66 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_frais/show.html.twig", 1);
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

        echo "FicheFrais";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"pt-5\">
        <h1 class=\"pt-5\">Mes Fiche de Frais</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Mois</th>
                    <th>Nombre de Justificatifs</th>
                    <th>Etat</th>
                    <th>Montant</th>
                    <th>Date modif.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 21, $this->source); })()), "mois", [], "any", false, false, false, 21), "Y-m"), "html", null, true);
        echo "</td>
                    <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 22, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 23, $this->source); })()), "etat", [], "any", false, false, false, 23), "libelle", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 24, $this->source); })()), "montantValide", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                    <td>";
        // line 25
        ((twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 25, $this->source); })()), "dateModif", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 25, $this->source); })()), "dateModif", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                    <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 26, $this->source); })()), "motifRefus", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                    <td><a class=\"btn btn-outline-danger\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_frais_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["fiche_frai"]) || array_key_exists("fiche_frai", $context) ? $context["fiche_frai"] : (function () { throw new RuntimeError('Variable "fiche_frai" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\">Modifier</a></td>
                </tr>
            </tbody>
        </table>
    </div>



    ";
        // line 35
        echo twig_include($this->env, $context, "fiche_frais/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fiche_frais/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 35,  129 => 27,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  109 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}FicheFrais{% endblock %}

{% block body %}
    <div class=\"pt-5\">
        <h1 class=\"pt-5\">Mes Fiche de Frais</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Mois</th>
                    <th>Nombre de Justificatifs</th>
                    <th>Etat</th>
                    <th>Montant</th>
                    <th>Date modif.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ fiche_frai.mois|date('Y-m') }}</td>
                    <td>{{ fiche_frai.nbJustificatifs }}</td>
                    <td>{{ fiche_frai.etat.libelle }}</td>
                    <td>{{ fiche_frai.montantValide }}</td>
                    <td>{{ fiche_frai.dateModif ? fiche_frai.dateModif|date('Y-m-d') : '' }}</td>
                    <td>{{ fiche_frai.motifRefus }}</td>
                    <td><a class=\"btn btn-outline-danger\" href=\"{{ path('fiche_frais_edit', {'id': fiche_frai.id}) }}\">Modifier</a></td>
                </tr>
            </tbody>
        </table>
    </div>



    {{ include('fiche_frais/_delete_form.html.twig') }}
{% endblock %}
", "fiche_frais/show.html.twig", "/Users/Thibault/Desktop/MissionGSBSymfony/templates/fiche_frais/show.html.twig");
    }
}
