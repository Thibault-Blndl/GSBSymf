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

/* fiche_frais/index.html.twig */
class __TwigTemplate_198e3fac13ee3dded3b4f0ab5fa7a5d30f136a1e31a35fa1add01725f691b776 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_frais/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_frais/index.html.twig", 1);
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

        echo "Mes fiches de frais";
        
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
        <h1 class=\"pt-5\">Mes fiches de frais</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Mois</th>
                    <th>État</th>
                    <th>Montant</th>
                    <th>Date modif</th>
                    <th>Acteurs</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fiche_frais_admin"]) || array_key_exists("fiche_frais_admin", $context) ? $context["fiche_frais_admin"] : (function () { throw new RuntimeError('Variable "fiche_frais_admin" does not exist.', 21, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["fiche_frai"]) {
                // line 22
                echo "                    <tr>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "mois", [], "any", false, false, false, 23), "m-Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "nbJustificatifs", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                        <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "montantValide", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                        <td>";
                // line 26
                ((twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "dateModif", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "dateModif", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                        <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "motifRefus", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                        <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "acteurs", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_frais_show", ["id" => twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">show</a>
                            <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_frais_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">edit</a>
                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 35
                echo "                    <tr>
                        <td colspan=\"7\">Aucune fiche de frais</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche_frai'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            ";
        } else {
            // line 40
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fiche_frais"]) || array_key_exists("fiche_frais", $context) ? $context["fiche_frais"] : (function () { throw new RuntimeError('Variable "fiche_frais" does not exist.', 40, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["fiche_frai"]) {
                // line 41
                echo "                    <tr>
                        <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "mois", [], "any", false, false, false, 42), "m-Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "etat", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                        <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "montantValide", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                        <td>";
                // line 45
                ((twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "dateModif", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "dateModif", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "acteurs", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                        <td>
                            <a class=\"btn btn-outline-danger\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ligne_frais_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["fiche_frai"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">Modifier</a>
                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 52
                echo "                    <tr>
                        <td colspan=\"7\">Aucune fiche de frais</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche_frai'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            ";
        }
        // line 57
        echo "            </tbody>
        </table>
    </div>
    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_frais_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fiche_frais/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 60,  216 => 57,  213 => 56,  204 => 52,  195 => 48,  190 => 46,  186 => 45,  182 => 44,  178 => 43,  174 => 42,  171 => 41,  165 => 40,  162 => 39,  153 => 35,  144 => 31,  140 => 30,  135 => 28,  131 => 27,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  112 => 22,  106 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes fiches de frais{% endblock %}

{% block body %}
    <div class=\"pt-5\">
        <h1 class=\"pt-5\">Mes fiches de frais</h1>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Mois</th>
                    <th>État</th>
                    <th>Montant</th>
                    <th>Date modif</th>
                    <th>Acteurs</th>
                </tr>
            </thead>
            <tbody>
            {% if is_granted('ROLE_ADMIN') %}
                {% for fiche_frai in fiche_frais_admin %}
                    <tr>
                        <td>{{ fiche_frai.mois|date('m-Y') }}</td>
                        <td>{{ fiche_frai.nbJustificatifs }}</td>
                        <td>{{ fiche_frai.montantValide }}</td>
                        <td>{{ fiche_frai.dateModif ? fiche_frai.dateModif|date('Y-m-d') : '' }}</td>
                        <td>{{ fiche_frai.motifRefus }}</td>
                        <td>{{ fiche_frai.acteurs }}</td>
                        <td>
                            <a href=\"{{ path('fiche_frais_show', {'id': fiche_frai.id}) }}\">show</a>
                            <a href=\"{{ path('fiche_frais_edit', {'id': fiche_frai.id}) }}\">edit</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\">Aucune fiche de frais</td>
                    </tr>
                {% endfor %}
            {% else %}
                {% for fiche_frai in fiche_frais %}
                    <tr>
                        <td>{{ fiche_frai.mois|date('m-Y') }}</td>
                        <td>{{ fiche_frai.etat }}</td>
                        <td>{{ fiche_frai.montantValide }}</td>
                        <td>{{ fiche_frai.dateModif ? fiche_frai.dateModif|date('Y-m-d') : '' }}</td>
                        <td>{{ fiche_frai.acteurs}}</td>
                        <td>
                            <a class=\"btn btn-outline-danger\" href=\"{{ path('ligne_frais_edit', {'id': fiche_frai.id}) }}\">Modifier</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\">Aucune fiche de frais</td>
                    </tr>
                {% endfor %}
            {% endif %}
            </tbody>
        </table>
    </div>
    <a href=\"{{ path('fiche_frais_new') }}\">Create new</a>
{% endblock %}
", "fiche_frais/index.html.twig", "/Users/Thibault/Desktop/GSBSymf/templates/fiche_frais/index.html.twig");
    }
}
