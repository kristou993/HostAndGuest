<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_4650f7f2729db1c20aa6030fad95a84994e7783b53c001bc7f09009b1045aeb2 extends Twig_Template
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
        $__internal_4c2a8f28565bf053773d4349e7902e8203b5b06b0948fc44afbbe3e4f83841d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2a8f28565bf053773d4349e7902e8203b5b06b0948fc44afbbe3e4f83841d3->enter($__internal_4c2a8f28565bf053773d4349e7902e8203b5b06b0948fc44afbbe3e4f83841d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
<h3 class=\"title\">Création <span>Compte</span></h3> <br>
 <hr>
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "


<h3 style=\"color: #CC7832\"> <label for=\"email\">Nom:</label></h3>
";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h3 style=\"color: #CC7832\"> <label for=\"email\">Prenom:</label></h3>
";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h3 style=\"color: #CC7832\"> <label for=\"email\">Adresse:</label></h3>
";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h3 style=\"color: #CC7832\"> <label for=\"email\">Adresse Mail:</label></h3>
";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h3 style=\"color: #CC7832\"> <label for=\"email\">Categorie:</label></h3>
";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget');
        echo "
<h3 style=\"color: #CC7832\"> <label for=\"email\">Username:</label></h3>
";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h3 style=\"color: #CC7832\"> <label for=\"email\">Password:</label></h3>

";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<h3 style=\"color: #CC7832\"> <label for=\"email\">Confirm Password:</label></h3>

";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
<br>

<br>
        <input type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "  \" class=\"btn btn-primary\"   />


";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_4c2a8f28565bf053773d4349e7902e8203b5b06b0948fc44afbbe3e4f83841d3->leave($__internal_4c2a8f28565bf053773d4349e7902e8203b5b06b0948fc44afbbe3e4f83841d3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  78 => 29,  71 => 25,  65 => 22,  59 => 19,  54 => 17,  49 => 15,  44 => 13,  39 => 11,  34 => 9,  27 => 5,  22 => 2,);
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

<h3 class=\"title\">Création <span>Compte</span></h3> <br>
 <hr>
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}


<h3 style=\"color: #CC7832\"> <label for=\"email\">Nom:</label></h3>
{{ form_widget(form.nom, {'attr': {'class': 'form-control'}})  }}
<h3 style=\"color: #CC7832\"> <label for=\"email\">Prenom:</label></h3>
{{ form_widget(form.prenom, {'attr': {'class': 'form-control'}})  }}
<h3 style=\"color: #CC7832\"> <label for=\"email\">Adresse:</label></h3>
{{ form_widget(form.adresse, {'attr': {'class': 'form-control'}})  }}
<h3 style=\"color: #CC7832\"> <label for=\"email\">Adresse Mail:</label></h3>
{{ form_widget(form.email, {'attr': {'class': 'form-control'}})  }}
<h3 style=\"color: #CC7832\"> <label for=\"email\">Categorie:</label></h3>
{{ form_widget(form.categorie)  }}
<h3 style=\"color: #CC7832\"> <label for=\"email\">Username:</label></h3>
{{ form_widget(form.username, {'attr': {'class': 'form-control'}})  }}
<h3 style=\"color: #CC7832\"> <label for=\"email\">Password:</label></h3>

{{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}})  }}
<h3 style=\"color: #CC7832\"> <label for=\"email\">Confirm Password:</label></h3>

{{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}})  }}
<br>

<br>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}  \" class=\"btn btn-primary\"   />


{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
