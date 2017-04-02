<?php

/* HostAndGuestBundle:experience:CustonExperience.html.twig */
class __TwigTemplate_fdb536772742af37c0c25fe5ffee33f0688e3062f0a0f0080867188c79d164b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:experience:CustonExperience.html.twig", 1);
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
        $__internal_bb548d2c82ecadbb4a36d5d98072409419365a28fffa3fc846a93c2c08487685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb548d2c82ecadbb4a36d5d98072409419365a28fffa3fc846a93c2c08487685->enter($__internal_bb548d2c82ecadbb4a36d5d98072409419365a28fffa3fc846a93c2c08487685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:experience:CustonExperience.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb548d2c82ecadbb4a36d5d98072409419365a28fffa3fc846a93c2c08487685->leave($__internal_bb548d2c82ecadbb4a36d5d98072409419365a28fffa3fc846a93c2c08487685_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_861740baca02c24734e037ebd223d7c7e01a4868330b2abfb6e44de34e462db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861740baca02c24734e037ebd223d7c7e01a4868330b2abfb6e44de34e462db2->enter($__internal_861740baca02c24734e037ebd223d7c7e01a4868330b2abfb6e44de34e462db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 9
        echo "




    <div class=\"new\">
        <div class=\"container\" >

            <h3 class=\"title\">Mes  <span>Expériences</span></h3>

            <br>
            <hr>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 22
            echo "                <h1 >      ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
            echo " </h1> <br>

                <a href=\"\"><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Baby/images/" . $this->getAttribute($context["modele"], "images", array()))), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\"/></a>
                <br>


                <h3  >Description : ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "description", array()), "html", null, true);
            echo "  </h3> <br>
                <h3  >Lieu : ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "lieu", array()), "html", null, true);
            echo "  </h3> <br>
                <h3>Prix : ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "prix", array()), "html", null, true);
            echo "  </h3> <br>
                <h3> Le  ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["modele"], "date", array()), "Y-m-d"), "html", null, true);
            echo " </h3> <br>

            <h3> Categorie : ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "categorie", array()), "html", null, true);
            echo "</h3>
                <br>
            <a href=\"\" class=\"btn btn-primary\">
                <i class=\"glyphicon glyphicon-pencil\"></i>
                Modifier
            </a>

            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteex", array("id" => $this->getAttribute($context["modele"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-envelope\"></i>
                Supprimer




            </a>
                <br>
                <br>
                <hr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "

        </div>
    </div>























";
        
        $__internal_861740baca02c24734e037ebd223d7c7e01a4868330b2abfb6e44de34e462db2->leave($__internal_861740baca02c24734e037ebd223d7c7e01a4868330b2abfb6e44de34e462db2_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:experience:CustonExperience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 52,  98 => 40,  88 => 33,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  64 => 24,  58 => 22,  54 => 21,  40 => 9,  34 => 8,  11 => 1,);
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

            <h3 class=\"title\">Mes  <span>Expériences</span></h3>

            <br>
            <hr>
            {% for modele in modeles %}
                <h1 >      {{ modele.titre }} </h1> <br>

                <a href=\"\"><img src=\"{{ asset('Baby/images/'~  modele.images) }}\" class=\"img-responsive\" alt=\"\"/></a>
                <br>


                <h3  >Description : {{ modele.description }}  </h3> <br>
                <h3  >Lieu : {{ modele.lieu }}  </h3> <br>
                <h3>Prix : {{ modele.prix }}  </h3> <br>
                <h3> Le  {{ modele.date|date('Y-m-d') }} </h3> <br>

            <h3> Categorie : {{ modele.categorie }}</h3>
                <br>
            <a href=\"\" class=\"btn btn-primary\">
                <i class=\"glyphicon glyphicon-pencil\"></i>
                Modifier
            </a>

            <a href=\"{{path('deleteex',{'id':modele.id})}}\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-envelope\"></i>
                Supprimer




            </a>
                <br>
                <br>
                <hr>
            {% endfor %}


        </div>
    </div>























{% endblock %}



", "HostAndGuestBundle:experience:CustonExperience.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/experience/CustonExperience.html.twig");
    }
}
