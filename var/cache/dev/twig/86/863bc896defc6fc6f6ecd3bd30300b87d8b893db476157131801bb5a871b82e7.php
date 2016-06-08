<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_22383cb7fbba1b563ee8ee9d06cdae266cf668eb66f50374a475d918000eb842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1482ccb0893fb7e85d1bf74eacf946506bd4a138abff9e5e8ac823611283acee = $this->env->getExtension("native_profiler");
        $__internal_1482ccb0893fb7e85d1bf74eacf946506bd4a138abff9e5e8ac823611283acee->enter($__internal_1482ccb0893fb7e85d1bf74eacf946506bd4a138abff9e5e8ac823611283acee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1482ccb0893fb7e85d1bf74eacf946506bd4a138abff9e5e8ac823611283acee->leave($__internal_1482ccb0893fb7e85d1bf74eacf946506bd4a138abff9e5e8ac823611283acee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36d6636eaf6b25670880b0a5b43ad5e6fd97b432a52cab960a7943b7970ed968 = $this->env->getExtension("native_profiler");
        $__internal_36d6636eaf6b25670880b0a5b43ad5e6fd97b432a52cab960a7943b7970ed968->enter($__internal_36d6636eaf6b25670880b0a5b43ad5e6fd97b432a52cab960a7943b7970ed968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36d6636eaf6b25670880b0a5b43ad5e6fd97b432a52cab960a7943b7970ed968->leave($__internal_36d6636eaf6b25670880b0a5b43ad5e6fd97b432a52cab960a7943b7970ed968_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6512e35bf4c3adf47a008b7ee868620624de9fd2957d58732e05d85b2d7cfdbb = $this->env->getExtension("native_profiler");
        $__internal_6512e35bf4c3adf47a008b7ee868620624de9fd2957d58732e05d85b2d7cfdbb->enter($__internal_6512e35bf4c3adf47a008b7ee868620624de9fd2957d58732e05d85b2d7cfdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6512e35bf4c3adf47a008b7ee868620624de9fd2957d58732e05d85b2d7cfdbb->leave($__internal_6512e35bf4c3adf47a008b7ee868620624de9fd2957d58732e05d85b2d7cfdbb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1da70cce06cdf600d64b47c72469c7e47c0650bc6bce0a7bc0cc010b7adad6fc = $this->env->getExtension("native_profiler");
        $__internal_1da70cce06cdf600d64b47c72469c7e47c0650bc6bce0a7bc0cc010b7adad6fc->enter($__internal_1da70cce06cdf600d64b47c72469c7e47c0650bc6bce0a7bc0cc010b7adad6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1da70cce06cdf600d64b47c72469c7e47c0650bc6bce0a7bc0cc010b7adad6fc->leave($__internal_1da70cce06cdf600d64b47c72469c7e47c0650bc6bce0a7bc0cc010b7adad6fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
