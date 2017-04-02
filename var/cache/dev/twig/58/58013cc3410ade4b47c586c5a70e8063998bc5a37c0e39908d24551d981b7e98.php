<?php

/* @HostAndGuest/Security/login_content.html.twig */
class __TwigTemplate_e7a3e4041c4ed66f404d8ffce4e00c3130b4f65a94e7b5339a984ade29174972 extends Twig_Template
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
        $__internal_d52743d7f3ab45ed607992da52c5dba1b5274cafe0ec49829dea3d2b4d8342d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52743d7f3ab45ed607992da52c5dba1b5274cafe0ec49829dea3d2b4d8342d1->enter($__internal_d52743d7f3ab45ed607992da52c5dba1b5274cafe0ec49829dea3d2b4d8342d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Security/login_content.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<div align=\"center\">

     <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-inline\">




        ";
        // line 12
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 13
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 15
        echo "

         <div class=\"form-group\">
            <h2> <label for=\"email\">Username:</label></h2>
       <input type=\"text\" id=\"username\" name=\"_username\"  required=\"required\"  class=\"form-control\" />
         </div>



         <div class=\"form-group\">
             <h2> <label for=\"email\">Password:</label></h2>
          <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"  />


         </div>
         <br><br>
         <div class=\"checkbox\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
         <br>
    <h2><label for=\"remember_me\"> se souvenir de moi</label></h2>
         </div>
    <br>
         <br>
         <br>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\" btn btn-primary\" value=\"Connexion\" />

<br>

     <br>

         <h2>Sign in ? <a href=";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo ">Click here to sign in</a>.</h2>
         <br>
         <h2>Forgot your password? <a href=";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo ">Click here to reset it</a>.</h2>
     </form>
</div>







";
        
        $__internal_d52743d7f3ab45ed607992da52c5dba1b5274cafe0ec49829dea3d2b4d8342d1->leave($__internal_d52743d7f3ab45ed607992da52c5dba1b5274cafe0ec49829dea3d2b4d8342d1_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 47,  83 => 45,  51 => 15,  45 => 13,  43 => 12,  35 => 7,  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div align=\"center\">

     <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-inline\">




        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}


         <div class=\"form-group\">
            <h2> <label for=\"email\">Username:</label></h2>
       <input type=\"text\" id=\"username\" name=\"_username\"  required=\"required\"  class=\"form-control\" />
         </div>



         <div class=\"form-group\">
             <h2> <label for=\"email\">Password:</label></h2>
          <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"  />


         </div>
         <br><br>
         <div class=\"checkbox\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
         <br>
    <h2><label for=\"remember_me\"> se souvenir de moi</label></h2>
         </div>
    <br>
         <br>
         <br>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\" btn btn-primary\" value=\"Connexion\" />

<br>

     <br>

         <h2>Sign in ? <a href={{ path('fos_user_registration_register') }}>Click here to sign in</a>.</h2>
         <br>
         <h2>Forgot your password? <a href={{ path('fos_user_resetting_request' )}}>Click here to reset it</a>.</h2>
     </form>
</div>







", "@HostAndGuest/Security/login_content.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
