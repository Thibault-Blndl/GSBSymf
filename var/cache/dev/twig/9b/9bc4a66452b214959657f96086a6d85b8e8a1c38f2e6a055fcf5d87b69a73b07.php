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

/* ligne_frais_hors_forfait/_form.html.twig */
class __TwigTemplate_25907e8cbda71fba53155ef4676377144e9e25d0bc05c906f52e107223cc7b97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne_frais_hors_forfait/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne_frais_hors_forfait/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"container\">
        ";
        // line 3
        if ((0 <= twig_compare(twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })())), 2))) {
            // line 4
            echo "            <table class=\"table\">
                <thead>
                <tr>
                    <th>Libelle</th>
                    <th>Jour</th>
                    <th>Montant</th>
                </tr>
                </thead>
                <tbody>
                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })())) - 2)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 14
                echo "                        <tr>
                            <td>";
                // line 15
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), $context["i"], [], "array", false, false, false, 15), "libelle", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-control"]]);
                echo "</td>
                            <td>";
                // line 16
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), $context["i"], [], "array", false, false, false, 16), "date", [], "any", false, false, false, 16), 'row', ["date_pattern" => "<span style=\"display: none;\">{{ year }} {{ month }}</span> {{ day }}"]);
                echo "</td>
                            <td>";
                // line 17
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), $context["i"], [], "array", false, false, false, 17), "montant", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control"]]);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                </tbody>
            </table>

            <button class=\"btn btn-outline-success\">";
            // line 23
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 23, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
            echo "</button>
        ";
        } else {
            // line 25
            echo "            <p>Pas de ligne frais hors forfait !</p>
        ";
        }
        // line 27
        echo "
        <a class=\"btn btn-outline-danger\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_frais_index");
        echo "\">Retour aux fiches</a>
    </div>

";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ligne_frais_hors_forfait/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  102 => 28,  99 => 27,  95 => 25,  90 => 23,  85 => 20,  76 => 17,  72 => 16,  68 => 15,  65 => 14,  61 => 13,  50 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"container\">
        {% if form|length >= 2 %}
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Libelle</th>
                    <th>Jour</th>
                    <th>Montant</th>
                </tr>
                </thead>
                <tbody>
                    {% for i in 0..form|length-2 %}
                        <tr>
                            <td>{{ form_row(form[i].libelle, {'attr':{'class':'form-control'}}) }}</td>
                            <td>{{ form_row(form[i].date, {'date_pattern': '<span style=\"display: none;\">{{ year }} {{ month }}</span> {{ day }}'}) }}</td>
                            <td>{{ form_row(form[i].montant, {'attr':{'class':'form-control'}}) }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <button class=\"btn btn-outline-success\">{{ button_label|default('Modifier') }}</button>
        {% else %}
            <p>Pas de ligne frais hors forfait !</p>
        {% endif %}

        <a class=\"btn btn-outline-danger\" href=\"{{ path('fiche_frais_index') }}\">Retour aux fiches</a>
    </div>

{{ form_end(form) }}
", "ligne_frais_hors_forfait/_form.html.twig", "/Users/Thibault/Desktop/MissionGSBSymfony/templates/ligne_frais_hors_forfait/_form.html.twig");
    }
}
