<?php

/* genre/index.html.twig */
class __TwigTemplate_9db46d90faaf609ca3de6735db833efef109df0a89c47926050f87f004f9db13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genre/index.html.twig", 1);
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
        $__internal_47f01ce11199ea69e5a94c2cbd2ec0df42d2e0dff76d8b517a874c0f09fa818d = $this->env->getExtension("native_profiler");
        $__internal_47f01ce11199ea69e5a94c2cbd2ec0df42d2e0dff76d8b517a874c0f09fa818d->enter($__internal_47f01ce11199ea69e5a94c2cbd2ec0df42d2e0dff76d8b517a874c0f09fa818d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genre/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47f01ce11199ea69e5a94c2cbd2ec0df42d2e0dff76d8b517a874c0f09fa818d->leave($__internal_47f01ce11199ea69e5a94c2cbd2ec0df42d2e0dff76d8b517a874c0f09fa818d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7891543aa67cef91ccf5ff1b584bc99d379044cb77e0ba0d9f3953319525748 = $this->env->getExtension("native_profiler");
        $__internal_f7891543aa67cef91ccf5ff1b584bc99d379044cb77e0ba0d9f3953319525748->enter($__internal_f7891543aa67cef91ccf5ff1b584bc99d379044cb77e0ba0d9f3953319525748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Genre list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Label</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genre_show", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "label", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genre_show", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genre_edit", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("genre_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_f7891543aa67cef91ccf5ff1b584bc99d379044cb77e0ba0d9f3953319525748->leave($__internal_f7891543aa67cef91ccf5ff1b584bc99d379044cb77e0ba0d9f3953319525748_prof);

    }

    public function getTemplateName()
    {
        return "genre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Genre list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Label</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for genre in genres %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('genre_show', { 'id': genre.id }) }}">{{ genre.id }}</a></td>*/
/*                 <td>{{ genre.label }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('genre_show', { 'id': genre.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('genre_edit', { 'id': genre.id }) }}">edit</a>*/
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
/*             <a href="{{ path('genre_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
