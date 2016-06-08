<?php

/* VideothequeBundle:Security:login.html.twig */
class __TwigTemplate_acc22ee99db69ea9592d4323e315773b752a9abc6d6f5c48f592c38b00698abd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "VideothequeBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dc4ab0fc9744d0fb9069e7f55fcd521615b9041406c9cedbce709426cb11020 = $this->env->getExtension("native_profiler");
        $__internal_2dc4ab0fc9744d0fb9069e7f55fcd521615b9041406c9cedbce709426cb11020->enter($__internal_2dc4ab0fc9744d0fb9069e7f55fcd521615b9041406c9cedbce709426cb11020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideothequeBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dc4ab0fc9744d0fb9069e7f55fcd521615b9041406c9cedbce709426cb11020->leave($__internal_2dc4ab0fc9744d0fb9069e7f55fcd521615b9041406c9cedbce709426cb11020_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_14fc9f29641ddedd9d3a3984169562886bf9f731f4bf4a2d9793ad56e0732e36 = $this->env->getExtension("native_profiler");
        $__internal_14fc9f29641ddedd9d3a3984169562886bf9f731f4bf4a2d9793ad56e0732e36->enter($__internal_14fc9f29641ddedd9d3a3984169562886bf9f731f4bf4a2d9793ad56e0732e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Authentification requise";
        
        $__internal_14fc9f29641ddedd9d3a3984169562886bf9f731f4bf4a2d9793ad56e0732e36->leave($__internal_14fc9f29641ddedd9d3a3984169562886bf9f731f4bf4a2d9793ad56e0732e36_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5c84e52fb1d538f66a20b25510d3dc9e4b31ff8d486d701dffaacf2435bf1ce = $this->env->getExtension("native_profiler");
        $__internal_b5c84e52fb1d538f66a20b25510d3dc9e4b31ff8d486d701dffaacf2435bf1ce->enter($__internal_b5c84e52fb1d538f66a20b25510d3dc9e4b31ff8d486d701dffaacf2435bf1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("_security_login_check");
        echo "\" method=\"POST\">

        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("videotheque_admin");
        echo "\" />

        <div>
            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <input type=\"submit\" name=\"login\" value=\"submit\" />

    </form>
";
        
        $__internal_b5c84e52fb1d538f66a20b25510d3dc9e4b31ff8d486d701dffaacf2435bf1ce->leave($__internal_b5c84e52fb1d538f66a20b25510d3dc9e4b31ff8d486d701dffaacf2435bf1ce_prof);

    }

    public function getTemplateName()
    {
        return "VideothequeBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  70 => 11,  65 => 9,  62 => 8,  56 => 6,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Authentification requise{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div class="error">{{ error.message }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('_security_login_check') }}" method="POST">*/
/* */
/*         <input type="hidden" name="_target_path" value="{{ url('videotheque_admin') }}" />*/
/* */
/*         <div>*/
/*             <label for="username">Username:</label>*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*         </div>*/
/* */
/*         <div>*/
/*             <label for="password">Password:</label>*/
/*             <input type="password" id="password" name="_password" />*/
/*         </div>*/
/* */
/*         <input type="submit" name="login" value="submit" />*/
/* */
/*     </form>*/
/* {% endblock %}*/
