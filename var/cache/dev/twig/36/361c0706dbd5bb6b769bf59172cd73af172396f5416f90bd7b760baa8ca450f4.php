<?php

/* genre/show.html.twig */
class __TwigTemplate_2b540ba84f906f5c95cca162af8a552b04dc652bd9b49df0face147a322eeabc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genre/show.html.twig", 1);
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
        $__internal_b02441eb837be263585b13e1603a257c1b495d94557e1119c4b11cf301ea8511 = $this->env->getExtension("native_profiler");
        $__internal_b02441eb837be263585b13e1603a257c1b495d94557e1119c4b11cf301ea8511->enter($__internal_b02441eb837be263585b13e1603a257c1b495d94557e1119c4b11cf301ea8511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genre/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b02441eb837be263585b13e1603a257c1b495d94557e1119c4b11cf301ea8511->leave($__internal_b02441eb837be263585b13e1603a257c1b495d94557e1119c4b11cf301ea8511_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac16746a7d99c0a4db812dbb6d3a8f4657abc9869baa579f5162ce07deb5fa47 = $this->env->getExtension("native_profiler");
        $__internal_ac16746a7d99c0a4db812dbb6d3a8f4657abc9869baa579f5162ce07deb5fa47->enter($__internal_ac16746a7d99c0a4db812dbb6d3a8f4657abc9869baa579f5162ce07deb5fa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Genre</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Label</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "label", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("genre_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genre_edit", array("id" => $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ac16746a7d99c0a4db812dbb6d3a8f4657abc9869baa579f5162ce07deb5fa47->leave($__internal_ac16746a7d99c0a4db812dbb6d3a8f4657abc9869baa579f5162ce07deb5fa47_prof);

    }

    public function getTemplateName()
    {
        return "genre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Genre</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ genre.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Label</th>*/
/*                 <td>{{ genre.label }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('genre_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('genre_edit', { 'id': genre.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
