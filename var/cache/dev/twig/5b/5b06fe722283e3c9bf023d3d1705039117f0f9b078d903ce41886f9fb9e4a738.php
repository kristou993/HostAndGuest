<?php

/* @HostAndGuest/experience/ConsulterEx.html.twig */
class __TwigTemplate_bf72abcbc77533b5c026dc7a8b54ac47e3219cc67861bfb1c719bff72f2f6fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@HostAndGuest/experience/ConsulterEx.html.twig", 1);
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
        $__internal_40dbf09cdc72d2cd50c2bbfac9baad2ab72bf20a1d222be430b2f768afc7f04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40dbf09cdc72d2cd50c2bbfac9baad2ab72bf20a1d222be430b2f768afc7f04f->enter($__internal_40dbf09cdc72d2cd50c2bbfac9baad2ab72bf20a1d222be430b2f768afc7f04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/experience/ConsulterEx.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40dbf09cdc72d2cd50c2bbfac9baad2ab72bf20a1d222be430b2f768afc7f04f->leave($__internal_40dbf09cdc72d2cd50c2bbfac9baad2ab72bf20a1d222be430b2f768afc7f04f_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8be86f20b32cb247bc472b5c4f70a7e959f9719e78b9fa4b63aa672b055ce0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be86f20b32cb247bc472b5c4f70a7e959f9719e78b9fa4b63aa672b055ce0c4->enter($__internal_8be86f20b32cb247bc472b5c4f70a7e959f9719e78b9fa4b63aa672b055ce0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "

    <h3 class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "titre", array()), "html", null, true);
        echo "  <span></span></h3>
    <h2> A ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "lieu", array()), "html", null, true);
        echo "</h2>
    <hr>
    <a href=\"\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Baby/images/" . $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "images", array()))), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
    <br>
        <h2> Frais de participation : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "prix", array()), "html", null, true);
        echo " Euro  </h2> <br>
        <h2> Le  ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "date", array()), "Y-m-d"), "html", null, true);
        echo " </h2> <br>
    <h2> Adresse de rencontre: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "rencontrelieu", array()), "html", null, true);
        echo "   </h2> <br>
       <p> <h2 class=\"\"> Expérience : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "categorie", array()), "html", null, true);
        echo "</h2> <br> </p>
    <h2> Proposé par  : ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</h2>
        <br>
    <hr>
    <h2>Au programme : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "description", array()), "html", null, true);
        echo "  </h2> <br>
<hr>
<h2> Critère de participation : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "critere", array()), "html", null, true);
        echo "</h2>
    <h2> Capacité de groupe : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "capacitegroupe", array()), "html", null, true);
        echo "</h2>
    <hr>
<a href=\"\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-pencil\"></i>
    Réserver
</a>

<a href=\"\" class=\"btn btn-danger\">
    <i class=\"glyphicon glyphicon-envelope\"></i>
    Réclamation

</a>


";
        
        $__internal_8be86f20b32cb247bc472b5c4f70a7e959f9719e78b9fa4b63aa672b055ce0c4->leave($__internal_8be86f20b32cb247bc472b5c4f70a7e959f9719e78b9fa4b63aa672b055ce0c4_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/experience/ConsulterEx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  85 => 21,  80 => 19,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  53 => 10,  48 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
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


    <h3 class=\"title\">{{ modele.titre }}  <span></span></h3>
    <h2> A {{ modele.lieu }}</h2>
    <hr>
    <a href=\"\"><img src=\"{{ asset('Baby/images/'~  modele.images) }}\" class=\"img-responsive\" alt=\"\"/></a>
    <br>
        <h2> Frais de participation : {{ modele.prix }} Euro  </h2> <br>
        <h2> Le  {{ modele.date|date('Y-m-d') }} </h2> <br>
    <h2> Adresse de rencontre: {{ modele.rencontrelieu }}   </h2> <br>
       <p> <h2 class=\"\"> Expérience : {{ modele.categorie }}</h2> <br> </p>
    <h2> Proposé par  : {{ username}}</h2>
        <br>
    <hr>
    <h2>Au programme : {{ modele.description }}  </h2> <br>
<hr>
<h2> Critère de participation : {{ modele.critere }}</h2>
    <h2> Capacité de groupe : {{ modele.capacitegroupe }}</h2>
    <hr>
<a href=\"\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-pencil\"></i>
    Réserver
</a>

<a href=\"\" class=\"btn btn-danger\">
    <i class=\"glyphicon glyphicon-envelope\"></i>
    Réclamation

</a>


{% endblock %}



", "@HostAndGuest/experience/ConsulterEx.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\experience\\ConsulterEx.html.twig");
    }
}
