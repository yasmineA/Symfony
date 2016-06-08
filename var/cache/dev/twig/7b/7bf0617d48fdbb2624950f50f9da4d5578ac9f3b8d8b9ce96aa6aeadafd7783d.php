<?php

/* film/edit.html.twig */
class __TwigTemplate_ff00d8cdd6d7fffa44c1d06369d6b14436ff3b4b4110434798bc611d7f6c880d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "film/edit.html.twig", 1);
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
        $__internal_123a2d123a169c6cf516763bff09e5defeda4fd04ad9df8fe24ce8f22da9061e = $this->env->getExtension("native_profiler");
        $__internal_123a2d123a169c6cf516763bff09e5defeda4fd04ad9df8fe24ce8f22da9061e->enter($__internal_123a2d123a169c6cf516763bff09e5defeda4fd04ad9df8fe24ce8f22da9061e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_123a2d123a169c6cf516763bff09e5defeda4fd04ad9df8fe24ce8f22da9061e->leave($__internal_123a2d123a169c6cf516763bff09e5defeda4fd04ad9df8fe24ce8f22da9061e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47f9ed9e41bef1ab11e2a724a60ca5425483ded76a5cfe71915558200f9b5b2a = $this->env->getExtension("native_profiler");
        $__internal_47f9ed9e41bef1ab11e2a724a60ca5425483ded76a5cfe71915558200f9b5b2a->enter($__internal_47f9ed9e41bef1ab11e2a724a60ca5425483ded76a5cfe71915558200f9b5b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Film edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("film_index");
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
        
        $__internal_47f9ed9e41bef1ab11e2a724a60ca5425483ded76a5cfe71915558200f9b5b2a->leave($__internal_47f9ed9e41bef1ab11e2a724a60ca5425483ded76a5cfe71915558200f9b5b2a_prof);

    }

    public function getTemplateName()
    {
        return "film/edit.html.twig";
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
/*     <h1>Film edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('film_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
