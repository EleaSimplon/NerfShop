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

/* /landing_page/confirmation.html.twig */
class __TwigTemplate_d2cf3193a18916fd66127b6dcf43c7bfce017253c6b190d08d745e97104600f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/landing_page/confirmation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/landing_page/confirmation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/landing_page/confirmation.html.twig", 1);
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
        echo "
    <!-- Offer Conversion: CurcumaV2 - CPA - [FR] WEB/WAP -->
    <iframe src=\"https://reflexcash.go2cloud.org/aff_l?offer_id=22318\" scrolling=\"no\" frameborder=\"0\" width=\"1\" height=\"1\"></iframe>
    <!-- // End Offer Conversion -->

<div class=\"container\">

    <div class=\"row\">
        <div class=\"content col s12\">
            <section class=\"banner center-align\" style=\"margin: 5rem 0;\">
                <h3 class=\"center-align color_brand_secondary\">Merci!<br>Votre commande ?? bien ??t?? effectu??e</h3>
                <div class=\"center-align\">
                    <h5 class=\"center-align color_brand_primary\">V??rifiez votre bo??te de r??ception,<br>un email vous a ??t?? envoy?? contenant les informations d'exp??dition et la facture de votre achat.</h5>
                    <p>Si vous nous n'avez pas re??u cet email v??rifiez votre bo??te de r??ception spam ou contactez notre <a href=\"mailto:contact@battleoffice.com\">service consommateur</a>.</p>
                </div>
            </section>
            <section class=\"banner\">
                <div class=\"row\">
                    <div class=\"col s6 m3\">
                        <div class=\"picto-wrapper center-align\">
                            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/naturel.png"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"100% naturel\">
                            <p class=\"color_brand_primary\">100%<br><b>Ecologique</b></p>
                        </div>
                    </div>
                    <div class=\"col s6 m3\">
                        <div class=\"picto-wrapper center-align\">
                            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/secure.png"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Paiement s??curis??\">
                            <p class=\"color_brand_primary\">Paiement<br><b>s??curis??</b></p>
                        </div>
                    </div>
                    <div class=\"col s6 m3\">
                        <div class=\"picto-wrapper center-align\">
                            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chrono.png"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Votre commande est trait??e en moins de 24h\">
                            <p class=\"color_brand_primary\">Livraison<br><b>Colis suivi</b></p>
                        </div>
                    </div>
                    <div class=\"col s6 m3\">
                        <div class=\"picto-wrapper center-align\">
                            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/like.png"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Paiement s??curis??\">
                            <p class=\"color_brand_primary\">100% Satisfait<br><b>ou rembours??</b></p>
                        </div>
                    </div>

                </div>
            </section>
            <section class=\"banner\">
                <div class=\"center-align\">
                    <p>Nous nous engageons ?? livrer votre commande le plus rapidement possible. G??n??ralement, une commande est trait??e en moins de 24h. Vous devez donc ensuite compter le temps de transport jusqu'?? la livraison chez vous (g??n??ralement entre 24h et 48h). Les commandes pass??es le vendredi et le week-end sont trait??es et exp??di??es le lundi qui suit.</p>
                    <p>La livraison est offerte pour tous nos clients. Pour toute livraison de produits ext??rieure ?? la France m??tropolitaine, les d??lais d'acheminement peuvent ??tre l??g??rement plus importants.</p>
                </div>
            </section>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/landing_page/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 44,  127 => 38,  118 => 32,  109 => 26,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}

    <!-- Offer Conversion: CurcumaV2 - CPA - [FR] WEB/WAP -->
    <iframe src=\"https://reflexcash.go2cloud.org/aff_l?offer_id=22318\" scrolling=\"no\" frameborder=\"0\" width=\"1\" height=\"1\"></iframe>
    <!-- // End Offer Conversion -->

<div class=\"container\">

    <div class=\"row\">
        <div class=\"content col s12\">
            <section class=\"banner center-align\" style=\"margin: 5rem 0;\">
                <h3 class=\"center-align color_brand_secondary\">Merci!<br>Votre commande ?? bien ??t?? effectu??e</h3>
                <div class=\"center-align\">
                    <h5 class=\"center-align color_brand_primary\">V??rifiez votre bo??te de r??ception,<br>un email vous a ??t?? envoy?? contenant les informations d'exp??dition et la facture de votre achat.</h5>
                    <p>Si vous nous n'avez pas re??u cet email v??rifiez votre bo??te de r??ception spam ou contactez notre <a href=\"mailto:contact@battleoffice.com\">service consommateur</a>.</p>
                </div>
            </section>
            <section class=\"banner\">
                <div class=\"row\">
                    <div class=\"col s6 m3\">
                        <div class=\"picto-wrapper center-align\">
                            <img src=\"{{asset ('assets/images/naturel.png')}}\" class=\"responsive-img\" alt=\"100% naturel\">
                            <p class=\"color_brand_primary\">100%<br><b>Ecologique</b></p>
                        </div>
                    </div>
                    <div class=\"col s6 m3\">
                        <div class=\"picto-wrapper center-align\">
                            <img src=\"{{asset ('assets/images/secure.png')}}\" class=\"responsive-img\" alt=\"Paiement s??curis??\">
                            <p class=\"color_brand_primary\">Paiement<br><b>s??curis??</b></p>
                        </div>
                    </div>
                    <div class=\"col s6 m3\">
                        <div class=\"picto-wrapper center-align\">
                            <img src=\"{{asset ('assets/images/chrono.png')}}\" class=\"responsive-img\" alt=\"Votre commande est trait??e en moins de 24h\">
                            <p class=\"color_brand_primary\">Livraison<br><b>Colis suivi</b></p>
                        </div>
                    </div>
                    <div class=\"col s6 m3\">
                        <div class=\"picto-wrapper center-align\">
                            <img src=\"{{asset ('assets/images/like.png')}}\" class=\"responsive-img\" alt=\"Paiement s??curis??\">
                            <p class=\"color_brand_primary\">100% Satisfait<br><b>ou rembours??</b></p>
                        </div>
                    </div>

                </div>
            </section>
            <section class=\"banner\">
                <div class=\"center-align\">
                    <p>Nous nous engageons ?? livrer votre commande le plus rapidement possible. G??n??ralement, une commande est trait??e en moins de 24h. Vous devez donc ensuite compter le temps de transport jusqu'?? la livraison chez vous (g??n??ralement entre 24h et 48h). Les commandes pass??es le vendredi et le week-end sont trait??es et exp??di??es le lundi qui suit.</p>
                    <p>La livraison est offerte pour tous nos clients. Pour toute livraison de produits ext??rieure ?? la France m??tropolitaine, les d??lais d'acheminement peuvent ??tre l??g??rement plus importants.</p>
                </div>
            </section>
        </div>
    </div>
</div>
{% endblock %}
", "/landing_page/confirmation.html.twig", "/shared/httpd/NerfShop/templates/landing_page/confirmation.html.twig");
    }
}
