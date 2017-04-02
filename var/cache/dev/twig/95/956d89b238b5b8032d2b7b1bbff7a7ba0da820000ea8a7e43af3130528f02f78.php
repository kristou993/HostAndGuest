<?php

/* @HostAndGuest/experience/ajoutex.html.twig */
class __TwigTemplate_513821ddc265fcd8af2bac2916c5aaf8ca6b34ae41e9973b82f20599c4c22fb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HostAndGuestBundle:experience:FrontOffice.html.twig", "@HostAndGuest/experience/ajoutex.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HostAndGuestBundle:experience:FrontOffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3a4481279dd4c766661140fc00115850a1801109092286dad598bc9cc653d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a4481279dd4c766661140fc00115850a1801109092286dad598bc9cc653d65->enter($__internal_c3a4481279dd4c766661140fc00115850a1801109092286dad598bc9cc653d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/experience/ajoutex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3a4481279dd4c766661140fc00115850a1801109092286dad598bc9cc653d65->leave($__internal_c3a4481279dd4c766661140fc00115850a1801109092286dad598bc9cc653d65_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5f63b063a4c88aa7a4e29e07b2c3ee78a5a2fc2390f4c6c3591f8ab1bf11d127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f63b063a4c88aa7a4e29e07b2c3ee78a5a2fc2390f4c6c3591f8ab1bf11d127->enter($__internal_5f63b063a4c88aa7a4e29e07b2c3ee78a5a2fc2390f4c6c3591f8ab1bf11d127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "
    <h3 class=\"title\">Formulaire <span>d'ajout</span></h3>
   <hr>
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), 'form_start');
        echo "
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Titre:</label></h3> <br>
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Description:</label></h3> <br>
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Prix:</label></h3> <br>
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Ville:</label></h3> <br>
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "lieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <h3 style=\"color: #CC7832\"> <label for=\"email\">Adresse rencontre:</label></h3> <br>
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "rencontrelieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

    <h3 style=\"color: #CC7832\"> <label for=\"email\">Critère de participation:</label></h3> <br>
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "critere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

    <h3 style=\"color: #CC7832\"> <label for=\"email\">capacité groupe</label></h3> <br>
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "capacitegroupe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <br>
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Date:</label></h3>
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "date", array()), 'widget');
        echo "
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Categorie:</label></h3>
        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "categorie", array()), 'widget');
        echo "

    <br>

    <h3 style=\"color: #CC7832\"> <label for=\"email\">Image</label></h3>
        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "images", array()), 'widget');
        echo "
    <br>
    <br>
        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "


    ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), 'form_end');
        echo "
    </form>
";
        
        $__internal_5f63b063a4c88aa7a4e29e07b2c3ee78a5a2fc2390f4c6c3591f8ab1bf11d127->leave($__internal_5f63b063a4c88aa7a4e29e07b2c3ee78a5a2fc2390f4c6c3591f8ab1bf11d127_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/experience/ajoutex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 39,  107 => 36,  101 => 33,  93 => 28,  88 => 26,  82 => 23,  76 => 20,  70 => 17,  65 => 15,  60 => 13,  55 => 11,  50 => 9,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"HostAndGuestBundle:experience:FrontOffice.html.twig\" %}

{% block contenu %}

    <h3 class=\"title\">Formulaire <span>d'ajout</span></h3>
   <hr>
    {{ form_start(ajout) }}
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Titre:</label></h3> <br>
    {{ form_widget(ajout.titre, {'attr': {'class': 'form-control'}})  }}
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Description:</label></h3> <br>
        {{ form_widget(ajout.description, {'attr': {'class': 'form-control'}})  }}
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Prix:</label></h3> <br>
        {{ form_widget(ajout.prix, {'attr': {'class': 'form-control'}})  }}
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Ville:</label></h3> <br>
    {{ form_widget(ajout.lieu, {'attr': {'class': 'form-control'}})  }}
    <h3 style=\"color: #CC7832\"> <label for=\"email\">Adresse rencontre:</label></h3> <br>
    {{ form_widget(ajout.rencontrelieu, {'attr': {'class': 'form-control'}})  }}

    <h3 style=\"color: #CC7832\"> <label for=\"email\">Critère de participation:</label></h3> <br>
    {{ form_widget(ajout.critere, {'attr': {'class': 'form-control'}})  }}

    <h3 style=\"color: #CC7832\"> <label for=\"email\">capacité groupe</label></h3> <br>
    {{ form_widget(ajout.capacitegroupe, {'attr': {'class': 'form-control'}})  }}
    <br>
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Date:</label></h3>
    {{ form_widget(ajout.date)  }}
        <h3 style=\"color: #CC7832\"> <label for=\"email\">Categorie:</label></h3>
        {{ form_widget(ajout.categorie)  }}

    <br>

    <h3 style=\"color: #CC7832\"> <label for=\"email\">Image</label></h3>
        {{ form_widget(ajout.images)  }}
    <br>
    <br>
        {{ form_widget(ajout.save, {'attr': {'class': 'btn btn-primary'}})  }}


    {{ form_end (ajout)}}
    </form>
{% endblock %}", "@HostAndGuest/experience/ajoutex.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\experience\\ajoutex.html.twig");
    }
}
