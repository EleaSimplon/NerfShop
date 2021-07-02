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

/* landing_page/partials/stripe.html.twig */
class __TwigTemplate_b41b4f4c1cf8d9670118f234d6fb54a79db5b3314ddebe967a6ba9873bae0ea1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/partials/stripe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/partials/stripe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "landing_page/partials/stripe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 6
        echo "    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Procéder au paiement</h4>
                </div>
            </div>
            <!--   Form Section   -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"row\">
                        <h5 class=\"center\">Veuillez remplir tous les champs</h5>
                        <form method=\"POST\" action=\"\">
                            <div class=\"input-field col s12 l6\">
                                <label for=\"name\">Entrez le nom présent sur la carte: </label>
                                <input type=\"text\" name=\"name\" id=\"name\" required>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <label for=\"prix\">";
        // line 24
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "produit", [], "any", false, false, false, 24), "prixPromo", [], "any", false, false, false, 24) / 100) . 0), "html", null, true);
        echo " €</label>
                                <input type=\"text\" name=\"prix\" id=\"name\" disabled=\"disabled\">
                            </div>
                            <div class=\"clearfix\"></div>
                            <h5 class=\"center\">Payez en toute sécurité avec Stripe</h5>
                            <img style=\"width:13rem\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/paiement-securise-stripe.jpeg"), "html", null, true);
        echo "\">
                            <div class=\"input-field col s12\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\" name=\"email\" id=\"email\" required>
                            </div>
                            ";
        // line 35
        echo "                            ";
        // line 36
        echo "                            <div class=\"input-field col s12\">
                                ";
        // line 38
        echo "                                <div id=\"card-element\"></div>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("landing_page");
        echo "\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" type=\"submit\" name=\"action\">
                                    Payer
                                    <i class=\"material-icons right\">euro_symbol</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        let stripe = Stripe(\"pk_test_51ItVdFIUX0Fig29iIaRgDaXdyZ3foNxQasYCNprJasdVH1S2hIuGNwFAhAnaZkxehoOtr2bKm9MilX9gWNPXPYUM008MeRD1lS\");
        // The items the customer wants to buy
        let elements = stripe.elements();

        let style = {
            base: {
                color: \"#32325d\",
                fontFamily: 'Arial, sans-serif',
                fontSmoothing: \"antialiased\",
                fontSize: \"16px\",
                \"::placeholder\": {
                    color: \"#32325d\"
                }
            },
            invalid: {
                fontFamily: 'Arial, sans-serif',
                color: \"#fa755a\",
                iconColor: \"#fa755a\"
            }
        };
        console.log(elements);

        let card = elements.create(\"card\", { style: style });
        // Stripe injects an iframe into the DOM
        card.mount(\"#card-element\");
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "landing_page/partials/stripe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 61,  145 => 60,  118 => 41,  113 => 38,  110 => 36,  108 => 35,  100 => 29,  92 => 24,  72 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {# ************** SECTION FORM STRIPE **************#}
    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Procéder au paiement</h4>
                </div>
            </div>
            <!--   Form Section   -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"row\">
                        <h5 class=\"center\">Veuillez remplir tous les champs</h5>
                        <form method=\"POST\" action=\"\">
                            <div class=\"input-field col s12 l6\">
                                <label for=\"name\">Entrez le nom présent sur la carte: </label>
                                <input type=\"text\" name=\"name\" id=\"name\" required>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <label for=\"prix\">{{ (order.produit.prixPromo / 100) ~ 0 }} €</label>
                                <input type=\"text\" name=\"prix\" id=\"name\" disabled=\"disabled\">
                            </div>
                            <div class=\"clearfix\"></div>
                            <h5 class=\"center\">Payez en toute sécurité avec Stripe</h5>
                            <img style=\"width:13rem\" src=\"{{ asset('assets/images/paiement-securise-stripe.jpeg') }}\">
                            <div class=\"input-field col s12\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\" name=\"email\" id=\"email\" required>
                            </div>
                            {# INPUT CACHE PRIX #}
                            {# <input type=\"number\" name=\"prixTotal\"> #}
                            <div class=\"input-field col s12\">
                                {# CARD STRIPE #}
                                <div id=\"card-element\"></div>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <a href=\"{{ path ('landing_page') }}\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" type=\"submit\" name=\"action\">
                                    Payer
                                    <i class=\"material-icons right\">euro_symbol</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

{% endblock %}

{# SCRIPT STRIPE #}
{% block javascripts %}
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        let stripe = Stripe(\"pk_test_51ItVdFIUX0Fig29iIaRgDaXdyZ3foNxQasYCNprJasdVH1S2hIuGNwFAhAnaZkxehoOtr2bKm9MilX9gWNPXPYUM008MeRD1lS\");
        // The items the customer wants to buy
        let elements = stripe.elements();

        let style = {
            base: {
                color: \"#32325d\",
                fontFamily: 'Arial, sans-serif',
                fontSmoothing: \"antialiased\",
                fontSize: \"16px\",
                \"::placeholder\": {
                    color: \"#32325d\"
                }
            },
            invalid: {
                fontFamily: 'Arial, sans-serif',
                color: \"#fa755a\",
                iconColor: \"#fa755a\"
            }
        };
        console.log(elements);

        let card = elements.create(\"card\", { style: style });
        // Stripe injects an iframe into the DOM
        card.mount(\"#card-element\");
    </script>

{% endblock %}", "landing_page/partials/stripe.html.twig", "/home/simplon/devilbox/data/www/NerfShop/templates/landing_page/partials/stripe.html.twig");
    }
}
