<?php

/* HostAndGuestBundle:experience:ConsulterEx.html.twig */
class __TwigTemplate_0eb4a9efea9c9ed4773f516fc4900415dabfa8e10f5fb77341aab6f1961b4848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:experience:ConsulterEx.html.twig", 1);
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
        $__internal_4bc9b37d8553a8745b2e43ed3eb90e49435f39385482c07a034d9e69dcb8b08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc9b37d8553a8745b2e43ed3eb90e49435f39385482c07a034d9e69dcb8b08d->enter($__internal_4bc9b37d8553a8745b2e43ed3eb90e49435f39385482c07a034d9e69dcb8b08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:experience:ConsulterEx.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bc9b37d8553a8745b2e43ed3eb90e49435f39385482c07a034d9e69dcb8b08d->leave($__internal_4bc9b37d8553a8745b2e43ed3eb90e49435f39385482c07a034d9e69dcb8b08d_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7ec29d8cd7e9ee511dfe4f821f2cf225ec9dc1ae2fbbc0f05e9ef11bc5e6ca9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec29d8cd7e9ee511dfe4f821f2cf225ec9dc1ae2fbbc0f05e9ef11bc5e6ca9c->enter($__internal_7ec29d8cd7e9ee511dfe4f821f2cf225ec9dc1ae2fbbc0f05e9ef11bc5e6ca9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "


    <h3 class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "titre", array()), "html", null, true);
        echo "  <span></span></h3>

    <hr>
    <a href=\"\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Baby/images/" . $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "images", array()))), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
    <hr>
    <br>
    <h3  style=\"color: #CC7832\"> Ville :  ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "lieu", array()), "html", null, true);
        echo "</h3>
        <h3 style=\"color: #CC7832\"> Frais de participation : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "prix", array()), "html", null, true);
        echo " Euro  </h3> <br>
        <h3 style=\"color: #CC7832\"> Le  ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "date", array()), "Y-m-d"), "html", null, true);
        echo " </h3> <br>
    <h3 style=\"color: #CC7832\"> Adresse de rencontre: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "rencontrelieu", array()), "html", null, true);
        echo "   </h3> <br>
       <p> <h3 style=\"color: #CC7832\"> Expérience : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "categorie", array()), "html", null, true);
        echo "</h3> <br> </p>
    <h3 style=\"color: #CC7832\"> Proposé par  : ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</h3>
        <br>
    <hr>
    <h3 style=\"color: #CC7832\">Au programme : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "description", array()), "html", null, true);
        echo "  </h3> <br>
<hr>
<h3 style=\"color: #CC7832\"> Critère de participation : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "critere", array()), "html", null, true);
        echo "</h3>
    <h3 style=\"color: #CC7832\" > Capacité de groupe : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "capacitegroupe", array()), "html", null, true);
        echo "</h3>
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
        
        $__internal_7ec29d8cd7e9ee511dfe4f821f2cf225ec9dc1ae2fbbc0f05e9ef11bc5e6ca9c->leave($__internal_7ec29d8cd7e9ee511dfe4f821f2cf225ec9dc1ae2fbbc0f05e9ef11bc5e6ca9c_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:experience:ConsulterEx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  88 => 24,  83 => 22,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  51 => 11,  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
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

    <hr>
    <a href=\"\"><img src=\"{{ asset('Baby/images/'~  modele.images) }}\" class=\"img-responsive\" alt=\"\"/></a>
    <hr>
    <br>
    <h3  style=\"color: #CC7832\"> Ville :  {{ modele.lieu }}</h3>
        <h3 style=\"color: #CC7832\"> Frais de participation : {{ modele.prix }} Euro  </h3> <br>
        <h3 style=\"color: #CC7832\"> Le  {{ modele.date|date('Y-m-d') }} </h3> <br>
    <h3 style=\"color: #CC7832\"> Adresse de rencontre: {{ modele.rencontrelieu }}   </h3> <br>
       <p> <h3 style=\"color: #CC7832\"> Expérience : {{ modele.categorie }}</h3> <br> </p>
    <h3 style=\"color: #CC7832\"> Proposé par  : {{ username}}</h3>
        <br>
    <hr>
    <h3 style=\"color: #CC7832\">Au programme : {{ modele.description }}  </h3> <br>
<hr>
<h3 style=\"color: #CC7832\"> Critère de participation : {{ modele.critere }}</h3>
    <h3 style=\"color: #CC7832\" > Capacité de groupe : {{ modele.capacitegroupe }}</h3>
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



", "HostAndGuestBundle:experience:ConsulterEx.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\experience\\ConsulterEx.html.twig");
    }
}
