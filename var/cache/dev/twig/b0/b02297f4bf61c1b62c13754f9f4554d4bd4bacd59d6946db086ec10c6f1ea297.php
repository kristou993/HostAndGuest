<?php

/* @HostAndGuest/experience/CustonExperience.html.twig */
class __TwigTemplate_5408e0acfde496ad81b853cbd20a287958494397a41938a72d8629cbe14e651a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@HostAndGuest/experience/CustonExperience.html.twig", 1);
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
        $__internal_49b3e4e77e6870b327b58ac5370fe08cd64360f4efd8b7509119201f85a27198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b3e4e77e6870b327b58ac5370fe08cd64360f4efd8b7509119201f85a27198->enter($__internal_49b3e4e77e6870b327b58ac5370fe08cd64360f4efd8b7509119201f85a27198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/experience/CustonExperience.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49b3e4e77e6870b327b58ac5370fe08cd64360f4efd8b7509119201f85a27198->leave($__internal_49b3e4e77e6870b327b58ac5370fe08cd64360f4efd8b7509119201f85a27198_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_bd336262f2f9a9f40f3a265fc66fa4d7de79e575c423bd1a12d8829dd5a3966a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd336262f2f9a9f40f3a265fc66fa4d7de79e575c423bd1a12d8829dd5a3966a->enter($__internal_bd336262f2f9a9f40f3a265fc66fa4d7de79e575c423bd1a12d8829dd5a3966a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_bd336262f2f9a9f40f3a265fc66fa4d7de79e575c423bd1a12d8829dd5a3966a->leave($__internal_bd336262f2f9a9f40f3a265fc66fa4d7de79e575c423bd1a12d8829dd5a3966a_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/experience/CustonExperience.html.twig";
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



", "@HostAndGuest/experience/CustonExperience.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\experience\\CustonExperience.html.twig");
    }
}
