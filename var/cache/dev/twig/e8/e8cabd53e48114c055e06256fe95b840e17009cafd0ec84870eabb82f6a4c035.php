<?php

/* HostAndGuestBundle:experience:FrontOffice.html.twig */
class __TwigTemplate_9e0a856df68de8517adb0a42a32bb7060af655d1284a7452ab9383a24a301dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:experience:FrontOffice.html.twig", 2);
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
        $__internal_c56de7929c9cb752d93a029c2258f8b1294bac98840919fd06d154960874aa5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56de7929c9cb752d93a029c2258f8b1294bac98840919fd06d154960874aa5f->enter($__internal_c56de7929c9cb752d93a029c2258f8b1294bac98840919fd06d154960874aa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:experience:FrontOffice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c56de7929c9cb752d93a029c2258f8b1294bac98840919fd06d154960874aa5f->leave($__internal_c56de7929c9cb752d93a029c2258f8b1294bac98840919fd06d154960874aa5f_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_af1f19d2dc75cc5fb46406dc878bcebeb2e068718918c445b28f0947ee1552b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1f19d2dc75cc5fb46406dc878bcebeb2e068718918c445b28f0947ee1552b8->enter($__internal_af1f19d2dc75cc5fb46406dc878bcebeb2e068718918c445b28f0947ee1552b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "




<div class=\"new\">
    <div class=\"container\" >

            <h3 class=\"title\">Fil <span>d'actualités</span></h3>

            <br>
        <hr>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 23
            echo "                <h3 class=\"title\" >  Experience    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
            echo " </h3> <br>


                <a href=\"\"><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Baby/images/" . $this->getAttribute($context["modele"], "images", array()))), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\"/></a>
                <br>



                <h3>Lieu : ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "lieu", array()), "html", null, true);
            echo "  </h3> <br>
                <h3>Prix : ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "prix", array()), "html", null, true);
            echo " euro  </h3> <br>
                <h3> Le  ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["modele"], "date", array()), "Y-m-d"), "html", null, true);
            echo " </h3> <br>
                ";
            // line 34
            if (($this->getAttribute($context["modele"], "nb", array()) > 0)) {
                // line 35
                echo "

                <h3> ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "nb", array()), "html", null, true);
                echo " personnes ont aimé cette expérience</h3>
                ";
            }
            // line 39
            echo "                <br>

                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Like", array("id" => $this->getAttribute($context["modele"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                    <i class=\"glyphicon glyphicon-heart\"></i>
                    J'aime
                </a>
                <a href=\"";
            // line 45
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
        // line 64
        echo "

    </div>
</div>



";
        
        $__internal_af1f19d2dc75cc5fb46406dc878bcebeb2e068718918c445b28f0947ee1552b8->leave($__internal_af1f19d2dc75cc5fb46406dc878bcebeb2e068718918c445b28f0947ee1552b8_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:experience:FrontOffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 64,  107 => 45,  100 => 41,  96 => 39,  91 => 37,  87 => 35,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  65 => 26,  58 => 23,  54 => 22,  40 => 10,  34 => 9,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@HostAndGuest/layout3.html.twig\" %}






{% block contenu %}





<div class=\"new\">
    <div class=\"container\" >

            <h3 class=\"title\">Fil <span>d'actualités</span></h3>

            <br>
        <hr>
            {% for modele in modeles %}
                <h3 class=\"title\" >  Experience    {{ modele.titre }} </h3> <br>


                <a href=\"\"><img src=\"{{ asset('Baby/images/'~  modele.images) }}\" class=\"img-responsive\" alt=\"\"/></a>
                <br>



                <h3>Lieu : {{ modele.lieu }}  </h3> <br>
                <h3>Prix : {{ modele.prix }} euro  </h3> <br>
                <h3> Le  {{ modele.date|date('Y-m-d') }} </h3> <br>
                {% if  modele.nb > 0 %}


                <h3> {{ modele.nb }} personnes ont aimé cette expérience</h3>
                {% endif %}
                <br>

                <a href=\"{{path('Like',{'id':modele.id})}}\" class=\"btn btn-danger\">
                    <i class=\"glyphicon glyphicon-heart\"></i>
                    J'aime
                </a>
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



{% endblock %}



", "HostAndGuestBundle:experience:FrontOffice.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\experience\\FrontOffice.html.twig");
    }
}
