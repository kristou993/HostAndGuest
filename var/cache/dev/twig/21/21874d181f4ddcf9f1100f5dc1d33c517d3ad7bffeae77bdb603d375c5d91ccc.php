<?php

/* @HostAndGuest/Resetting/request_content.html.twig */
class __TwigTemplate_a8c18c69b3a1d8a5ec38443f1d064484728368c7dc0afe0ce8c205c542739192 extends Twig_Template
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
        $__internal_ec681b89b26e83f4691db571eb3c6295fdd44052dc79bfd84159746a73c3f64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec681b89b26e83f4691db571eb3c6295fdd44052dc79bfd84159746a73c3f64c->enter($__internal_ec681b89b26e83f4691db571eb3c6295fdd44052dc79bfd84159746a73c3f64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div class=\"form-group\">
       <h2> <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></h2>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " \"  class=\"btn btn-primary\" />
    </div>
</form>
";
        
        $__internal_ec681b89b26e83f4691db571eb3c6295fdd44052dc79bfd84159746a73c3f64c->leave($__internal_ec681b89b26e83f4691db571eb3c6295fdd44052dc79bfd84159746a73c3f64c_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  30 => 5,  25 => 3,  22 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div class=\"form-group\">
       <h2> <label for=\"username\">{{ 'resetting.request.username'|trans }}</label></h2>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }} \"  class=\"btn btn-primary\" />
    </div>
</form>
", "@HostAndGuest/Resetting/request_content.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
