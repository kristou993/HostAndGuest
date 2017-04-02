<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_2306da27e0f5c73a6efe9876139c654047fba2292a564d9b5b0862412bc8ff2e extends Twig_Template
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
        $__internal_7c8dceee98b5f208fc2a052ecca18d17510abc4088a2be8b7dcc817c72a7c54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8dceee98b5f208fc2a052ecca18d17510abc4088a2be8b7dcc817c72a7c54f->enter($__internal_7c8dceee98b5f208fc2a052ecca18d17510abc4088a2be8b7dcc817c72a7c54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7c8dceee98b5f208fc2a052ecca18d17510abc4088a2be8b7dcc817c72a7c54f->leave($__internal_7c8dceee98b5f208fc2a052ecca18d17510abc4088a2be8b7dcc817c72a7c54f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
