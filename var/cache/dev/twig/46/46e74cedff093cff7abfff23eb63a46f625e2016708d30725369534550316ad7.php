<?php

/* HostAndGuestBundle:Resetting:request_content.html.twig */
class __TwigTemplate_cf15cedeeb08fc397fd14933caad51a34d4f63dbd93134de2f43dd51d89bbae5 extends Twig_Template
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
        $__internal_d4a4b35cffa71f495b4e1a3dd7fcbd3fc565192abf50577739043586c006b40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a4b35cffa71f495b4e1a3dd7fcbd3fc565192abf50577739043586c006b40b->enter($__internal_d4a4b35cffa71f495b4e1a3dd7fcbd3fc565192abf50577739043586c006b40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_d4a4b35cffa71f495b4e1a3dd7fcbd3fc565192abf50577739043586c006b40b->leave($__internal_d4a4b35cffa71f495b4e1a3dd7fcbd3fc565192abf50577739043586c006b40b_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Resetting:request_content.html.twig";
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
", "HostAndGuestBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
