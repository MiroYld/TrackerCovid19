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

/* home/index.html.twig */
class __TwigTemplate_d4bf243cfb1387160b8eb828693bed3e292a97500d69063d9a1ef36e27607b32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Les chiffres du COVID-19 en France
";
        
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
        echo "    <div class=\"album py-5\" id=\"department\">
        <div class=\"container\">
            <h1 class=\"mb-5\">Les chiffres du COVID-19 en France</h1>

            <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
                <div class=\"col\">
                    <div class=\"card shadow-sm h-100\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre d’hospitalisations</h5>
                            <p class=\"card-text\">Nombre de personnes actuellement hospitalisée</p>
                        </div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), 0, [], "any", false, false, false, 18), "hosp", [], "any", false, false, false, 18), "html", null, true);
        echo "</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre de Réa</h5>
                            <p class=\"card-text\">Nombre de personnes actuellement en réanimation</p>
                        </div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), 0, [], "any", false, false, false, 28), "rea", [], "any", false, false, false, 28), "html", null, true);
        echo "</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre total de décès</h5>
                            <p class=\"card-text\">Nombre de personnes décédés depuis le début de la pandémie</p>
                        </div>
                        <h3 class=\"card-footer bg-dark text-light mx-2 rounded-pill\">";
        // line 38
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), 0, [], "any", false, false, false, 38), "dchosp", [], "any", false, false, false, 38) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), 0, [], "any", false, false, false, 38), "esms_dc", [], "any", false, false, false, 38)), "html", null, true);
        echo "</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre de nouveaux patients</h5>
                            <p class=\"card-text\">Nouveaux patients admis en réanimation en 24H</p>
                        </div>
                        <h3 class=\"card-footer bg-info text-dark mx-2 rounded-pill\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), 0, [], "any", false, false, false, 48), "incid_rea", [], "any", false, false, false, 48), "html", null, true);
        echo "</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Retours à domicile</h5>
                            <p class=\"card-text\">Nouveaux retours à domicile en 24h.</p>
                        </div>
                        <h3 class=\"card-footer bg-success text-dark mx-2 rounded-pill\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), 0, [], "any", false, false, false, 58), "incid_rad", [], "any", false, false, false, 58), "html", null, true);
        echo "</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Source des données</h5>
                            <p class=\"card-text\">Ministère de la santé:</p>
                        </div>
                        <h3 class=\"card-footer bg-secondary text-grey mx-2 rounded-pill\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 68, $this->source); })()), 0, [], "any", false, false, false, 68), "date", [], "any", false, false, false, 68), "html", null, true);
        echo "</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>

        <div class=\"card  shadow-lg\">
        <div class=\"card-body\">
            ";
        // line 78
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 78, $this->source); })()));
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 78,  167 => 68,  154 => 58,  141 => 48,  128 => 38,  115 => 28,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les chiffres du COVID-19 en France
{% endblock %}

{% block body %}
    <div class=\"album py-5\" id=\"department\">
        <div class=\"container\">
            <h1 class=\"mb-5\">Les chiffres du COVID-19 en France</h1>

            <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
                <div class=\"col\">
                    <div class=\"card shadow-sm h-100\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre d’hospitalisations</h5>
                            <p class=\"card-text\">Nombre de personnes actuellement hospitalisée</p>
                        </div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">{{ data.0.hosp }}</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre de Réa</h5>
                            <p class=\"card-text\">Nombre de personnes actuellement en réanimation</p>
                        </div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">{{ data.0.rea }}</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre total de décès</h5>
                            <p class=\"card-text\">Nombre de personnes décédés depuis le début de la pandémie</p>
                        </div>
                        <h3 class=\"card-footer bg-dark text-light mx-2 rounded-pill\">{{ data.0.dchosp + data.0.esms_dc }}</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre de nouveaux patients</h5>
                            <p class=\"card-text\">Nouveaux patients admis en réanimation en 24H</p>
                        </div>
                        <h3 class=\"card-footer bg-info text-dark mx-2 rounded-pill\">{{ data.0.incid_rea }}</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Retours à domicile</h5>
                            <p class=\"card-text\">Nouveaux retours à domicile en 24h.</p>
                        </div>
                        <h3 class=\"card-footer bg-success text-dark mx-2 rounded-pill\">{{ data.0.incid_rad }}</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Source des données</h5>
                            <p class=\"card-text\">Ministère de la santé:</p>
                        </div>
                        <h3 class=\"card-footer bg-secondary text-grey mx-2 rounded-pill\">{{ data.0.date }}</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>

        <div class=\"card  shadow-lg\">
        <div class=\"card-body\">
            {{ render_chart(chart) }}
        </div>
    </div>
{% endblock %}", "home/index.html.twig", "/var/www/html/TrackerCovid19/templates/home/index.html.twig");
    }
}
