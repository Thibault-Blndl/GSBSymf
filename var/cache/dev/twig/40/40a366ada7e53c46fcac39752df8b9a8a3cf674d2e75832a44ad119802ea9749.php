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

/* footer.html.twig */
class __TwigTemplate_d3feedf31867248ad8f467fd293ec1312049e09b5ed432679c65ed3926de9e35 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<script src=\"js/query.js\"></script>
<link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"/css/style.css\">
<link rel=\"stylesheet\" href=\"/css/all.css\">
<link rel=\"stylesheet\" href=\"/css/base.css\">
<link rel=\"stylesheet\" href=\"assets/bootstrap/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i\">
<link rel=\"stylesheet\" href=\"assets/fonts/simple-line-icons.min.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css\">
<link rel=\"stylesheet\" href=\"assets/css/smoothproducts.css\">
<script src=\"js/bootstrap.min.js\"></script>
<footer class=\"text-grey-50 fixed-bottom\" style=\"background-color:#a7c9dc;\">
    <div class=\"container text-center\">
        <p style=\"font-size: small\">Voici le site d'apprentissage de Symfony réalisé par Thibault Blondel</p>
        <small> &copy; 2020 BTS-SIO</small>
    </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"js/query.js\"></script>
<link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"/css/style.css\">
<link rel=\"stylesheet\" href=\"/css/all.css\">
<link rel=\"stylesheet\" href=\"/css/base.css\">
<link rel=\"stylesheet\" href=\"assets/bootstrap/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i\">
<link rel=\"stylesheet\" href=\"assets/fonts/simple-line-icons.min.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css\">
<link rel=\"stylesheet\" href=\"assets/css/smoothproducts.css\">
<script src=\"js/bootstrap.min.js\"></script>
<footer class=\"text-grey-50 fixed-bottom\" style=\"background-color:#a7c9dc;\">
    <div class=\"container text-center\">
        <p style=\"font-size: small\">Voici le site d'apprentissage de Symfony réalisé par Thibault Blondel</p>
        <small> &copy; 2020 BTS-SIO</small>
    </div>
</footer>", "footer.html.twig", "/Users/Thibault/Desktop/MissionGSBSymfony/templates/footer.html.twig");
    }
}
