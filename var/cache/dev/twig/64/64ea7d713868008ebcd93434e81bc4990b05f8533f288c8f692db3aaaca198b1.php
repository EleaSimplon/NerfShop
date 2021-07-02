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

/* client/_form.html.twig */
class __TwigTemplate_a0b3948728a04deede7edf500cefca953aaadc93f1822e3eeb395edc86983360 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        // line 3
        echo "    ";
        // line 70
        echo "
    ";
        // line 72
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "client/_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 72,  45 => 70,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# {{ form_start(form) }}
    #}
    {# <div class=\"card-content\">
        <span class=\"card-title color_product_primary center-align\">Étape 2</span>
        <p class=\"h6 center-align\">Remplissez ce formulaire</p>
        <div class=\"form-wrapper\">
            <div class=\"input-field\">
                <input type=\"text\">
                {{ form_label(form.client.prenom, 'Prénom') }}
                {{ form_widget(form.client.prenom) }}
                <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
                <input type=\"text\">
                {{ form_label(form.client.nom, 'Nom') }}
                {{ form_widget(form.client.nom) }}
                <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
                <input type=\"text\">
                {{ form_label(form.client.adresse, 'Adresse') }}
                {{ form_widget(form.client.adresse) }}
                <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
                <input type=\"text\">
                {{ form_label(form.client.compAdress, \"Complément d'adresse\") }}
                {{ form_widget(form.client.compAdress) }}
                <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
                <input type=\"text\">
                {{ form_label(form.client.ville, \"Ville\") }}
                {{ form_widget(form.client.ville) }}
                <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
                <input type=\"text\">
                {{ form_label(form.client.codePostal, \"Code Postal\") }}
                {{ form_widget(form.client.codePostal) }}
                <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
                <select>
                    {{ form_label(form.client.pays, \"Pays\") }}
                    {{ form_widget(form.client.pays) }}
                </select>
                <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
                <input type=\"text\">
                {{ form_label(form.client.pays, \"Pays\") }}
                {{ form_widget(form.client.pays) }}
                <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
                <input type=\"text\">
                {{ form_label(form.client.email, \"Email\") }}
                {{ form_widget(form.client.email) }}
                <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
                <input type=\"text\">
                {{ form_label(form.client.confirmEmail, \"Confirmation Email\") }}
                {{ form_widget(form.client.confirmEmail) }}
                <div class=\"form-error\"></div>
            </div>
        </div>
    </div> #}

    {# <button class=\"btn\">{{ button_label|default('Save') }}</button> #}

{# {{ form_end(form) }} #}", "client/_form.html.twig", "/shared/httpd/NerfShop/htdocs/templates/client/_form.html.twig");
    }
}
