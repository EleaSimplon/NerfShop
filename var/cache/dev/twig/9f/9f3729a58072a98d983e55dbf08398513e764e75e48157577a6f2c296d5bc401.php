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

/* paiement/paypal.html.twig */
class __TwigTemplate_d71523853c1e39bf61efe3a5c5241cd786a9e4115f92d4b0a4b6b961d6596e78 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/paypal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/paypal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement/paypal.html.twig", 1);
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
        echo "    ";
        // line 5
        echo "    ";
        // line 18
        echo "
    ";
        // line 20
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
                                <label for=\"prix\">PRIX DYNAMIQUE</label>
                                <input type=\"text\" name=\"prix\" id=\"name\" disabled=\"disabled\">
                            </div>
                            <div class=\"clearfix\"></div>
                            <h5 class=\"center\">Payez en toute sécurité avec Paypal</h5>
                            ";
        // line 44
        echo "                            <div class=\"input-field col s12\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\" name=\"email\" id=\"email\" required>
                            </div>
                            ";
        // line 49
        echo "                            ";
        // line 50
        echo "                            <div class=\"input-field col s12\">
                                ";
        // line 52
        echo "                               <div id=\"smart-button-container\">
                                    <div style=\"text-align: center;\">
                                        <div id=\"paypal-button-container\"></div>
                                    </div>
                                </div>
                            </div>
                                <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("landing_page");
        echo "\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
                            ";
        // line 65
        echo "                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    ";
        // line 78
        echo "    <script src=\"https://www.paypal.com/sdk/js?client-id=sb&currency=EUR\" data-sdk-integration-source=\"button-factory\"></script>
    <script
    src=\"https://www.paypal.com/sdk/js?client-id=AVmow_Vzhgnod7gRNInFlNNdq8B8GQLxAqxtKV0wapFCykNyeubK4EUxsMyKKkJblT8nmNVnj1-_KqhN\">
    </script>
    <script>
        function initPayPalButton() {
            paypal.Buttons({
            style: {
            shape: 'pill',
            color: 'blue',
            layout: 'vertical',
            label: 'paypal',
            
        },

        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
          return actions.order.create({
            purchase_units: [{\"amount\":{\"currency_code\":\"EUR\",\"value\":1}}] // TO DO :: CHANGER LA VALEUR DYNAMIQUEMENT
          });
        },

        // If you want to authorize funds immediately but capture the funds later, you have to explicitly pass authorize as the intent for the transaction.
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) { // results in the capturing the funds immediately
            alert('Transaction completed by ' + details.payer.name.given_name + '!');
          }); // This function shows a transaction success message to your buyer.
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
        }  
        initPayPalButton();
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "paiement/paypal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 78,  152 => 77,  142 => 76,  124 => 65,  120 => 58,  112 => 52,  109 => 50,  107 => 49,  101 => 44,  76 => 20,  73 => 18,  71 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {# ************** SECTION CONTAINER HEADER IMG **************#}
    {# <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <h1 class=\"header center\">Merci pour votre achat nom produit dynamique</h1>
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">prix dynamique ?</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\">
            <img style=\"width:100%\" src=\"\" alt=\"Titre de la campagne\">
        </div>
    </div> #}

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
                                <label for=\"prix\">PRIX DYNAMIQUE</label>
                                <input type=\"text\" name=\"prix\" id=\"name\" disabled=\"disabled\">
                            </div>
                            <div class=\"clearfix\"></div>
                            <h5 class=\"center\">Payez en toute sécurité avec Paypal</h5>
                            {# <img style=\"width:13rem\" src=\"{{ asset('assets/images/paiement-securise-stripe.jpeg') }}\"> #}
                            <div class=\"input-field col s12\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\" name=\"email\" id=\"email\" required>
                            </div>
                            {# INPUT CACHE PRIX #}
                            {# <input type=\"text\"> #}
                            <div class=\"input-field col s12\">
                                {# CARD PAYPAL #}
                               <div id=\"smart-button-container\">
                                    <div style=\"text-align: center;\">
                                        <div id=\"paypal-button-container\"></div>
                                    </div>
                                </div>
                            </div>
                                <a href=\"{{ path ('landing_page') }}\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
                            {# <div class=\"input-field col s12 l6\">
                                <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" type=\"submit\" name=\"action\">
                                    Payer
                                    <i class=\"material-icons right\">euro_symbol</i>
                                </button>
                            </div> #}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

{% endblock %}


{% block javascripts %}
    {# PAYPAL SCRIPT #}
    <script src=\"https://www.paypal.com/sdk/js?client-id=sb&currency=EUR\" data-sdk-integration-source=\"button-factory\"></script>
    <script
    src=\"https://www.paypal.com/sdk/js?client-id=AVmow_Vzhgnod7gRNInFlNNdq8B8GQLxAqxtKV0wapFCykNyeubK4EUxsMyKKkJblT8nmNVnj1-_KqhN\">
    </script>
    <script>
        function initPayPalButton() {
            paypal.Buttons({
            style: {
            shape: 'pill',
            color: 'blue',
            layout: 'vertical',
            label: 'paypal',
            
        },

        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
          return actions.order.create({
            purchase_units: [{\"amount\":{\"currency_code\":\"EUR\",\"value\":1}}] // TO DO :: CHANGER LA VALEUR DYNAMIQUEMENT
          });
        },

        // If you want to authorize funds immediately but capture the funds later, you have to explicitly pass authorize as the intent for the transaction.
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) { // results in the capturing the funds immediately
            alert('Transaction completed by ' + details.payer.name.given_name + '!');
          }); // This function shows a transaction success message to your buyer.
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
        }  
        initPayPalButton();
    </script>


{% endblock %}", "paiement/paypal.html.twig", "/shared/httpd/NerfShop/templates/paiement/paypal.html.twig");
    }
}
