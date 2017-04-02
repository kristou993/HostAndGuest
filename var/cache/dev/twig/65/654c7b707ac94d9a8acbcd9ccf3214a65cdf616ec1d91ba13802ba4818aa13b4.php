<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ee33ce3590e44e35a45b8869fcc6ff6c396a0ee103bb63486931af3cca7f2d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b41133ae4460f3fddf0b428906845ba9f120ef3d5d2702550f1ae020d58d3992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41133ae4460f3fddf0b428906845ba9f120ef3d5d2702550f1ae020d58d3992->enter($__internal_b41133ae4460f3fddf0b428906845ba9f120ef3d5d2702550f1ae020d58d3992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b41133ae4460f3fddf0b428906845ba9f120ef3d5d2702550f1ae020d58d3992->leave($__internal_b41133ae4460f3fddf0b428906845ba9f120ef3d5d2702550f1ae020d58d3992_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2da67e723dffbfc8853981b593a73a866d51e09652401ab6e07971baff0dd7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da67e723dffbfc8853981b593a73a866d51e09652401ab6e07971baff0dd7ae->enter($__internal_2da67e723dffbfc8853981b593a73a866d51e09652401ab6e07971baff0dd7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2da67e723dffbfc8853981b593a73a866d51e09652401ab6e07971baff0dd7ae->leave($__internal_2da67e723dffbfc8853981b593a73a866d51e09652401ab6e07971baff0dd7ae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f266562ff1ce8d246f753a906c4d8e101b569fd07df2b378b8d4246870adc72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f266562ff1ce8d246f753a906c4d8e101b569fd07df2b378b8d4246870adc72->enter($__internal_9f266562ff1ce8d246f753a906c4d8e101b569fd07df2b378b8d4246870adc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9f266562ff1ce8d246f753a906c4d8e101b569fd07df2b378b8d4246870adc72->leave($__internal_9f266562ff1ce8d246f753a906c4d8e101b569fd07df2b378b8d4246870adc72_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_510306b2c6c9fd4a3548d588d8f3f597f8597fe7c3cd32870e34a15b48550e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510306b2c6c9fd4a3548d588d8f3f597f8597fe7c3cd32870e34a15b48550e83->enter($__internal_510306b2c6c9fd4a3548d588d8f3f597f8597fe7c3cd32870e34a15b48550e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_510306b2c6c9fd4a3548d588d8f3f597f8597fe7c3cd32870e34a15b48550e83->leave($__internal_510306b2c6c9fd4a3548d588d8f3f597f8597fe7c3cd32870e34a15b48550e83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
