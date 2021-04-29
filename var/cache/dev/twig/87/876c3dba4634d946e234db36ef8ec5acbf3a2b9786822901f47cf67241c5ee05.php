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

/* ligne_frais/_form.html.twig */
class __TwigTemplate_a0af8580b1af15f99031dd520656c8a2962e2005c7195c8313af3a74dc88f37d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne_frais/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne_frais/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFraisForfait"]) || array_key_exists("formFraisForfait", $context) ? $context["formFraisForfait"] : (function () { throw new RuntimeError('Variable "formFraisForfait" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"container\">
        ";
        // line 3
        if ((0 <= twig_compare(twig_length_filter($this->env, (isset($context["formFraisForfait"]) || array_key_exists("formFraisForfait", $context) ? $context["formFraisForfait"] : (function () { throw new RuntimeError('Variable "formFraisForfait" does not exist.', 3, $this->source); })())), 2))) {
            // line 4
            echo "            <h1 class=\"pt-5\">Modification Frais Forfait</h1>
            <table class=\"table\">
                <thead>
                    <tr>
                       <th>Nom</th>
                       <th>Quantité</th>
                       <th>Montant</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "                        <tr>
                            <td>";
                // line 16
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFraisForfait"]) || array_key_exists("formFraisForfait", $context) ? $context["formFraisForfait"] : (function () { throw new RuntimeError('Variable "formFraisForfait" does not exist.', 16, $this->source); })()), $context["i"], [], "array", false, false, false, 16), "fraisForfait", [], "any", false, false, false, 16), "libelle", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control"]]);
                echo "</td>
                            <td>";
                // line 17
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFraisForfait"]) || array_key_exists("formFraisForfait", $context) ? $context["formFraisForfait"] : (function () { throw new RuntimeError('Variable "formFraisForfait" does not exist.', 17, $this->source); })()), $context["i"], [], "array", false, false, false, 17), "quantite", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control"]]);
                echo "</td>
                            <td>";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFraisForfait"]) || array_key_exists("formFraisForfait", $context) ? $context["formFraisForfait"] : (function () { throw new RuntimeError('Variable "formFraisForfait" does not exist.', 18, $this->source); })()), $context["i"], [], "array", false, false, false, 18), "fraisForfait", [], "any", false, false, false, 18), "montant", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"]]);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </tbody>
            </table>

            <h1 class=\"pt-5\">Modification Frais Hors Forfait</h1>
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Libelle</th>
                    <th>Jour</th>
                    <th>Montant</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["formFraisHorsForfait"]) || array_key_exists("formFraisHorsForfait", $context) ? $context["formFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "formFraisHorsForfait" does not exist.', 34, $this->source); })())) - 2)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 35
                echo "                    <tr>
                        <td>";
                // line 36
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFraisHorsForfait"]) || array_key_exists("formFraisHorsForfait", $context) ? $context["formFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "formFraisHorsForfait" does not exist.', 36, $this->source); })()), $context["i"], [], "array", false, false, false, 36), "libelle", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "form-control"]]);
                echo "</td>
                        <td>";
                // line 37
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFraisHorsForfait"]) || array_key_exists("formFraisHorsForfait", $context) ? $context["formFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "formFraisHorsForfait" does not exist.', 37, $this->source); })()), $context["i"], [], "array", false, false, false, 37), "date", [], "any", false, false, false, 37), 'row', ["date_pattern" => "<span style=\"display: none;\">{{ year }} {{ month }}</span> {{ day }}"]);
                echo "</td>
                        <td>";
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFraisHorsForfait"]) || array_key_exists("formFraisHorsForfait", $context) ? $context["formFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "formFraisHorsForfait" does not exist.', 38, $this->source); })()), $context["i"], [], "array", false, false, false, 38), "montant", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control"]]);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </tbody>
            </table>

            <button class=\"btn btn-outline-success\">";
            // line 44
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 44, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
            echo "</button>
        ";
        } else {
            // line 46
            echo "            <p>Il n'y a rien ici !</p>
        ";
        }
        // line 48
        echo "
        <span style=\"padding-bottom: 10rem\">
            <a class=\"btn btn-outline-danger\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_frais_index");
        echo "\">Retour aux fiches</a>
        </span>
    </div>
";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFraisForfait"]) || array_key_exists("formFraisForfait", $context) ? $context["formFraisForfait"] : (function () { throw new RuntimeError('Variable "formFraisForfait" does not exist.', 53, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ligne_frais/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  143 => 50,  139 => 48,  135 => 46,  130 => 44,  125 => 41,  116 => 38,  112 => 37,  108 => 36,  105 => 35,  101 => 34,  86 => 21,  77 => 18,  73 => 17,  69 => 16,  66 => 15,  62 => 14,  50 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(formFraisForfait) }}
    <div class=\"container\">
        {% if formFraisForfait|length >= 2 %}
            <h1 class=\"pt-5\">Modification Frais Forfait</h1>
            <table class=\"table\">
                <thead>
                    <tr>
                       <th>Nom</th>
                       <th>Quantité</th>
                       <th>Montant</th>
                    </tr>
                </thead>
                <tbody>
                    {% for i in 0..3 %}
                        <tr>
                            <td>{{ form_row(formFraisForfait[i].fraisForfait.libelle, {'attr':{'class':'form-control'}}) }}</td>
                            <td>{{ form_row(formFraisForfait[i].quantite, {'attr':{'class':'form-control'}}) }}</td>
                            <td>{{ form_row(formFraisForfait[i].fraisForfait.montant, {'attr':{'class':'form-control'}}) }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <h1 class=\"pt-5\">Modification Frais Hors Forfait</h1>
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Libelle</th>
                    <th>Jour</th>
                    <th>Montant</th>
                </tr>
                </thead>
                <tbody>
                {% for i in 0..formFraisHorsForfait|length-2 %}
                    <tr>
                        <td>{{ form_row(formFraisHorsForfait[i].libelle, {'attr':{'class':'form-control'}}) }}</td>
                        <td>{{ form_row(formFraisHorsForfait[i].date, {'date_pattern': '<span style=\"display: none;\">{{ year }} {{ month }}</span> {{ day }}'}) }}</td>
                        <td>{{ form_row(formFraisHorsForfait[i].montant, {'attr':{'class':'form-control'}}) }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

            <button class=\"btn btn-outline-success\">{{ button_label|default('Modifier') }}</button>
        {% else %}
            <p>Il n'y a rien ici !</p>
        {% endif %}

        <span style=\"padding-bottom: 10rem\">
            <a class=\"btn btn-outline-danger\" href=\"{{ path('fiche_frais_index') }}\">Retour aux fiches</a>
        </span>
    </div>
{{ form_end(formFraisForfait) }}

", "ligne_frais/_form.html.twig", "/Users/Thibault/Desktop/MissionGSBSymfony/templates/ligne_frais/_form.html.twig");
    }
}
