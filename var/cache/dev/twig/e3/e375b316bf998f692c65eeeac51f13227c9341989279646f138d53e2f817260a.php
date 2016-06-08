<?php

/* VideothequeBundle:Default:videotheque_home.html.twig */
class __TwigTemplate_2ed14ffb1fc73652e4b0816cdf5356c411f18b612dfe25c4d28a5e6d0bbd0ac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "VideothequeBundle:Default:videotheque_home.html.twig", 1);
        $_trait_0 = $this->loadTemplate("VideothequeBundle:Default:sidebar_genres.html.twig", "VideothequeBundle:Default:videotheque_home.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."VideothequeBundle:Default:sidebar_genres.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'body' => array($this, 'block_body'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b48f1b96869e32c5ead747435abc673e53bc78fbe4bd8eef09b5f50ef24f487 = $this->env->getExtension("native_profiler");
        $__internal_4b48f1b96869e32c5ead747435abc673e53bc78fbe4bd8eef09b5f50ef24f487->enter($__internal_4b48f1b96869e32c5ead747435abc673e53bc78fbe4bd8eef09b5f50ef24f487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideothequeBundle:Default:videotheque_home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b48f1b96869e32c5ead747435abc673e53bc78fbe4bd8eef09b5f50ef24f487->leave($__internal_4b48f1b96869e32c5ead747435abc673e53bc78fbe4bd8eef09b5f50ef24f487_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_02ecf24134fff67eb876052cab167b552881d45a583ff69b6721ccdb249619f3 = $this->env->getExtension("native_profiler");
        $__internal_02ecf24134fff67eb876052cab167b552881d45a583ff69b6721ccdb249619f3->enter($__internal_02ecf24134fff67eb876052cab167b552881d45a583ff69b6721ccdb249619f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 6
            echo "        <div class=\"block\">
            <h2>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</h2>
            <div class=\"tags-list\">";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["film"], "listeDesGenres", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Genre"]) {
                if (($this->getAttribute($context["loop"], "index", array()) > 1)) {
                    echo ",";
                }
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Genre"], "label", array()), "html", null, true);
                echo "</span>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
            <div class=\"illustration\">
                ";
            // line 10
            if ($this->getAttribute($context["film"], "illustration", array(), "any", true, true)) {
                // line 11
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "illustration", array()), "html", null, true);
                echo "\" />
                ";
            } else {
                // line 13
                echo "                    <span class=\"fa fa-ban\"></span>
                ";
            }
            // line 15
            echo "            </div>
            <div class=\"description\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "description", array()), "html", null, true);
            echo "
            </div>
            <div class=\"read-more\">
                <a class=\"btn btn-primary btn-small\" href=\"#\">Voir</a>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "<div class=\"alert\">D�sol�, il n'y a aucun film dans cette section</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_02ecf24134fff67eb876052cab167b552881d45a583ff69b6721ccdb249619f3->leave($__internal_02ecf24134fff67eb876052cab167b552881d45a583ff69b6721ccdb249619f3_prof);

    }

    public function getTemplateName()
    {
        return "VideothequeBundle:Default:videotheque_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 23,  120 => 17,  116 => 15,  112 => 13,  106 => 11,  104 => 10,  66 => 8,  62 => 7,  59 => 6,  53 => 5,  47 => 4,  32 => 1,  14 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% use 'VideothequeBundle:Default:sidebar_genres.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% for film in films %}*/
/*         <div class="block">*/
/*             <h2>{{ film.titre }}</h2>*/
/*             <div class="tags-list">{% for Genre in film.listeDesGenres %}{% if loop.index > 1 %},{% endif %} <span class="badge">{{ Genre.label }}</span>{% endfor %}</div>*/
/*             <div class="illustration">*/
/*                 {% if film.illustration is defined %}*/
/*                     <img src="{{ film.illustration }}" />*/
/*                 {% else %}*/
/*                     <span class="fa fa-ban"></span>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="description">*/
/*                 {{ film.description }}*/
/*             </div>*/
/*             <div class="read-more">*/
/*                 <a class="btn btn-primary btn-small" href="#">Voir</a>*/
/*             </div>*/
/*         </div>*/
/*     {% else %}<div class="alert">D�sol�, il n'y a aucun film dans cette section</div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
