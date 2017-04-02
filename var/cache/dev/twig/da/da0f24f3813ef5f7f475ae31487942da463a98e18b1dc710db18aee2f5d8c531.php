<?php

/* HostAndGuestBundle:experience:expbackoffice.html.twig */
class __TwigTemplate_5aa9deb49b932f51dc23b0e8a20729d915b93e0186d18f195c566481748eeb43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutadmin.html.twig", "HostAndGuestBundle:experience:expbackoffice.html.twig", 1);
        $this->blocks = array(
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layoutadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a5835a077ec45b04b9eba08b3c7e61cad86c843654f74159751d7e1a136dfd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5835a077ec45b04b9eba08b3c7e61cad86c843654f74159751d7e1a136dfd0->enter($__internal_0a5835a077ec45b04b9eba08b3c7e61cad86c843654f74159751d7e1a136dfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:experience:expbackoffice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a5835a077ec45b04b9eba08b3c7e61cad86c843654f74159751d7e1a136dfd0->leave($__internal_0a5835a077ec45b04b9eba08b3c7e61cad86c843654f74159751d7e1a136dfd0_prof);

    }

    // line 3
    public function block_admin($context, array $blocks = array())
    {
        $__internal_2ce35045e11a4a79bd32d0b39080b86740966fb94c80a2e5fa98c1cebdd365f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce35045e11a4a79bd32d0b39080b86740966fb94c80a2e5fa98c1cebdd365f4->enter($__internal_2ce35045e11a4a79bd32d0b39080b86740966fb94c80a2e5fa98c1cebdd365f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        // line 4
        echo "


    <h3 class=\"title1\" > <i class=\"glyphicon glyphicon-edit\"></i> Liste des Expériences  </h3>

    <hr>
    <table border=\"2\">
        <tr>
            <th class=\"form-title\">Titre</th>
            <th class=\"form-title\">Date</th>

            <th class=\"form-title\">Description</th>
            <th class=\"form-title\"> Ville </th>
            <th class=\"form-title\"> Prix</th>
            <th class=\"form-title\"> catégorie</th>

        </tr>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 22
            echo "            <tr>

                <td >";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["modele"], "Date", array()), "Y-m-d"), "html", null, true);
            echo "</td>

                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "lieu", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "categorie", array()), "html", null, true);
            echo "</td>
                <td>  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminexperiencedelete", array("id" => $this->getAttribute($context["modele"], "id", array()))), "html", null, true);
            echo "\" class=\" btn btn-danger\">

                        Supprimer




                    </a>
                </td>

                <td>  <a href=\"#\" class=\" btn btn-primary\">

                        Modifier




                    </a>
                </td>


            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
    </table>

    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 59
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "

    <br>
    <br>

";
        
        $__internal_2ce35045e11a4a79bd32d0b39080b86740966fb94c80a2e5fa98c1cebdd365f4->leave($__internal_2ce35045e11a4a79bd32d0b39080b86740966fb94c80a2e5fa98c1cebdd365f4_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:experience:expbackoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 62,  131 => 59,  127 => 58,  122 => 55,  93 => 32,  89 => 31,  85 => 30,  80 => 28,  76 => 27,  71 => 25,  67 => 24,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layoutadmin.html.twig\" %}

{% block admin %}



    <h3 class=\"title1\" > <i class=\"glyphicon glyphicon-edit\"></i> Liste des Expériences  </h3>

    <hr>
    <table border=\"2\">
        <tr>
            <th class=\"form-title\">Titre</th>
            <th class=\"form-title\">Date</th>

            <th class=\"form-title\">Description</th>
            <th class=\"form-title\"> Ville </th>
            <th class=\"form-title\"> Prix</th>
            <th class=\"form-title\"> catégorie</th>

        </tr>
        {% for modele in modeles %}
            <tr>

                <td >{{ modele.titre }}</td>
                <td>{{ modele.Date|date('Y-m-d')  }}</td>

                <td>{{ modele.description }}</td>
                <td>{{ modele.lieu }}</td>

                <td>{{ modele.prix }}</td>
                <td>{{ modele.categorie }}</td>
                <td>  <a href=\"{{path('adminexperiencedelete',{'id':modele.id})}}\" class=\" btn btn-danger\">

                        Supprimer




                    </a>
                </td>

                <td>  <a href=\"#\" class=\" btn btn-primary\">

                        Modifier




                    </a>
                </td>


            </tr>
        {% endfor %}

    </table>

    {% for modele in modeles %}


    {% endfor %}


    <br>
    <br>

{% endblock %}", "HostAndGuestBundle:experience:expbackoffice.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/experience/expbackoffice.html.twig");
    }
}
