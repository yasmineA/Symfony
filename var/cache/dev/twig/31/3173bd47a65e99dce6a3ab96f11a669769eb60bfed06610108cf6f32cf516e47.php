<?php

/* ::base.html.twig */
class __TwigTemplate_23dc0cdca1e54e7edda3bfc34edb622bf87cefbe652a834a60fbd19823c045f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3f3314a8c84cc8d9f990e3c1d724ce826b42ab1f36bb1cc3f2977b70cb18ab2 = $this->env->getExtension("native_profiler");
        $__internal_a3f3314a8c84cc8d9f990e3c1d724ce826b42ab1f36bb1cc3f2977b70cb18ab2->enter($__internal_a3f3314a8c84cc8d9f990e3c1d724ce826b42ab1f36bb1cc3f2977b70cb18ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>Bootstrap, from Twitter</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

<!-- Bootstrap -->
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Le styles -->
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.1.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Le styles -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/videotheque-spec.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style type=\"text/css\">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

    </style>
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  </head>

  <body>
    <div class=\"container-fluid\">
      <div class=\"row-fluid\">
        <div class=\"span3\">
          <img id=\"logo\" src=\"img/icon.png\"/>
          <h4>E_Films</h4>
          </br>
          <div class=\"well sidebar-nav\">
            ";
        // line 41
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "          </div><!--/.well -->
        </div><!--/span sidebar-->

        <div class=\"span9\">
          <h1>La liste des films disponibles dans notre boutique</h1>
          <div class=\"hero-unit\">
            ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>© Yasmine_Ons 2016</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
        
        $__internal_a3f3314a8c84cc8d9f990e3c1d724ce826b42ab1f36bb1cc3f2977b70cb18ab2->leave($__internal_a3f3314a8c84cc8d9f990e3c1d724ce826b42ab1f36bb1cc3f2977b70cb18ab2_prof);

    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ab7d0543d3c11e55475b65cf5a8b923e2a167aa703c2e5f39256e490bc85c90a = $this->env->getExtension("native_profiler");
        $__internal_ab7d0543d3c11e55475b65cf5a8b923e2a167aa703c2e5f39256e490bc85c90a->enter($__internal_ab7d0543d3c11e55475b65cf5a8b923e2a167aa703c2e5f39256e490bc85c90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_ab7d0543d3c11e55475b65cf5a8b923e2a167aa703c2e5f39256e490bc85c90a->leave($__internal_ab7d0543d3c11e55475b65cf5a8b923e2a167aa703c2e5f39256e490bc85c90a_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9b0c8e9be146684370d16b75442acfb514d4968ee770a7e9d5318d232d99482 = $this->env->getExtension("native_profiler");
        $__internal_a9b0c8e9be146684370d16b75442acfb514d4968ee770a7e9d5318d232d99482->enter($__internal_a9b0c8e9be146684370d16b75442acfb514d4968ee770a7e9d5318d232d99482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9b0c8e9be146684370d16b75442acfb514d4968ee770a7e9d5318d232d99482->leave($__internal_a9b0c8e9be146684370d16b75442acfb514d4968ee770a7e9d5318d232d99482_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 48,  173 => 41,  162 => 77,  158 => 76,  154 => 75,  150 => 74,  146 => 73,  142 => 72,  138 => 71,  134 => 70,  130 => 69,  126 => 68,  122 => 67,  118 => 66,  114 => 65,  96 => 49,  94 => 48,  86 => 42,  84 => 41,  69 => 29,  55 => 18,  51 => 17,  47 => 16,  41 => 13,  36 => 11,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <title>Bootstrap, from Twitter</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/* <!-- Bootstrap -->*/
/* <link rel="stylesheet" href="{{asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css')}}">*/
/* <!-- Le styles -->*/
/* <script type="text/javascript" src="{{asset('js/jquery-2.2.1.min.js')}}"></script>*/
/* */
/*     <!-- Le styles -->*/
/*     <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/videotheque-spec.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">*/
/*     <style type="text/css">*/
/*       body {*/
/*         padding-top: 60px;*/
/*         padding-bottom: 40px;*/
/*       }*/
/*       .sidebar-nav {*/
/*         padding: 9px 0;*/
/*       }*/
/* */
/*     </style>*/
/*     <link href="{{ asset('css/bootstrap-responsive.css') }}" rel="stylesheet">*/
/* */
/*   </head>*/
/* */
/*   <body>*/
/*     <div class="container-fluid">*/
/*       <div class="row-fluid">*/
/*         <div class="span3">*/
/*           <img id="logo" src="img/icon.png"/>*/
/*           <h4>E_Films</h4>*/
/*           </br>*/
/*           <div class="well sidebar-nav">*/
/*             {% block sidebar %}{% endblock %}*/
/*           </div><!--/.well -->*/
/*         </div><!--/span sidebar-->*/
/* */
/*         <div class="span9">*/
/*           <h1>La liste des films disponibles dans notre boutique</h1>*/
/*           <div class="hero-unit">*/
/*             {% block body %}{% endblock %}*/
/* */
/*           </div>*/
/*         </div><!--/span-->*/
/*       </div><!--/row-->*/
/* */
/*       <hr>*/
/* */
/*       <footer>*/
/*         <p>© Yasmine_Ons 2016</p>*/
/*       </footer>*/
/* */
/*     </div><!--/.fluid-container-->*/
/* */
/*     <!-- Le javascript*/
/*     ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/*     <script src="{{ asset('js/jquery.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-transition.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-alert.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-modal.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-dropdown.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-scrollspy.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-tab.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-tooltip.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-popover.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-button.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-collapse.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-carousel.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-typeahead.js') }}"></script>*/
/* */
/*   </body>*/
/* </html>*/
