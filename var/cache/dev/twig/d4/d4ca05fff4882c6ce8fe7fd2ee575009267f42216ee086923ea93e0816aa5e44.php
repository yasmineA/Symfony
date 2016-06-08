<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34d336665b36b7b23601c3180805698cb4f725da9a3c64b5d9e7fac8a1e50136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08ffb4f70f6a3c3e47fecb6738d71f3a379fd1dcd1aaf0306cf7e8fe8bdf4960 = $this->env->getExtension("native_profiler");
        $__internal_08ffb4f70f6a3c3e47fecb6738d71f3a379fd1dcd1aaf0306cf7e8fe8bdf4960->enter($__internal_08ffb4f70f6a3c3e47fecb6738d71f3a379fd1dcd1aaf0306cf7e8fe8bdf4960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08ffb4f70f6a3c3e47fecb6738d71f3a379fd1dcd1aaf0306cf7e8fe8bdf4960->leave($__internal_08ffb4f70f6a3c3e47fecb6738d71f3a379fd1dcd1aaf0306cf7e8fe8bdf4960_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ede6c5cadcc51f0a541fa4e1866429b09f68f804bbfd316ec21390653a9d1f15 = $this->env->getExtension("native_profiler");
        $__internal_ede6c5cadcc51f0a541fa4e1866429b09f68f804bbfd316ec21390653a9d1f15->enter($__internal_ede6c5cadcc51f0a541fa4e1866429b09f68f804bbfd316ec21390653a9d1f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ede6c5cadcc51f0a541fa4e1866429b09f68f804bbfd316ec21390653a9d1f15->leave($__internal_ede6c5cadcc51f0a541fa4e1866429b09f68f804bbfd316ec21390653a9d1f15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_767ec948e3c38554375018c85c6283789c311c0ad78c99d422e9373860b9e239 = $this->env->getExtension("native_profiler");
        $__internal_767ec948e3c38554375018c85c6283789c311c0ad78c99d422e9373860b9e239->enter($__internal_767ec948e3c38554375018c85c6283789c311c0ad78c99d422e9373860b9e239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_767ec948e3c38554375018c85c6283789c311c0ad78c99d422e9373860b9e239->leave($__internal_767ec948e3c38554375018c85c6283789c311c0ad78c99d422e9373860b9e239_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3e09e61acd3eb182486e11903175410987c0da1ef0e31b945f644ce5a00a260 = $this->env->getExtension("native_profiler");
        $__internal_e3e09e61acd3eb182486e11903175410987c0da1ef0e31b945f644ce5a00a260->enter($__internal_e3e09e61acd3eb182486e11903175410987c0da1ef0e31b945f644ce5a00a260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e3e09e61acd3eb182486e11903175410987c0da1ef0e31b945f644ce5a00a260->leave($__internal_e3e09e61acd3eb182486e11903175410987c0da1ef0e31b945f644ce5a00a260_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
