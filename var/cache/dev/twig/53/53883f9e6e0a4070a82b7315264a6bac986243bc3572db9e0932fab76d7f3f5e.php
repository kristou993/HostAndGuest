<?php

/* HostAndGuestBundle:experience:ajoutex.html.twig */
class __TwigTemplate_425dd1e79a03e1cb9b5b0cad366160aaa2dfb35e863f0cef1fa7065d1e4b978f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HostAndGuestBundle:experience:FrontOffice.html.twig", "HostAndGuestBundle:experience:ajoutex.html.twig", 1);
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
        $__internal_8e38d193d3f288d980db6df96b324252bed534029fe1b3e277bf67d0bc2911ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e38d193d3f288d980db6df96b324252bed534029fe1b3e277bf67d0bc2911ab->enter($__internal_8e38d193d3f288d980db6df96b324252bed534029fe1b3e277bf67d0bc2911ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:experience:ajoutex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e38d193d3f288d980db6df96b324252bed534029fe1b3e277bf67d0bc2911ab->leave($__internal_8e38d193d3f288d980db6df96b324252bed534029fe1b3e277bf67d0bc2911ab_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0f89b9f2b0634cd51503a6e132b299a7c07eb7b8178def86e75040cec97f3b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f89b9f2b0634cd51503a6e132b299a7c07eb7b8178def86e75040cec97f3b17->enter($__internal_0f89b9f2b0634cd51503a6e132b299a7c07eb7b8178def86e75040cec97f3b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "
    <h3 class=\"title\">Formulaire <span>d'ajout</span></h3>
   <hr>
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), 'form_start');
        echo "
        <h2> <label for=\"email\">Titre:</label></h2> <br>
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <h2> <label for=\"email\">Description:</label></h2> <br>
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <h2> <label for=\"email\">Prix:</label></h2> <br>
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <h2> <label for=\"email\">Ville:</label></h2> <br>
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "lieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <h2> <label for=\"email\">Adresse rencontre:</label></h2> <br>
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "rencontrelieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

    <h2> <label for=\"email\">Critère de participation:</label></h2> <br>
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "critere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

    <h2> <label for=\"email\">capacité groupe</label></h2> <br>
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "capacitegroupe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <br>
        <h2> <label for=\"email\">Date:</label></h2>
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "date", array()), 'widget');
        echo "
        <h2> <label for=\"email\">Categorie:</label></h2>
        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "categorie", array()), 'widget');
        echo "

    <br>

    <h2> <label for=\"email\">Image</label></h2>
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
        
        $__internal_0f89b9f2b0634cd51503a6e132b299a7c07eb7b8178def86e75040cec97f3b17->leave($__internal_0f89b9f2b0634cd51503a6e132b299a7c07eb7b8178def86e75040cec97f3b17_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:experience:ajoutex.html.twig";
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
        <h2> <label for=\"email\">Titre:</label></h2> <br>
    {{ form_widget(ajout.titre, {'attr': {'class': 'form-control'}})  }}
        <h2> <label for=\"email\">Description:</label></h2> <br>
        {{ form_widget(ajout.description, {'attr': {'class': 'form-control'}})  }}
        <h2> <label for=\"email\">Prix:</label></h2> <br>
        {{ form_widget(ajout.prix, {'attr': {'class': 'form-control'}})  }}
        <h2> <label for=\"email\">Ville:</label></h2> <br>
    {{ form_widget(ajout.lieu, {'attr': {'class': 'form-control'}})  }}
    <h2> <label for=\"email\">Adresse rencontre:</label></h2> <br>
    {{ form_widget(ajout.rencontrelieu, {'attr': {'class': 'form-control'}})  }}

    <h2> <label for=\"email\">Critère de participation:</label></h2> <br>
    {{ form_widget(ajout.critere, {'attr': {'class': 'form-control'}})  }}

    <h2> <label for=\"email\">capacité groupe</label></h2> <br>
    {{ form_widget(ajout.capacitegroupe, {'attr': {'class': 'form-control'}})  }}
    <br>
        <h2> <label for=\"email\">Date:</label></h2>
    {{ form_widget(ajout.date)  }}
        <h2> <label for=\"email\">Categorie:</label></h2>
        {{ form_widget(ajout.categorie)  }}

    <br>

    <h2> <label for=\"email\">Image</label></h2>
        {{ form_widget(ajout.images)  }}
    <br>
    <br>
        {{ form_widget(ajout.save, {'attr': {'class': 'btn btn-primary'}})  }}


    {{ form_end (ajout)}}
    </form>
{% endblock %}", "HostAndGuestBundle:experience:ajoutex.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/experience/ajoutex.html.twig");
    }
}
