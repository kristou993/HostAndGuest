<?php

/* HostAndGuestBundle:experience:top.html.twig */
class __TwigTemplate_0eed6d5c96a5c8163b7d59fc57b01ff857cafd2adf2360072b2b15cbfde4f017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:experience:top.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HostAndGuest/layout3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49bae503cc5baed57a0a22124ad0253c4d918ad4cac214408878d33fead437c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bae503cc5baed57a0a22124ad0253c4d918ad4cac214408878d33fead437c5->enter($__internal_49bae503cc5baed57a0a22124ad0253c4d918ad4cac214408878d33fead437c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:experience:top.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49bae503cc5baed57a0a22124ad0253c4d918ad4cac214408878d33fead437c5->leave($__internal_49bae503cc5baed57a0a22124ad0253c4d918ad4cac214408878d33fead437c5_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_1fc29a7249b21f2fa23495b91a69ded596d862c771d3733c89c660195c37d6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc29a7249b21f2fa23495b91a69ded596d862c771d3733c89c660195c37d6d3->enter($__internal_1fc29a7249b21f2fa23495b91a69ded596d862c771d3733c89c660195c37d6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 9
        echo "




<div class=\"new\">
    <div class=\"container\" >

        <h3 class=\"title\" align=\"center\">Expériences  <span> recommandées</span></h3>

        <br>
        <hr>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 22
            echo "            <h3 class=\"title\" >      ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
            echo " </h3> <br>
            ";
            // line 23
            if (($this->getAttribute($context["modele"], "nb", array()) > 10)) {
                // line 24
                echo "                <div class=\"single-rating\"  >

                    <span class=\"on\">☆</span>
                    <span class=\"on\">☆</span>
                    <span class=\"on\">☆</span>
                    <span class=\"on\">☆</span>
                    <span class=\"on\">☆</span>
                </div>
            ";
            }
            // line 33
            echo "
            <a href=\"\"><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Baby/images/" . $this->getAttribute($context["modele"], "images", array()))), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\"/></a>
            <br>



            <h3>Lieu : ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "lieu", array()), "html", null, true);
            echo "  </h3> <br>

            <h3>Prix : ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "prix", array()), "html", null, true);
            echo "  </h3> <br>
            <h3> Le  ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["modele"], "date", array()), "Y-m-d"), "html", null, true);
            echo " </h3> <br>
            ";
            // line 43
            if (($this->getAttribute($context["modele"], "nb", array()) > 0)) {
                // line 44
                echo "

                <h3> ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "nb", array()), "html", null, true);
                echo " personnes ont aimé cette expérience</h3>
            ";
            }
            // line 48
            echo "            <br>




            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CustomDisplay", array("id" => $this->getAttribute($context["modele"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                <i class=\"glyphicon glyphicon-check\"></i>
                Consulter
            </a>


            <a href=\"\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-envelope\"></i>
                Réclamation
            </a>
            <br>
            <br>


            <hr>



        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "

    </div>
</div>

";
        
        $__internal_1fc29a7249b21f2fa23495b91a69ded596d862c771d3733c89c660195c37d6d3->leave($__internal_1fc29a7249b21f2fa23495b91a69ded596d862c771d3733c89c660195c37d6d3_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:experience:top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 72,  118 => 53,  111 => 48,  106 => 46,  102 => 44,  100 => 43,  96 => 42,  92 => 41,  87 => 39,  79 => 34,  76 => 33,  65 => 24,  63 => 23,  58 => 22,  54 => 21,  40 => 9,  34 => 8,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@HostAndGuest/layout3.html.twig\" %}






{% block contenu %}





<div class=\"new\">
    <div class=\"container\" >

        <h3 class=\"title\" align=\"center\">Expériences  <span> recommandées</span></h3>

        <br>
        <hr>
        {% for modele in modeles %}
            <h3 class=\"title\" >      {{ modele.titre }} </h3> <br>
            {% if  modele.nb > 10 %}
                <div class=\"single-rating\"  >

                    <span class=\"on\">☆</span>
                    <span class=\"on\">☆</span>
                    <span class=\"on\">☆</span>
                    <span class=\"on\">☆</span>
                    <span class=\"on\">☆</span>
                </div>
            {% endif %}

            <a href=\"\"><img src=\"{{ asset('Baby/images/'~  modele.images) }}\" class=\"img-responsive\" alt=\"\"/></a>
            <br>



            <h3>Lieu : {{ modele.lieu }}  </h3> <br>

            <h3>Prix : {{ modele.prix }}  </h3> <br>
            <h3> Le  {{ modele.date|date('Y-m-d') }} </h3> <br>
            {% if  modele.nb > 0 %}


                <h3> {{ modele.nb }} personnes ont aimé cette expérience</h3>
            {% endif %}
            <br>




            <a href=\"{{path('CustomDisplay',{'id':modele.id})}}\" class=\"btn btn-primary\">
                <i class=\"glyphicon glyphicon-check\"></i>
                Consulter
            </a>


            <a href=\"\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-envelope\"></i>
                Réclamation
            </a>
            <br>
            <br>


            <hr>



        {% endfor %}


    </div>
</div>

{% endblock %}", "HostAndGuestBundle:experience:top.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/experience/top.html.twig");
    }
}
