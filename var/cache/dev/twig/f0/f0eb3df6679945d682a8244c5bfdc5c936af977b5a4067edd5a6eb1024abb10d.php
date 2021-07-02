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

/* landing_page/partials/form_new.html.twig */
class __TwigTemplate_33adace08a675298e307cc02f44bf6267fa618dafec9ee6dfad70cbd41600b7c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/partials/form_new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/partials/form_new.html.twig"));

        // line 1
        echo "<style type=\"text/css\">
    .form-error {
        color: red;
        font-weight: bold;
        padding-bottom:10px;
    }
    .form-error ul {
        margin:0;
    }
</style>

";
        // line 13
        echo "<div class=\"card step_2\">

    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
   
        <div class=\"card-content\">
            <span class=\"card-title color_product_primary center-align\">Étape 2</span>
            <p class=\"h6 center-align\">Remplissez ce formulaire</p>
            <div class=\"form-wrapper\">
                <div class=\"input-field\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), 'label', ["label" => "Prénom"]);
        echo "
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'widget');
        echo "
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'label', ["label" => "Nom"]);
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'widget');
        echo "
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), 'label', ["label" => "Adresse"]);
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), 'widget');
        echo "
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "compAdress", [], "any", false, false, false, 37), 'label', ["label" => "Complément d'adresse"]);
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "compAdress", [], "any", false, false, false, 38), 'widget');
        echo "
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "ville", [], "any", false, false, false, 42), 'label', ["label" => "Ville"]);
        echo "
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "ville", [], "any", false, false, false, 43), 'widget');
        echo "
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "codePostal", [], "any", false, false, false, 47), 'label', ["label" => "Code Postal"]);
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "codePostal", [], "any", false, false, false, 48), 'widget');
        echo "
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "pays", [], "any", false, false, false, 52), 'label', ["label" => " "]);
        echo "
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "pays", [], "any", false, false, false, 53), 'widget');
        echo "
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "telephone", [], "any", false, false, false, 57), 'label', ["label" => "Telephone"]);
        echo "
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "telephone", [], "any", false, false, false, 58), 'widget');
        echo "
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), "first", [], "any", false, false, false, 62), 'label', ["label" => "Email"]);
        echo "
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), "first", [], "any", false, false, false, 63), 'widget');
        echo "
                    <div class=\"form-error\"></div>
                </div>
                 <div class=\"input-field\">
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), "second", [], "any", false, false, false, 67), 'label', ["label" => "Confirmation Email"]);
        echo "
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), "second", [], "any", false, false, false, 68), 'widget');
        echo "
                    <div class=\"form-error\"></div>
                </div>
            </div>
        </div>

        ";
        // line 75
        echo "
        <ul class=\"collapsible\">
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">markunread_mailbox</i>Adresse de livraison différente ?</div>
                <div class=\"collapsible-body\">
                    <div class=\"input-field\">
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 81), "prenom", [], "any", false, false, false, 81), 'label', ["label" => "Prénom"]);
        echo "
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 82), "prenom", [], "any", false, false, false, 82), 'widget');
        echo "
                    <div class=\"form-error\"></div>
                </div>
                    <div class=\"input-field\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 86), "nom", [], "any", false, false, false, 86), 'label', ["label" => "Nom"]);
        echo "
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 87), "nom", [], "any", false, false, false, 87), 'widget');
        echo "
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 91), "adresse", [], "any", false, false, false, 91), 'label', ["label" => "Adresse"]);
        echo "
                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 92), "adresse", [], "any", false, false, false, 92), 'widget');
        echo "
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 96), "compAdresse", [], "any", false, false, false, 96), 'label', ["label" => "Complément d'adresse"]);
        echo "
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 97), "compAdresse", [], "any", false, false, false, 97), 'widget');
        echo "
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                       ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 101), "ville", [], "any", false, false, false, 101), 'label', ["label" => "Ville"]);
        echo "
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 102), "ville", [], "any", false, false, false, 102), 'widget');
        echo "
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 106), "codePostal", [], "any", false, false, false, 106), 'label', ["label" => "Code Postal"]);
        echo "
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 107), "codePostal", [], "any", false, false, false, 107), 'widget');
        echo "
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                       ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 111), "pays", [], "any", false, false, false, 111), 'label', ["label" => " "]);
        echo "
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 112), "pays", [], "any", false, false, false, 112), 'widget');
        echo "
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 116), "telephone", [], "any", false, false, false, 116), 'label', ["label" => "Telephone"]);
        echo "
                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 117), "telephone", [], "any", false, false, false, 117), 'widget');
        echo "
                        <div class=\"form-error\"></div>
                    </div>
                </div>
            </li>
        </ul>
    
    ";
        // line 124
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), 'form_end');
        echo "
    
</div>

";
        // line 129
        echo "<div class=\"card step_3\">
    <div class=\"card-content\">
        <span class=\"card-title color_product_primary center-align\">Étape 3</span>
        <p class=\"h6 center-align\">Choisissez un paiement</p>
        <ul class=\"collapsible\">
            <li class=\"active\">
                <div class=\"collapsible-header\"><i class=\"fas fa-credit-card\"></i>Payer avec la Carte Bancaire</div>
                <div class=\"collapsible-body card-form\">
                    <div class=\"row\">
                        <div class=\"center-align\">
                            <button type=\"submit\" name=\"paymentMethod\" value=\"stripe\" class=\"btn-large btn-block waves-effect waves-light\">Continuer avec Stripe</button>
                            <p>J'accepte les <a href=\"https://feelwellshop.com/fr/conditions-generales-de-ventes\" target=\"_blank\">conditions générales de vente</a></p>
                            <img class=\"responsive-img monetico\" src=\"assets/images/paiement-securise-stripe.jpeg\" alt=\"Stripe protège vos achats\">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"collapsible-header\"><i class=\"fab fa-cc-paypal\"></i>Payer avec Paypal</div>
                <div class=\"collapsible-body\">
                    <div class=\"row\">
                        <div class=\"center-align\">
                            <button type=\"submit\" name=\"paymentMethod\" value=\"paypal\" class=\"btn-large btn-block waves-effect waves-light\">Continuer sur PayPal</button>
                            <p>J'accepte les <a href=\"https://feelwellshop.com/fr/conditions-generales-de-ventes\" target=\"_blank\">conditions générales de vente</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "landing_page/partials/form_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 129,  281 => 124,  271 => 117,  267 => 116,  260 => 112,  256 => 111,  249 => 107,  245 => 106,  238 => 102,  234 => 101,  227 => 97,  223 => 96,  216 => 92,  212 => 91,  205 => 87,  201 => 86,  194 => 82,  190 => 81,  182 => 75,  173 => 68,  169 => 67,  162 => 63,  158 => 62,  151 => 58,  147 => 57,  140 => 53,  136 => 52,  129 => 48,  125 => 47,  118 => 43,  114 => 42,  107 => 38,  103 => 37,  96 => 33,  92 => 32,  85 => 28,  81 => 27,  74 => 23,  70 => 22,  60 => 15,  56 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
    .form-error {
        color: red;
        font-weight: bold;
        padding-bottom:10px;
    }
    .form-error ul {
        margin:0;
    }
</style>

{# Etape 2 FORM CLIENT #}
<div class=\"card step_2\">

    {{ form_start(form) }}
   
        <div class=\"card-content\">
            <span class=\"card-title color_product_primary center-align\">Étape 2</span>
            <p class=\"h6 center-align\">Remplissez ce formulaire</p>
            <div class=\"form-wrapper\">
                <div class=\"input-field\">
                    {{ form_label(form.prenom, 'Prénom') }}
                    {{ form_widget(form.prenom) }}
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_label(form.nom, 'Nom') }}
                    {{ form_widget(form.nom) }}
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_label(form.adresse, 'Adresse') }}
                    {{ form_widget(form.adresse) }}
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_label(form.compAdress, \"Complément d'adresse\") }}
                    {{ form_widget(form.compAdress) }}
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_label(form.ville, \"Ville\") }}
                    {{ form_widget(form.ville) }}
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_label(form.codePostal, \"Code Postal\") }}
                    {{ form_widget(form.codePostal) }}
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_label(form.pays, \" \") }}
                    {{ form_widget(form.pays) }}
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_label(form.telephone, \"Telephone\") }}
                    {{ form_widget(form.telephone) }}
                    <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_label(form.email.first, \"Email\") }}
                    {{ form_widget(form.email.first) }}
                    <div class=\"form-error\"></div>
                </div>
                 <div class=\"input-field\">
                    {{ form_label(form.email.second, \"Confirmation Email\") }}
                    {{ form_widget(form.email.second) }}
                    <div class=\"form-error\"></div>
                </div>
            </div>
        </div>

        {# Etape 2 FORM ADRESSE LIVRAISON #}

        <ul class=\"collapsible\">
            <li>
                <div class=\"collapsible-header\"><i class=\"material-icons\">markunread_mailbox</i>Adresse de livraison différente ?</div>
                <div class=\"collapsible-body\">
                    <div class=\"input-field\">
                    {{ form_label(form.adresseLivraison.prenom, 'Prénom') }}
                    {{ form_widget(form.adresseLivraison.prenom) }}
                    <div class=\"form-error\"></div>
                </div>
                    <div class=\"input-field\">
                        {{ form_label(form.adresseLivraison.nom, 'Nom') }}
                        {{ form_widget(form.adresseLivraison.nom) }}
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                        {{ form_label(form.adresseLivraison.adresse, 'Adresse') }}
                        {{ form_widget(form.adresseLivraison.adresse) }}
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                        {{ form_label(form.adresseLivraison.compAdresse, \"Complément d'adresse\") }}
                        {{ form_widget(form.adresseLivraison.compAdresse) }}
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                       {{ form_label(form.adresseLivraison.ville, \"Ville\") }}
                        {{ form_widget(form.adresseLivraison.ville) }}
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                        {{ form_label(form.adresseLivraison.codePostal, \"Code Postal\") }}
                        {{ form_widget(form.adresseLivraison.codePostal) }}
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                       {{ form_label(form.adresseLivraison.pays, \" \") }}
                        {{ form_widget(form.adresseLivraison.pays) }}
                        <div class=\"form-error\"></div>
                    </div>
                    <div class=\"input-field\">
                        {{ form_label(form.adresseLivraison.telephone, \"Telephone\") }}
                        {{ form_widget(form.adresseLivraison.telephone) }}
                        <div class=\"form-error\"></div>
                    </div>
                </div>
            </li>
        </ul>
    
    {{ form_end(form) }}
    
</div>

{# Etape 3 #}
<div class=\"card step_3\">
    <div class=\"card-content\">
        <span class=\"card-title color_product_primary center-align\">Étape 3</span>
        <p class=\"h6 center-align\">Choisissez un paiement</p>
        <ul class=\"collapsible\">
            <li class=\"active\">
                <div class=\"collapsible-header\"><i class=\"fas fa-credit-card\"></i>Payer avec la Carte Bancaire</div>
                <div class=\"collapsible-body card-form\">
                    <div class=\"row\">
                        <div class=\"center-align\">
                            <button type=\"submit\" name=\"paymentMethod\" value=\"stripe\" class=\"btn-large btn-block waves-effect waves-light\">Continuer avec Stripe</button>
                            <p>J'accepte les <a href=\"https://feelwellshop.com/fr/conditions-generales-de-ventes\" target=\"_blank\">conditions générales de vente</a></p>
                            <img class=\"responsive-img monetico\" src=\"assets/images/paiement-securise-stripe.jpeg\" alt=\"Stripe protège vos achats\">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"collapsible-header\"><i class=\"fab fa-cc-paypal\"></i>Payer avec Paypal</div>
                <div class=\"collapsible-body\">
                    <div class=\"row\">
                        <div class=\"center-align\">
                            <button type=\"submit\" name=\"paymentMethod\" value=\"paypal\" class=\"btn-large btn-block waves-effect waves-light\">Continuer sur PayPal</button>
                            <p>J'accepte les <a href=\"https://feelwellshop.com/fr/conditions-generales-de-ventes\" target=\"_blank\">conditions générales de vente</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

", "landing_page/partials/form_new.html.twig", "/shared/httpd/NerfShop/templates/landing_page/partials/form_new.html.twig");
    }
}
