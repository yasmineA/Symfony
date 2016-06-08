<?php

/* film/show.html.twig */
class __TwigTemplate_0eec4eaf0147c84136898db95bb93e9d82183f495ba57ca525b7e598d9130cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "film/show.html.twig", 1);
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
        $__internal_a03da351ae82721e01d5134122a4ec21bf6237d7aaf9cafe7c796dc7b1b2df61 = $this->env->getExtension("native_profiler");
        $__internal_a03da351ae82721e01d5134122a4ec21bf6237d7aaf9cafe7c796dc7b1b2df61->enter($__internal_a03da351ae82721e01d5134122a4ec21bf6237d7aaf9cafe7c796dc7b1b2df61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03da351ae82721e01d5134122a4ec21bf6237d7aaf9cafe7c796dc7b1b2df61->leave($__internal_a03da351ae82721e01d5134122a4ec21bf6237d7aaf9cafe7c796dc7b1b2df61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f03ac565f12c5cab0a3d9144f9794729424f79301d610447a9fa8e070350c874 = $this->env->getExtension("native_profiler");
        $__internal_f03ac565f12c5cab0a3d9144f9794729424f79301d610447a9fa8e070350c874->enter($__internal_f03ac565f12c5cab0a3d9144f9794729424f79301d610447a9fa8e070350c874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Film</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("film_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_edit", array("id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f03ac565f12c5cab0a3d9144f9794729424f79301d610447a9fa8e070350c874->leave($__internal_f03ac565f12c5cab0a3d9144f9794729424f79301d610447a9fa8e070350c874_prof);

    }

    public function getTemplateName()
    {
        return "film/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Film</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ film.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titre</th>*/
/*                 <td>{{ film.titre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ film.description }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('film_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('film_edit', { 'id': film.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
