<?php

/* @HostAndGuest/Registration/register_content.html.twig */
class __TwigTemplate_3e8f7112c81846bb983c92eb782d9ca80ea6c219e1cfd4cd9ef517b48c1e49a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d88a2e55f24879f7bcfb4b9b9cb67ed771e5edb9c12560031b5f79566c5f359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d88a2e55f24879f7bcfb4b9b9cb67ed771e5edb9c12560031b5f79566c5f359->enter($__internal_6d88a2e55f24879f7bcfb4b9b9cb67ed771e5edb9c12560031b5f79566c5f359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Registration/register_content.html.twig"));

        // line 2
        echo "
<h3 class=\"title\">Création <span>Compte</span></h3>
";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "


<h2> <label for=\"email\">Nom:</label></h2>
";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h2> <label for=\"email\">Prenom:</label></h2>
";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h2> <label for=\"email\">Adresse:</label></h2>
";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h2> <label for=\"email\">Adresse Mail:</label></h2>
";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h2> <label for=\"email\">Categorie:</label></h2>
";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget');
        echo "
<h2> <label for=\"email\">Username:</label></h2>
";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h2> <label for=\"email\">Password:</label></h2>

";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h2> <label for=\"email\">Confirm Password:</label></h2>

";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<br>
<br>
        <input type=\"submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "  \" class=\"btn btn-primary\"  />


";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6d88a2e55f24879f7bcfb4b9b9cb67ed771e5edb9c12560031b5f79566c5f359->leave($__internal_6d88a2e55f24879f7bcfb4b9b9cb67ed771e5edb9c12560031b5f79566c5f359_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  76 => 27,  70 => 24,  64 => 21,  58 => 18,  53 => 16,  48 => 14,  43 => 12,  38 => 10,  33 => 8,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<h3 class=\"title\">Création <span>Compte</span></h3>
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}


<h2> <label for=\"email\">Nom:</label></h2>
{{ form_widget(form.nom, {'attr': {'class': 'form-control'}})  }}
<h2> <label for=\"email\">Prenom:</label></h2>
{{ form_widget(form.prenom, {'attr': {'class': 'form-control'}})  }}
<h2> <label for=\"email\">Adresse:</label></h2>
{{ form_widget(form.adresse, {'attr': {'class': 'form-control'}})  }}
<h2> <label for=\"email\">Adresse Mail:</label></h2>
{{ form_widget(form.email, {'attr': {'class': 'form-control'}})  }}
<h2> <label for=\"email\">Categorie:</label></h2>
{{ form_widget(form.categorie)  }}
<h2> <label for=\"email\">Username:</label></h2>
{{ form_widget(form.username, {'attr': {'class': 'form-control'}})  }}
<h2> <label for=\"email\">Password:</label></h2>

{{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}})  }}
<h2> <label for=\"email\">Confirm Password:</label></h2>

{{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}})  }}
<br>
<br>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}  \" class=\"btn btn-primary\"  />


{{ form_end(form) }}
", "@HostAndGuest/Registration/register_content.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
