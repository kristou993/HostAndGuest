<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_487b76eb6157293f87cd493206b4b3877f6c96ae419ab60fa971a847bab3021e extends Twig_Template
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
        $__internal_3d4820e0614d384df3f988d5d2a011e27121034fc7c7b1d89f2a1cabdadf5a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4820e0614d384df3f988d5d2a011e27121034fc7c7b1d89f2a1cabdadf5a05->enter($__internal_3d4820e0614d384df3f988d5d2a011e27121034fc7c7b1d89f2a1cabdadf5a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3d4820e0614d384df3f988d5d2a011e27121034fc7c7b1d89f2a1cabdadf5a05->leave($__internal_3d4820e0614d384df3f988d5d2a011e27121034fc7c7b1d89f2a1cabdadf5a05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
