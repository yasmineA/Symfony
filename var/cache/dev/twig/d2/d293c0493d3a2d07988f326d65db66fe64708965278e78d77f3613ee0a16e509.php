<?php

/* genre/edit.html.twig */
class __TwigTemplate_4e2a52d0798adfd588ce1facf688abfb046ffb2888cfed718a69bb4e0f2d5ee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genre/edit.html.twig", 1);
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
        $__internal_8e5936f7c7835b6a64e1e85e89528c88eec2d65debf6098c205dda82488400fa = $this->env->getExtension("native_profiler");
        $__internal_8e5936f7c7835b6a64e1e85e89528c88eec2d65debf6098c205dda82488400fa->enter($__internal_8e5936f7c7835b6a64e1e85e89528c88eec2d65debf6098c205dda82488400fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genre/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e5936f7c7835b6a64e1e85e89528c88eec2d65debf6098c205dda82488400fa->leave($__internal_8e5936f7c7835b6a64e1e85e89528c88eec2d65debf6098c205dda82488400fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27b95619fadf41925093176281df03e3f0c9dc47a5fff04370866cea6e117d08 = $this->env->getExtension("native_profiler");
        $__internal_27b95619fadf41925093176281df03e3f0c9dc47a5fff04370866cea6e117d08->enter($__internal_27b95619fadf41925093176281df03e3f0c9dc47a5fff04370866cea6e117d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Genre edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("genre_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_27b95619fadf41925093176281df03e3f0c9dc47a5fff04370866cea6e117d08->leave($__internal_27b95619fadf41925093176281df03e3f0c9dc47a5fff04370866cea6e117d08_prof);

    }

    public function getTemplateName()
    {
        return "genre/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Genre edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('genre_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
