<?php

/* @videotheque/Default/sidebar_genres.html.twing */
class __TwigTemplate_9d6f078def30fbe99f8326e5150e1e8dfb0d66a399ca42f1ed61c73a3555a6a7 extends Twig_Template
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
        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
    }

    public function block_sidebar($context, array $blocks = array())
    {
        // line 2
        echo "    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Tri par genre</li>
        <li ";
        // line 4
        if (((isset($context["selected_genre"]) ? $context["selected_genre"] : null) < 1)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_index");
        echo "\">Tous <span class=\"badge badge-info\">";
        echo twig_escape_filter($this->env, (isset($context["total_nb_films"]) ? $context["total_nb_films"] : null), "html", null, true);
        echo "</span></a></li>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 6
            echo "            <li ";
            if (($this->getAttribute($this->getAttribute($context["genre"], "genre", array(), "array"), "id", array()) == (isset($context["selected_genre"]) ? $context["selected_genre"] : null))) {
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
    }

    public function getTemplateName()
    {
        return "@videotheque/Default/sidebar_genres.html.twing";
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  44 => 6,  40 => 5,  30 => 4,  26 => 2,  20 => 1,);
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
