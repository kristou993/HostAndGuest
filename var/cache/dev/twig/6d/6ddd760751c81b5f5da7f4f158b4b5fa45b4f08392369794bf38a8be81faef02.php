<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_e344942b7d6d3f0d7153828f0ebf486e2c2c740043e884f8f1409a1da14ba243 extends Twig_Template
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
        $__internal_1c8ca5cf8e12b0c90f8f5e02fa1d65714669ac9239f7aab6a14c19d8800947c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8ca5cf8e12b0c90f8f5e02fa1d65714669ac9239f7aab6a14c19d8800947c7->enter($__internal_1c8ca5cf8e12b0c90f8f5e02fa1d65714669ac9239f7aab6a14c19d8800947c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_1c8ca5cf8e12b0c90f8f5e02fa1d65714669ac9239f7aab6a14c19d8800947c7->leave($__internal_1c8ca5cf8e12b0c90f8f5e02fa1d65714669ac9239f7aab6a14c19d8800947c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
