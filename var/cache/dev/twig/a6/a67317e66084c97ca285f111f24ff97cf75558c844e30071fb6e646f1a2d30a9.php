<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a7f49aa5de5673d7e7f9e05509d0dea631e49b9eabb1e8db2bb55769e009be2e extends Twig_Template
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
        $__internal_7fa062fa1917d557ba6e640ee71ed7c072feba349b20032895e1acdbbc83dbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa062fa1917d557ba6e640ee71ed7c072feba349b20032895e1acdbbc83dbdb->enter($__internal_7fa062fa1917d557ba6e640ee71ed7c072feba349b20032895e1acdbbc83dbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7fa062fa1917d557ba6e640ee71ed7c072feba349b20032895e1acdbbc83dbdb->leave($__internal_7fa062fa1917d557ba6e640ee71ed7c072feba349b20032895e1acdbbc83dbdb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
