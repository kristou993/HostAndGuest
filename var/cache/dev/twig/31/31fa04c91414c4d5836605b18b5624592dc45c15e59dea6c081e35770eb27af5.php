<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e1ff4909d6485254c0688d42fcd1ea13cfff966fee54ce6295a6d60864506414 extends Twig_Template
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
        $__internal_36aca1eabff46d32aa6b34ca958d6522bb0fb996e1ec7e0051525030b32ba410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36aca1eabff46d32aa6b34ca958d6522bb0fb996e1ec7e0051525030b32ba410->enter($__internal_36aca1eabff46d32aa6b34ca958d6522bb0fb996e1ec7e0051525030b32ba410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_36aca1eabff46d32aa6b34ca958d6522bb0fb996e1ec7e0051525030b32ba410->leave($__internal_36aca1eabff46d32aa6b34ca958d6522bb0fb996e1ec7e0051525030b32ba410_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
