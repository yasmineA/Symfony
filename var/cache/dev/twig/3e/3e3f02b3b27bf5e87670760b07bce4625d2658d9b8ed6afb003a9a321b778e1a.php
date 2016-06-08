<?php

/* film/index.html.twig */
class __TwigTemplate_a8b73292ae59ce00d3e5c147d93c4eddbb7722d765e1b48a465ac2b041f48ce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "film/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09d089b62b57b2be85d2501288f1ffed0c255c89bcda73005648d460a9968ce1 = $this->env->getExtension("native_profiler");
        $__internal_09d089b62b57b2be85d2501288f1ffed0c255c89bcda73005648d460a9968ce1->enter($__internal_09d089b62b57b2be85d2501288f1ffed0c255c89bcda73005648d460a9968ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09d089b62b57b2be85d2501288f1ffed0c255c89bcda73005648d460a9968ce1->leave($__internal_09d089b62b57b2be85d2501288f1ffed0c255c89bcda73005648d460a9968ce1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4cae0488e91b41dc03b1223f6ee3efbab9c1e8c5f405495667369d1da08dd88 = $this->env->getExtension("native_profiler");
        $__internal_b4cae0488e91b41dc03b1223f6ee3efbab9c1e8c5f405495667369d1da08dd88->enter($__internal_b4cae0488e91b41dc03b1223f6ee3efbab9c1e8c5f405495667369d1da08dd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Film list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_edit", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("film_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_b4cae0488e91b41dc03b1223f6ee3efbab9c1e8c5f405495667369d1da08dd88->leave($__internal_b4cae0488e91b41dc03b1223f6ee3efbab9c1e8c5f405495667369d1da08dd88_prof);

    }

    public function getTemplateName()
    {
        return "film/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Film list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titre</th>*/
/*                 <th>Description</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for film in films %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('film_show', { 'id': film.id }) }}">{{ film.id }}</a></td>*/
/*                 <td>{{ film.titre }}</td>*/
/*                 <td>{{ film.description }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('film_show', { 'id': film.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('film_edit', { 'id': film.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('film_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
