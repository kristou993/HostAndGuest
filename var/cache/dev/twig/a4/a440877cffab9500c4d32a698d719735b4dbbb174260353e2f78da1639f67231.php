<?php

/* HostAndGuestBundle:experience:UsersBackoffice.html.twig */
class __TwigTemplate_96a2dff9f75a4247229ce39e0e9a9323bc384bee337ad95170c3329c4c4f5764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutadmin.html.twig", "HostAndGuestBundle:experience:UsersBackoffice.html.twig", 1);
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
        $__internal_327d3012d9c7cbf060fc3ee5df82da00ca7ab837e368848efab52dac438eabe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327d3012d9c7cbf060fc3ee5df82da00ca7ab837e368848efab52dac438eabe0->enter($__internal_327d3012d9c7cbf060fc3ee5df82da00ca7ab837e368848efab52dac438eabe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:experience:UsersBackoffice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327d3012d9c7cbf060fc3ee5df82da00ca7ab837e368848efab52dac438eabe0->leave($__internal_327d3012d9c7cbf060fc3ee5df82da00ca7ab837e368848efab52dac438eabe0_prof);

    }

    // line 3
    public function block_admin($context, array $blocks = array())
    {
        $__internal_9d5a87cededcf8779b3eeea4b2a5f8a4575f3239e2f3ed5c961b2e48398780e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5a87cededcf8779b3eeea4b2a5f8a4575f3239e2f3ed5c961b2e48398780e7->enter($__internal_9d5a87cededcf8779b3eeea4b2a5f8a4575f3239e2f3ed5c961b2e48398780e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        // line 4
        echo "


            <h3 class=\"title1\" > <i class=\"glyphicon glyphicon-user\"></i> Liste des utilisateurs  </h3>

    <hr>
            <table border=\"2\">
                <tr>
                    <th class=\"form-title\">Username</th>
                    <th class=\"form-title\">Nom</th>

                    <th class=\"form-title\">Prenom</th>
                    <th class=\"form-title\"> Adresse mail</th>
                    <th class=\"form-title\"> Loisirs</th>

                </tr>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 21
            echo "                    <tr>

                        <td >";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "nom", array()), "html", null, true);
            echo "</td>

                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "categorie", array()), "html", null, true);
            echo "</td>
<td>  <a href=\"#\" class=\" btn btn-danger\">

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
        // line 52
        echo "
            </table>

            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 56
            echo "

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "

    <br>
    <br>

";
        
        $__internal_9d5a87cededcf8779b3eeea4b2a5f8a4575f3239e2f3ed5c961b2e48398780e7->leave($__internal_9d5a87cededcf8779b3eeea4b2a5f8a4575f3239e2f3ed5c961b2e48398780e7_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:experience:UsersBackoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 59,  122 => 56,  118 => 55,  113 => 52,  83 => 28,  79 => 27,  75 => 26,  70 => 24,  66 => 23,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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



            <h3 class=\"title1\" > <i class=\"glyphicon glyphicon-user\"></i> Liste des utilisateurs  </h3>

    <hr>
            <table border=\"2\">
                <tr>
                    <th class=\"form-title\">Username</th>
                    <th class=\"form-title\">Nom</th>

                    <th class=\"form-title\">Prenom</th>
                    <th class=\"form-title\"> Adresse mail</th>
                    <th class=\"form-title\"> Loisirs</th>

                </tr>
                {% for modele in modeles %}
                    <tr>

                        <td >{{ modele.username }}</td>
                        <td>{{ modele.nom }}</td>

                        <td>{{ modele.prenom }}</td>
                        <td>{{ modele.email }}</td>
                        <td>{{ modele.categorie }}</td>
<td>  <a href=\"#\" class=\" btn btn-danger\">

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

{% endblock %}
", "HostAndGuestBundle:experience:UsersBackoffice.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/experience/UsersBackoffice.html.twig");
    }
}
