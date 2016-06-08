<?php

/* VideothequeBundle:Default:sidebar_genres.html.twig */
class __TwigTemplate_409abe49eb2e1696ca24c8b627255c84e037c86ba4c3524a7e3ead5497e2c422 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d5ec356269ff5d27f7134217738940e289f288269d2bed127a505ec48017aa9 = $this->env->getExtension("native_profiler");
        $__internal_3d5ec356269ff5d27f7134217738940e289f288269d2bed127a505ec48017aa9->enter($__internal_3d5ec356269ff5d27f7134217738940e289f288269d2bed127a505ec48017aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideothequeBundle:Default:sidebar_genres.html.twig"));

        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
        
        $__internal_3d5ec356269ff5d27f7134217738940e289f288269d2bed127a505ec48017aa9->leave($__internal_3d5ec356269ff5d27f7134217738940e289f288269d2bed127a505ec48017aa9_prof);

    }

    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_69f6088fda6bea7695cadb42d31622877d730447177224ddbf4f6ec42983540a = $this->env->getExtension("native_profiler");
        $__internal_69f6088fda6bea7695cadb42d31622877d730447177224ddbf4f6ec42983540a->enter($__internal_69f6088fda6bea7695cadb42d31622877d730447177224ddbf4f6ec42983540a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 2
        echo "    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Tri par genre</li>
        <li ";
        // line 4
        if (((isset($context["selected_genre"]) ? $context["selected_genre"] : $this->getContext($context, "selected_genre")) < 1)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_index");
        echo "\">Tous <span class=\"badge badge-info\">";
        echo twig_escape_filter($this->env, (isset($context["total_nb_films"]) ? $context["total_nb_films"] : $this->getContext($context, "total_nb_films")), "html", null, true);
        echo "</span></a></li>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 6
            echo "            <li ";
            if (($this->getAttribute($this->getAttribute($context["genre"], "genre", array(), "array"), "id", array()) == (isset($context["selected_genre"]) ? $context["selected_genre"] : $this->getContext($context, "selected_genre")))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_filter_by_genre", array("label" => $this->getAttribute($this->getAttribute($context["genre"], "genre", array(), "array"), "label", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["genre"], "genre", array(), "array"), "label", array()), "html", null, true);
            echo " <span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "nbConcernedFilms", array(), "array"), "html", null, true);
            echo "</span></a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
";
        
        $__internal_69f6088fda6bea7695cadb42d31622877d730447177224ddbf4f6ec42983540a->leave($__internal_69f6088fda6bea7695cadb42d31622877d730447177224ddbf4f6ec42983540a_prof);

    }

    public function getTemplateName()
    {
        return "VideothequeBundle:Default:sidebar_genres.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  53 => 6,  49 => 5,  39 => 4,  35 => 2,  23 => 1,);
    }
}
/* {% block sidebar %}*/
/*     <ul class="nav nav-list">*/
/*         <li class="nav-header">Tri par genre</li>*/
/*         <li {% if selected_genre < 1 %}class="active"{% endif %}><a href="{{ path('_index') }}">Tous <span class="badge badge-info">{{ total_nb_films }}</span></a></li>*/
/*         {% for genre in genres %}*/
/*             <li {% if genre['genre'].id == selected_genre %}class="active"{% endif %}><a href="{{ path('_filter_by_genre', { 'label': genre['genre'].label }) }}">{{ genre['genre'].label }} <span class="badge badge-info">{{ genre['nbConcernedFilms'] }}</span></a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endblock %}*/
