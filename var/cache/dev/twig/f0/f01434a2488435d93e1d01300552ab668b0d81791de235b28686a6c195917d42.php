<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f7be510b74931ceef63cc99c2c20ab9a1430fe80344214ff009ae1d6d0a1818b extends Twig_Template
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
        $__internal_0f3f86dd1f4dacda25457058daa7368f1de1b67d7f9066d50eef3169f1c3bac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3f86dd1f4dacda25457058daa7368f1de1b67d7f9066d50eef3169f1c3bac5->enter($__internal_0f3f86dd1f4dacda25457058daa7368f1de1b67d7f9066d50eef3169f1c3bac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0f3f86dd1f4dacda25457058daa7368f1de1b67d7f9066d50eef3169f1c3bac5->leave($__internal_0f3f86dd1f4dacda25457058daa7368f1de1b67d7f9066d50eef3169f1c3bac5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
