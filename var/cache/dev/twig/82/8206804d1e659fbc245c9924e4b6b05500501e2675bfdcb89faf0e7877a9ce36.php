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

/* landing_page/index_new.html.twig */
class __TwigTemplate_0ed671e19b8942b1d72133643381b494eb22a5ce74d4e8f00f48c3813ce86ea5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/index_new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/index_new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "landing_page/index_new.html.twig", 1);
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <section class=\"countdown bg_brand_secondary\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col s12 m12 l5\">
                    <h4 class=\"center-align\"><b>Dépêchez-vous !!</b> Il ne vous reste que</h4>
                </div>
                <div class=\"col s12 m12 l2\">
                    <div class=\"row center-align\">
                        <div class=\"time-wrapper col s12 m6\">
                            <span id=\"minutes\" class=\"color_brand_primary\">2</span> Jours
                        </div>
                        <div class=\"time-wrapper col s12 m6\">
                            <span id=\"seconds\" class=\"color_brand_primary\">4</span> Heures
                        </div>
                    </div>
                </div>
                <div class=\"col s12 m12 l5\">
                    <h4 class=\"center-align \">pour profiter de cette offre !!</h4>
                </div>
            </div>
        </div>
        <style>
            .flash-notice {
                background-color: #CB4335;
                text-align: center;
                height: 40px;
                text-decoration: bold;
                font-size:20px;
                padding: 5px;

            }
        </style>

    </section>
    <div class=\"container\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 44
            echo "        <div class=\"flash-notice\">
            ";
            // line 45
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </div>
    <form method=\"post\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"content col s12 m12 l8\">

                    <section class=\"formulas\">
                        <div class=\"card bg_grey\">
                            <div class=\"card-content\">
                                <span class=\"card-title color_product_primary center-align\">Étape 1</span>
                                <p class=\"h6 center-align\">Choisissez votre produit</p>
                            </div>
                        </div>

                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 63
            echo "
                            <label class=\"cure-radio\">
                                <input name=\"product\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" type=\"radio\">
                                <article>
                                    <div class=\"card center-align\">
                                        <div class=\"row\">
                                            <div class=\"col s12 m12 l4\">
                                                <div class=\"image-content\">
                                                    <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "img", [], "any", false, false, false, 71), "html", null, true);
            echo "\" alt=\"Nerf\" class=\"responsive-img\">
                                                </div>
                                            </div>
                                            <div class=\"col s12 m6 l4\">

                                                ";
            // line 76
            $context["economie"] = (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 76) - twig_get_attribute($this->env, $this->source, $context["produit"], "prixPromo", [], "any", false, false, false, 76));
            // line 77
            echo "
                                                <div class=\"card-content\">
                                                    <p class=\"h6\">
                                                        ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 80), "html", null, true);
            echo "
                                                    </p>
                                                    <p class=\"h5 color_brand_secondary\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "textPromo", [], "any", false, false, false, 82), "html", null, true);
            echo "
                                                    </p>
                                                    <p class=\"h4\">
                                                        ";
            // line 85
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["produit"], "prixPromo", [], "any", false, false, false, 85) / 100) . 0), "html", null, true);
            echo " €
                                                        <span class=\"h6\"><br>au lieu de <del class=\"h5 color_brand_secondary\">";
            // line 86
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 86) / 100) . 0), "html", null, true);
            echo " €</del></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class=\"col s12 m6 l4\">
                                                <div class=\"card-content\">
                                                    <p class=\"h6 color_brand_secondary\">
                                                        J'économise ";
            // line 93
            echo twig_escape_filter($this->env, ((isset($context["economie"]) || array_key_exists("economie", $context) ? $context["economie"] : (function () { throw new RuntimeError('Variable "economie" does not exist.', 93, $this->source); })()) / 100), "html", null, true);
            echo "€
                                                    </p>
                                                    <p class=\"h6\">
                                                        + livraison gratuite
                                                    </p>
                                                    <div class=\"picto-wrapper\">
                                                        <img src=\"assets/images/like-product.png\" class=\"responsive-img\" alt=\"Garantie satisfait ou remboursé\">
                                                        <p class=\"color_brand_primary\">Satisfait<br>ou remboursé</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </label>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
                        <h6 class=\"center-align\">OUI ! Je veux profiter de cette offre exceptionnelle et créer une guerre au bureau.</h6>
                        <p class=\"center-align\">Je bénéficie gratuitement de la garantie <b>100% satisfait ou remboursé</b><br>A tous moment durant ma cure, je peux retourner mes Nerfs et me faire rembourser immédiatement.</p>
                    </section>
                    <section class=\"benefices\">
                        <h5 class=\"center-align color_product_primary\">POURQUOI NERF EST AUSSI POPULAIRE EN OPEN SPACE</h5>
                        <div class=\"card\">
                            <div class=\"card-content\">
                                <span class=\"card-title color_product_primary\">Qu'est ce que Nerf ?</span>
                                <p>
                                    Les premiers modèles comprenaient la gamme Dart Tag (utilisée en compétition, et l'une des plus anciennes) et la gamme N-Strike. Depuis, plusieurs gammes ont été commercialisées : Zombie Strike (de couleur verte), Rebelle (marketés envers un public féminin), Élite et Élite XD (les plus puissantes), et Vortex (tirant des disques et possédant un modèle automatique appelé Nitron).
                                </p>
                                <p>
                                    Des accessoires peuvent compléter le blaster, comme les viseurs, les crosses, et les rallonges de canon.
                                </p>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col s12 l6\">
                                    <div class=\"card-content\">
                                        <span class=\"card-title color_product_primary\">Bienfaits :</span>
                                        <ul>
                                            <li>✔ Favorise la vengeance entre collègues</li>
                                            <li>✔ Aide à combattre l'injustice</li>
                                            <li>✔ Favorise le respect de chacun</li>
                                            <li>✔ Aide à traiter la dépression, la nervosité</li>
                                            <li>✔ Calme les esprits révolutionnaires</li>
                                            <li>✔ Aide à réduire les après-midi ennuyeuses</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col s12 l6\">
                                    <div class=\"card-content\">
                                        <span class=\"card-title color_product_primary\">Nos Conseils :</span>
                                        <b>Conseils d’utilisation :</b>
                                        <p>Toujours viser la tête</p>
                                        <b>Soyez tactiques :</b>
                                        <p>
                                            Il est possible de tenter de créer des situations qu’on pense qui ne seront pas en faveur de notre adversaire. Par exemple,

                                            Prendre une garde gauche ou droite;
                                            Effectuer des déplacements qui seront déstabilisants pour l’adversaire;
                                            Utiliser un rythme qui désavantage l’adversaire selon son style de combattant;
                                            Intimider l’adversaire par son attitude ou son regard.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"banner\">
                        <div class=\"row\">
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/france.png\" class=\"responsive-img\" alt=\"Fabriqué en France\">
                                    <p class=\"color_brand_primary\">Fabriqué<br><b>en France</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/naturel.png\" class=\"responsive-img\" alt=\"100% naturel\">
                                    <p class=\"color_brand_primary\">100%<br><b>Ecologique</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/secure.png\" class=\"responsive-img\" alt=\"Paiement sécurisé\">
                                    <p class=\"color_brand_primary\">Paiement<br><b>sécurisé</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/chrono.png\" class=\"responsive-img\" alt=\"Votre commande est traitée en moins de 24h\">
                                    <p class=\"color_brand_primary\">Livraison<br><b>Colis suivi</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/like.png\" class=\"responsive-img\" alt=\"Paiement sécurisé\">
                                    <p class=\"color_brand_primary\">100% Satisfait<br><b>ou remboursé</b></p>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section class=\"banner\">
                        <div class=\"card\">
                            <div class=\"row\">
                                <div class=\"col s12 l4\">
                                    <div class=\"card-content picto-wrapper center-align\">
                                        <img src=\"assets/images/chrono-big.png\" class=\"responsive-img\" alt=\"Votre commande est traitée en moins de 24h\">
                                        <p class=\"color_brand_primary\">Livraison<br><b>Colis suivi</b></p>
                                    </div>
                                </div>
                                <div class=\"col s12 l8\">
                                    <div class=\"card-content\">
                                        <p>Nous nous engageons à livrer votre commande le plus rapidement possible. Généralement, une commande est traitée en moins de 24h. Vous devez donc ensuite compter le temps de transport jusqu'à la livraison chez vous (généralement entre 24h et 48h). Les commandes passées le vendredi et le week-end sont traitées et expédiées le lundi qui suit.</p>
                                        <p>Pour toute livraison de produits extérieure à la France métropolitaine, les délais d'acheminement peuvent être légèrement plus importants.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                ";
        // line 216
        echo "                <aside class=\"sidebar col s12 m12 l4\">


                    ";
        // line 219
        $this->loadTemplate("landing_page/partials/form_new.html.twig", "landing_page/index_new.html.twig", 219)->display($context);
        echo " 

                    <div class=\"card\">
                        <div class=\"row\">
                            <div class=\"col s12\">
                                <div class=\"card-content picto-wrapper center-align\">
                                    <img src=\"assets/images/like-big.png\" class=\"responsive-img\" alt=\"Garantie satisfait ou remboursé\">
                                    <p class=\"color_brand_primary\">Satisfait<br>ou remboursé</p>
                                </div>
                            </div>
                            <div class=\"col s12\">
                                <div class=\"card-content\">
                                    <p>Les produits BattleOffice bénéficient de la garantie satisfait ou remboursé. Vous pouvez nous retourner vos produits (sauf si la boîte a été ouverte) et nous vous les rembourserons immédiatement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "landing_page/index_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 219,  344 => 216,  237 => 110,  214 => 93,  204 => 86,  200 => 85,  194 => 82,  189 => 80,  184 => 77,  182 => 76,  174 => 71,  165 => 65,  161 => 63,  157 => 62,  141 => 48,  132 => 45,  129 => 44,  125 => 43,  87 => 7,  77 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}


{% block body %}

    <section class=\"countdown bg_brand_secondary\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col s12 m12 l5\">
                    <h4 class=\"center-align\"><b>Dépêchez-vous !!</b> Il ne vous reste que</h4>
                </div>
                <div class=\"col s12 m12 l2\">
                    <div class=\"row center-align\">
                        <div class=\"time-wrapper col s12 m6\">
                            <span id=\"minutes\" class=\"color_brand_primary\">2</span> Jours
                        </div>
                        <div class=\"time-wrapper col s12 m6\">
                            <span id=\"seconds\" class=\"color_brand_primary\">4</span> Heures
                        </div>
                    </div>
                </div>
                <div class=\"col s12 m12 l5\">
                    <h4 class=\"center-align \">pour profiter de cette offre !!</h4>
                </div>
            </div>
        </div>
        <style>
            .flash-notice {
                background-color: #CB4335;
                text-align: center;
                height: 40px;
                text-decoration: bold;
                font-size:20px;
                padding: 5px;

            }
        </style>

    </section>
    <div class=\"container\">
        {% for message in app.flashes('notice') %}
        <div class=\"flash-notice\">
            {{ message }}
        </div>
        {% endfor %}
    </div>
    <form method=\"post\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"content col s12 m12 l8\">

                    <section class=\"formulas\">
                        <div class=\"card bg_grey\">
                            <div class=\"card-content\">
                                <span class=\"card-title color_product_primary center-align\">Étape 1</span>
                                <p class=\"h6 center-align\">Choisissez votre produit</p>
                            </div>
                        </div>

                        {% for produit in produits %}

                            <label class=\"cure-radio\">
                                <input name=\"product\" value=\"{{ produit.id }}\" type=\"radio\">
                                <article>
                                    <div class=\"card center-align\">
                                        <div class=\"row\">
                                            <div class=\"col s12 m12 l4\">
                                                <div class=\"image-content\">
                                                    <img src=\"{{ produit.img }}\" alt=\"Nerf\" class=\"responsive-img\">
                                                </div>
                                            </div>
                                            <div class=\"col s12 m6 l4\">

                                                {% set economie = (produit.prix - produit.prixPromo) %}

                                                <div class=\"card-content\">
                                                    <p class=\"h6\">
                                                        {{ produit.nomProduit }}
                                                    </p>
                                                    <p class=\"h5 color_brand_secondary\">{{ produit.textPromo }}
                                                    </p>
                                                    <p class=\"h4\">
                                                        {{ produit.prixPromo / 100 ~ 0 }} €
                                                        <span class=\"h6\"><br>au lieu de <del class=\"h5 color_brand_secondary\">{{ produit.prix / 100 ~ 0 }} €</del></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class=\"col s12 m6 l4\">
                                                <div class=\"card-content\">
                                                    <p class=\"h6 color_brand_secondary\">
                                                        J'économise {{ economie / 100 }}€
                                                    </p>
                                                    <p class=\"h6\">
                                                        + livraison gratuite
                                                    </p>
                                                    <div class=\"picto-wrapper\">
                                                        <img src=\"assets/images/like-product.png\" class=\"responsive-img\" alt=\"Garantie satisfait ou remboursé\">
                                                        <p class=\"color_brand_primary\">Satisfait<br>ou remboursé</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </label>

                        {% endfor %}

                        <h6 class=\"center-align\">OUI ! Je veux profiter de cette offre exceptionnelle et créer une guerre au bureau.</h6>
                        <p class=\"center-align\">Je bénéficie gratuitement de la garantie <b>100% satisfait ou remboursé</b><br>A tous moment durant ma cure, je peux retourner mes Nerfs et me faire rembourser immédiatement.</p>
                    </section>
                    <section class=\"benefices\">
                        <h5 class=\"center-align color_product_primary\">POURQUOI NERF EST AUSSI POPULAIRE EN OPEN SPACE</h5>
                        <div class=\"card\">
                            <div class=\"card-content\">
                                <span class=\"card-title color_product_primary\">Qu'est ce que Nerf ?</span>
                                <p>
                                    Les premiers modèles comprenaient la gamme Dart Tag (utilisée en compétition, et l'une des plus anciennes) et la gamme N-Strike. Depuis, plusieurs gammes ont été commercialisées : Zombie Strike (de couleur verte), Rebelle (marketés envers un public féminin), Élite et Élite XD (les plus puissantes), et Vortex (tirant des disques et possédant un modèle automatique appelé Nitron).
                                </p>
                                <p>
                                    Des accessoires peuvent compléter le blaster, comme les viseurs, les crosses, et les rallonges de canon.
                                </p>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col s12 l6\">
                                    <div class=\"card-content\">
                                        <span class=\"card-title color_product_primary\">Bienfaits :</span>
                                        <ul>
                                            <li>✔ Favorise la vengeance entre collègues</li>
                                            <li>✔ Aide à combattre l'injustice</li>
                                            <li>✔ Favorise le respect de chacun</li>
                                            <li>✔ Aide à traiter la dépression, la nervosité</li>
                                            <li>✔ Calme les esprits révolutionnaires</li>
                                            <li>✔ Aide à réduire les après-midi ennuyeuses</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col s12 l6\">
                                    <div class=\"card-content\">
                                        <span class=\"card-title color_product_primary\">Nos Conseils :</span>
                                        <b>Conseils d’utilisation :</b>
                                        <p>Toujours viser la tête</p>
                                        <b>Soyez tactiques :</b>
                                        <p>
                                            Il est possible de tenter de créer des situations qu’on pense qui ne seront pas en faveur de notre adversaire. Par exemple,

                                            Prendre une garde gauche ou droite;
                                            Effectuer des déplacements qui seront déstabilisants pour l’adversaire;
                                            Utiliser un rythme qui désavantage l’adversaire selon son style de combattant;
                                            Intimider l’adversaire par son attitude ou son regard.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"banner\">
                        <div class=\"row\">
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/france.png\" class=\"responsive-img\" alt=\"Fabriqué en France\">
                                    <p class=\"color_brand_primary\">Fabriqué<br><b>en France</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/naturel.png\" class=\"responsive-img\" alt=\"100% naturel\">
                                    <p class=\"color_brand_primary\">100%<br><b>Ecologique</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/secure.png\" class=\"responsive-img\" alt=\"Paiement sécurisé\">
                                    <p class=\"color_brand_primary\">Paiement<br><b>sécurisé</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/chrono.png\" class=\"responsive-img\" alt=\"Votre commande est traitée en moins de 24h\">
                                    <p class=\"color_brand_primary\">Livraison<br><b>Colis suivi</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/like.png\" class=\"responsive-img\" alt=\"Paiement sécurisé\">
                                    <p class=\"color_brand_primary\">100% Satisfait<br><b>ou remboursé</b></p>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section class=\"banner\">
                        <div class=\"card\">
                            <div class=\"row\">
                                <div class=\"col s12 l4\">
                                    <div class=\"card-content picto-wrapper center-align\">
                                        <img src=\"assets/images/chrono-big.png\" class=\"responsive-img\" alt=\"Votre commande est traitée en moins de 24h\">
                                        <p class=\"color_brand_primary\">Livraison<br><b>Colis suivi</b></p>
                                    </div>
                                </div>
                                <div class=\"col s12 l8\">
                                    <div class=\"card-content\">
                                        <p>Nous nous engageons à livrer votre commande le plus rapidement possible. Généralement, une commande est traitée en moins de 24h. Vous devez donc ensuite compter le temps de transport jusqu'à la livraison chez vous (généralement entre 24h et 48h). Les commandes passées le vendredi et le week-end sont traitées et expédiées le lundi qui suit.</p>
                                        <p>Pour toute livraison de produits extérieure à la France métropolitaine, les délais d'acheminement peuvent être légèrement plus importants.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                {# Sidebar Form #}
                <aside class=\"sidebar col s12 m12 l4\">


                    {% include 'landing_page/partials/form_new.html.twig' %} 

                    <div class=\"card\">
                        <div class=\"row\">
                            <div class=\"col s12\">
                                <div class=\"card-content picto-wrapper center-align\">
                                    <img src=\"assets/images/like-big.png\" class=\"responsive-img\" alt=\"Garantie satisfait ou remboursé\">
                                    <p class=\"color_brand_primary\">Satisfait<br>ou remboursé</p>
                                </div>
                            </div>
                            <div class=\"col s12\">
                                <div class=\"card-content\">
                                    <p>Les produits BattleOffice bénéficient de la garantie satisfait ou remboursé. Vous pouvez nous retourner vos produits (sauf si la boîte a été ouverte) et nous vous les rembourserons immédiatement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </form>
{% endblock %}
", "landing_page/index_new.html.twig", "/shared/httpd/NerfShop/templates/landing_page/index_new.html.twig");
    }
}
