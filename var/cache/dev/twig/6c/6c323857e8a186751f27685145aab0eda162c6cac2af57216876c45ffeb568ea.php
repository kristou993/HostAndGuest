<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8f55a65aacb43ba40f05904b02b1b3da45810290feb20b9da456aec89fc6560d extends Twig_Template
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
        $__internal_1087a9d572f5b04c3a525c1894ab9f2c316a0efaee0e1e973430d4a6ad4918fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1087a9d572f5b04c3a525c1894ab9f2c316a0efaee0e1e973430d4a6ad4918fb->enter($__internal_1087a9d572f5b04c3a525c1894ab9f2c316a0efaee0e1e973430d4a6ad4918fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1087a9d572f5b04c3a525c1894ab9f2c316a0efaee0e1e973430d4a6ad4918fb->leave($__internal_1087a9d572f5b04c3a525c1894ab9f2c316a0efaee0e1e973430d4a6ad4918fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
